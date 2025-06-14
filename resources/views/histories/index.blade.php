@extends('layouts.app')
@section('title', 'Riwayat Transaksi')
@section('header')
        <h1 class="font-bold items-center">Riwayat Transaksi</h1>
@endsection
@section('content')
    <div>
        <form class="flex justify-end mb-4 space-x-4">
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
        <div class="h-96 overflow-y-auto">
            <table class="w-full bg-white border  border-gray-300">
                <thead class="sticky inset-0">
                    <tr>
                        <th class="p-2 bg-gray-300 rounded-full">No. </th>
                        <th class="p-2 bg-gray-300 rounded-full">ID Transaksi</th>
                        <th class="p-2 bg-gray-300 rounded-full">Tanggal</th>
                        <th class="p-2 bg-gray-300 rounded-full">Omset</th>
                        <th class="p-2 bg-gray-300 rounded-full">Profit</th>
                        <th class="p-2 bg-gray-300 rounded-full">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($transactions as $transaction)
                        <tr>
                            <td class="py-2 px-4 border-b text-center">{{ $loop->iteration }}</td>
                            <td class="py-2 px-4 border-b text-center">{{ $transaction->id }}</td>
                            <td class="py-2 px-4 border-b text-center">{{ $transaction->transaction_date }}</td>
                            <td class="py-2 px-4 border-b text-center">Rp.
                                {{ number_format($transaction->total_price, 0, ',', '.') }}</td>
                            <td class="py-2 px-4 border-b text-center">Rp.
                                {{ number_format($transaction->total_profit, 0, ',', '.') }}</td>
                            <td class="py-2 px-4 border-b text-center"><a class="text-blue-500" href="history/{{$transaction->id}}">Lihat Detail</a></td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
