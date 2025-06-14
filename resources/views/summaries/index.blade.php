@extends('layouts.app')
@section('title', 'Statistik')
@section('header')
<h1 class="text-xl font-bold">Ringkasan Penjualan</h1>
@endsection
@section('content')
    <div>
        <form class="flex justify-end space-x-4">
            <div>
                <span>Tanggal Awal</span>
                <input type="date" name="tanggal_awal" class="bg-white p-2 rounded drop-shadow-sm" id="">
            </div>
            <div>
                <span>Tanggal Akhir</span>
                <input type="date" name="tanggal_akhir" class="bg-white p-2 rounded drop-shadow-sm" id="">
            </div>
            <div>
                <button class="border rounded-md bg-white border-gray-200 drop-shadow-sm p-2 hover:bg-gray-200"
                    type="reset">Reset Tanggal</button>
            </div>
        </form>
        <div class="flex space-x-3 mb-4">
            <div
                class="drop-shadow-lg border border-gray-300 rounded w-64 p-4 flex justify-between space-x-3 bg-red-400 text-white">
                <div>
                    <h1>Omset Bulan ini</h1>
                    <h1 id="omset"></h1>
                </div>
                <div>
                    <img src="{{ asset('money.svg') }}" alt="money" height="50" width="50">
                </div>
            </div>
            <div
                class="drop-shadow-lg border border-gray-300 rounded w-64 p-4 flex justify-between space-x-3 bg-green-400 text-white">
                <div>
                    <h1>Profit Bulan ini</h1>
                    <h1 id="profit"></h1>
                </div>
                <div>
                    <img src="{{ asset('moneyUp.svg') }}" alt="money" height="50" width="50">
                </div>
            </div>
        </div>
        <div class="flex space-x-3 mb-4">
            <div class="container bg-white drop-shadow-lg border border-gray-300 rounded w-2/4">
                <canvas id="chartSales"></canvas>
            </div>
            <div class="container bg-white drop-shadow-lg border border-gray-300 rounded w-2/4">
                <canvas id="chartProfit"></canvas>
            </div>
        </div>
        <div id="jumlah-item"></div>
        <div>
            <p id="jumlah-profit"></p>
        </div>
    </div>
@endsection
@vite('resources/js/chart.js')
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const omsetElement = document.getElementById('omset');
        const profitElement = document.getElementById('profit');
        const tanggalAwal = document.querySelector('input[name="tanggal_awal"]');
        const tanggalAkhir = document.querySelector('input[name="tanggal_akhir"]');
        const resetButton = document.querySelector('button[type="reset"]');
        const allTransactions = {!! json_encode($transactions) !!};
        const allProducts = {!! json_encode($products) !!};
        const jumlahItem = document.getElementById('jumlah-item');
        const jumlahProfit = document.getElementById('jumlah-profit');
        const d = new Date();
        const dateIndo = d.toLocaleDateString('id-ID');
        const transactionDetails = allTransactions.map(transaction => transaction.transaction_details.map(
            detail => ({
                product: detail.product.name,
                quantity: parseInt(detail.quantity),
            })));

        const omset = allTransactions.filter(transaction => {
            return new Date(transaction.transaction_date).getMonth() === d.getMonth()
        }).reduce((total, detail) => {
            return total + parseInt(detail.total_price);
        }, 0)
        omsetElement.textContent = `Rp. ${omset.toLocaleString("id-ID")}`;

        const profit = allTransactions.filter(transaction => {
            return new Date(transaction.transaction_date).getMonth() === d.getMonth()
        }).reduce((total, detail) => {
            return total + parseInt(detail.total_profit);
        }, 0)
        profitElement.textContent = `Rp. ${profit.toLocaleString("id-ID")}`;

        let profitLabels = [];
        let profitData = [];

        const getProfitData = (startDate, endDate) => {
            profitLabels.length = 0;
            profitData.length = 0;

            const filteredTransactions = allTransactions.filter(transaction => {
                const transactionDate = transaction.transaction_date.split(" ")[0];
                if(!startDate && !endDate) {
                    return new Date(transactionDate).getMonth() >= d.getMonth() && new Date(transactionDate).getMonth() <= d.getMonth();
                } else if(!endDate) {
                    return transactionDate >= startDate;
                } else if(!startDate) {
                    return transactionDate <= endDate;
                } else {
                    return transactionDate >= startDate && transactionDate <= endDate;
                }
            })
             filteredTransactions.forEach(transaction => {
                    const transactionDate = transaction.transaction_date.split(" ")[0]
                    if(!profitLabels.includes(transactionDate)){
                        profitLabels.push(transactionDate)
                        profitData.push(parseInt(transaction.total_profit));
                    }else {
                        const index = profitLabels.indexOf(transactionDate)
                        profitData[index] += parseInt(transaction.total_profit);
                    }
                })
            jumlahProfit.textContent = `Jumlah Keuntungan dari tanggal ${startDate ? new Date(startDate).toLocaleDateString("id-ID") : dateIndo} sampai ${endDate  ? endDate : dateIndo} adalah: Rp. ${profitData.reduce((total, profit) => total + profit, 0).toLocaleString("id-ID")}`;
            return profitData;
        }

        const getFilteredSalesData = (startDate, endDate) => {
            const salesData = allProducts.map(product => {
                return allTransactions.flat().filter(transaction => {
                    const transactionDate = transaction.transaction_date.split(" ")[0];
                    const transactionDateFormatted = new Date(transactionDate).toLocaleDateString('id-ID');
                    if (!startDate && !endDate) {
                        return new Date(transactionDate).getMonth() == d.getMonth() && new Date(transactionDate).getMonth() == d.getMonth();
                    } else if (!endDate) {
                        return transactionDate >= startDate;
                    } else if (!startDate) {
                        return transactionDate <= endDate;
                    } else {
                        return transactionDate >= startDate && transactionDate <= endDate;
                    }
                }).map(transaction => {
                    return transaction.transaction_details.filter(detail => detail.product
                        .name === product.name).reduce((sum, detail) => sum + parseInt(
                        detail.quantity), 0);
                }).reduce((total, quantity) => total + quantity, 0);
            });
            jumlahItem.innerHTML = `Jumlah Penjualan dari tanggal ${startDate ? new Date(startDate).toLocaleDateString("id-ID") : dateIndo} sampai ${endDate  ? endDate : dateIndo} : ${allProducts.map((product, index) => {return `
            <li>${product.name} : ${salesData[index]} item`})}</li>
            `;
            return salesData
        };

        const ctx1 = document.getElementById('chartSales').getContext('2d');
        const ctx2 = document.getElementById('chartProfit').getContext('2d');
        const chartProfit = new Chart(ctx2, {
            type: 'bar',
            data: {
                labels: profitLabels,
                datasets: [{
                    label: 'Profit',
                    data: getProfitData(), // Data awal (semua data)
                    borderWidth: 2,
                    borderColor: 'rgba(75, 192, 192, 1)',
                    backgroundColor: 'rgba(75, 192, 192, 0.3)',
                }]
            },
            options: {
                responsive: true,
                plugins: {
                    legend: {
                        display: false,
                        position: 'right',
                    },
                    title: {
                        display: true,
                        text: 'Grafik Profit'
                    }
                },
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            }
        });
        const chartSales = new Chart(ctx1, {
            type: 'bar',
            data: {
                labels: allProducts.map(product => product.name),
                datasets: [{
                    label: 'Penjualan',
                    data: getFilteredSalesData(), // Data awal (semua data)
                    borderWidth: 2,
                    borderColor: 'rgba(240, 76, 76, 1)',
                    backgroundColor: 'rgba(249, 102, 102, 0.3)',
                }]
            },
            options: {
                responsive: true,
                plugins: {
                    legend: {
                        display: false,
                        position: 'right',
                    },
                    title: {
                        display: true,
                        text: 'Grafik Penjualan Produk'
                    }
                },
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            }
        });

        const updateChart = () => {
            const startDate = tanggalAwal.value ? tanggalAwal.value : null;
            const endDate = tanggalAkhir.value ? tanggalAkhir.value : null;

            chartProfit.data.labels = profitLabels;
            chartProfit.data.datasets[0].data = getProfitData(startDate, endDate);
            chartProfit.update();
            chartSales.data.datasets[0].data = getFilteredSalesData(startDate, endDate);
            chartSales.update();
        }
        tanggalAwal.addEventListener('change', updateChart)
        tanggalAkhir.addEventListener('change', updateChart)
        resetButton.addEventListener('click', () => {
            tanggalAwal.value = '';
            tanggalAkhir.value = '';
            updateChart();
        });
    })
</script>
