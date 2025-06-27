@extends('layouts.app')
@section('title', 'Point Of Sales')
@section('header')
    <div class="flex pt-2 space-x-4">
        <div class="p-2 bg-white mb-2 rounded-full items-center flex w-fit">
            <div class="fill-blue-500 p-2 rounded-full bg-blue-100 mr-1"><svg version="1.1" id="Capa_1"
                    xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" height="15px"
                    viewBox="0 0 610.398 610.398" xml:space="preserve">
                    <g>
                        <g>
                            <path d="M159.567,0h-15.329c-1.956,0-3.811,0.411-5.608,0.995c-8.979,2.912-15.616,12.498-15.616,23.997v10.552v27.009v14.052
                                       c0,2.611,0.435,5.078,1.066,7.44c2.702,10.146,10.653,17.552,20.158,17.552h15.329c11.724,0,21.224-11.188,21.224-24.992V62.553
                                       V35.544V24.992C180.791,11.188,171.291,0,159.567,0z" />
                            <path
                                d="M461.288,0h-15.329c-11.724,0-21.224,11.188-21.224,24.992v10.552v27.009v14.052c0,13.804,9.5,24.992,21.224,24.992
                                       h15.329c11.724,0,21.224-11.188,21.224-24.992V62.553V35.544V24.992C482.507,11.188,473.007,0,461.288,0z" />
                            <path
                                d="M539.586,62.553h-37.954v14.052c0,24.327-18.102,44.117-40.349,44.117h-15.329c-22.247,0-40.349-19.79-40.349-44.117
                                       V62.553H199.916v14.052c0,24.327-18.102,44.117-40.349,44.117h-15.329c-22.248,0-40.349-19.79-40.349-44.117V62.553H70.818
                                       c-21.066,0-38.15,16.017-38.15,35.764v476.318c0,19.784,17.083,35.764,38.15,35.764h468.763c21.085,0,38.149-15.984,38.149-35.764
                                       V98.322C577.735,78.575,560.671,62.553,539.586,62.553z M527.757,557.9l-446.502-0.172V173.717h446.502V557.9z" />
                            <path
                                d="M353.017,266.258h117.428c10.193,0,18.437-10.179,18.437-22.759s-8.248-22.759-18.437-22.759H353.017
                                       c-10.193,0-18.437,10.179-18.437,22.759C334.58,256.074,342.823,266.258,353.017,266.258z" />
                            <path
                                d="M353.017,348.467h117.428c10.193,0,18.437-10.179,18.437-22.759c0-12.579-8.248-22.758-18.437-22.758H353.017
                                       c-10.193,0-18.437,10.179-18.437,22.758C334.58,338.288,342.823,348.467,353.017,348.467z" />
                            <path d="M353.017,430.676h117.428c10.193,0,18.437-10.18,18.437-22.759s-8.248-22.759-18.437-22.759H353.017
                                       c-10.193,0-18.437,10.18-18.437,22.759S342.823,430.676,353.017,430.676z" />
                            <path
                                d="M353.017,512.89h117.428c10.193,0,18.437-10.18,18.437-22.759c0-12.58-8.248-22.759-18.437-22.759H353.017
                                       c-10.193,0-18.437,10.179-18.437,22.759C334.58,502.71,342.823,512.89,353.017,512.89z" />
                            <path
                                d="M145.032,266.258H262.46c10.193,0,18.436-10.179,18.436-22.759s-8.248-22.759-18.436-22.759H145.032
                                       c-10.194,0-18.437,10.179-18.437,22.759C126.596,256.074,134.838,266.258,145.032,266.258z" />
                            <path
                                d="M145.032,348.467H262.46c10.193,0,18.436-10.179,18.436-22.759c0-12.579-8.248-22.758-18.436-22.758H145.032
                                       c-10.194,0-18.437,10.179-18.437,22.758C126.596,338.288,134.838,348.467,145.032,348.467z" />
                            <path d="M145.032,430.676H262.46c10.193,0,18.436-10.18,18.436-22.759s-8.248-22.759-18.436-22.759H145.032
                                       c-10.194,0-18.437,10.18-18.437,22.759S134.838,430.676,145.032,430.676z" />
                            <path
                                d="M145.032,512.89H262.46c10.193,0,18.436-10.18,18.436-22.759c0-12.58-8.248-22.759-18.436-22.759H145.032
                                       c-10.194,0-18.437,10.179-18.437,22.759C126.596,502.71,134.838,512.89,145.032,512.89z" />
                        </g>
                    </g>
                </svg></div>
            <p id="date"></p>
        </div>
        <div class="p-2 bg-white mb-2 rounded-full flex items-center w-fit">
            <div class="p-2 rounded-full mr-1 bg-blue-100"><svg height="15px" fill="none" viewBox="0 0 24 24"
                    xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M12 7V12H15M21 12C21 16.9706 16.9706 21 12 21C7.02944 21 3 16.9706 3 12C3 7.02944 7.02944 3 12 3C16.9706 3 21 7.02944 21 12Z"
                        stroke="#2b7fff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                </svg></div>
            <p id="time">Loading...</p>
        </div>
    </div>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const dateElement = document.getElementById('date');
            const timeElement = document.getElementById('time');

            // Update time every second
            setInterval(() => {
                const now = new Date();
                const options = {
                    hour: '2-digit',
                    minute: '2-digit',
                    second: '2-digit',
                    hour12: false
                };
                const timeString = now.toLocaleTimeString('id-ID', options);
                timeElement.textContent = timeString;
            }, 1000);

            const options = {
                weekday: 'long',
                year: 'numeric',
                month: 'long',
                day: 'numeric'
            };
            const today = new Date().toLocaleDateString('id-ID', options);
            dateElement.textContent = today;
        });
    </script>
@endsection
@section('content')
    <style>
        .checkmark {
            display: inline-block;
            transform: rotate(45deg);
            height: 34px;
            width: 15px;
            margin-left: 10%;
            border-bottom: 8px solid white;
            border-right: 8px solid white;
        }
    </style>

    @if (session('success'))
        {{-- Overlay --}}
        <div id="success-overlay"
            class="w-screen h-screen fixed inset-0 bg-black opacity-0 z-30 transition-opacity duration-500 pointer-events-auto">
        </div>

        {{-- Alert --}}
        <div id="success-alert"
            class="fixed bg-white z-40 h-52 w-80 rounded-md drop-shadow-md
        transition-all duration-500 transform translate-y-[-100%] opacity-0
        left-1/2 top-1/2 -translate-x-1/2 -translate-y-1/2 space-y-4">
            {{-- Green circle with checkmark --}}
            <div
                class="rounded-full bg-green-400 w-20 h-20 absolute left-1/2 -translate-x-1/2 -top-8 
            flex items-center justify-center p-4 drop-shadow-xl
            transition-transform duration-500 transform scale-0">
                <div class="checkmark transition-transform duration-500 transform scale-0"></div>
            </div>

            {{-- Content --}}
            <div class="flex items-center justify-center mt-20">
                <div>
                    <h1 class="text-center text-2xl font-bold transition-opacity duration-500 opacity-0">
                        Transaksi Berhasil
                    </h1>
                    <p class="text-center font-light text-sm transition-opacity duration-500 opacity-0">
                        Orderan telah berhasil tersimpan
                    </p>
                </div>
            </div>

            {{-- Button --}}
            <div class="flex justify-center">
                <button id="success-close"
                    class="p-2 rounded-sm bg-green-400 hover:bg-green-500 text-white
                transition-all duration-300 transform scale-0">
                    Tutup
                </button>
            </div>
        </div>

        <script>
            document.addEventListener('DOMContentLoaded', function() {
                const overlay = document.getElementById('success-overlay');
                const alert = document.getElementById('success-alert');
                const checkmark = document.querySelector('.checkmark');
                const title = alert.querySelector('h1');
                const text = alert.querySelector('p');
                const button = document.getElementById('success-close');
                const circle = alert.querySelector('.rounded-full');

                // Show animation
                setTimeout(() => {
                    overlay.classList.add('opacity-50');
                    alert.classList.remove('translate-y-[-100%]', 'opacity-0');
                    circle.classList.remove('scale-0');
                    setTimeout(() => {
                        checkmark.classList.remove('scale-0');
                        title.classList.remove('opacity-0');
                        text.classList.remove('opacity-0');
                        button.classList.remove('scale-0');
                    }, 400);
                }, 100);

                // Close animation
                button.addEventListener('click', () => {
                    button.classList.add('scale-0');
                    title.classList.add('opacity-0');
                    text.classList.add('opacity-0');
                    checkmark.classList.add('scale-0');
                    setTimeout(() => {
                        circle.classList.add('scale-0');
                        alert.classList.add('translate-y-[-100%]', 'opacity-0');
                        overlay.classList.remove('opacity-50');
                    }, 300);
                    setTimeout(() => {
                        overlay.classList.add('hidden');
                        alert.classList.add('hidden');
                    }, 800);
                });
            });
        </script>
    @endif
    <div class="flex">
        <!-- Main Content -->
        <main class="flex-1 flex flex-col">
            <!-- Header & Category -->
            <div class="flex justify-between items-center mb-6">
                <div>
                    <input type="text" placeholder="Search for food, coffee, etc"
                        class="px-4 py-2 rounded-xl border border-gray-200 focus:outline-none focus:ring-2 focus:ring-blue-300 w-72" />
                </div>
            </div>
            <!-- Category Tabs -->
            <div class="flex gap-3 mb-6">
                <button value="all" data-id="all"
                    class="category-btn cursor-pointer bg-yellow-100 text-yellow-600 border-yellow-400 px-4 py-2 rounded-xl font-semibold flex items-center gap-2 border-2 border-gray-300">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path d="M12 8v4l3 3" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                    All
                </button>
                @foreach ($categories as $category)
                    <button value="{{ $category->name }}" data-id="{{ $category->id }}"
                        class="category-btn cursor-pointer bg-gray-100 hover:bg-yellow-100 hover:text-yellow-600 hover:border-yellow-400 px-4 py-2 rounded-xl font-semibold flex items-center gap-2 border-2 border-gray-300">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path d="M12 8v4l3 3" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                        {{ $category->name }}
                    </button>
                @endforeach
            </div>
            <!-- Choose Order -->
            <div class="flex justify-between items-center mb-4">
                <h2 class="text-lg font-semibold">Choose <span class="font-normal">Order</span></h2>
            </div>
            <!-- Menu Grid -->
            <div id="product-list" class="grid xl:grid-cols-4 grid-cols-5 w-fit gap-6">
            </div>
        </main>
        <!-- Order Menu -->
        <form action="{{ route('transaction') }}" method="POST"
            class="fixed z-20 right-0 top-0 w-96 xl:w-1/4 h-screen bg-white shadow-md p-6 overflow-y-auto">
            @csrf
            <div class="mb-3">
                <h2 class="text-xl font-bold text-center">Order Menu</h2>
                <p class="text-center text-sm">Order Number #4123</p>
            </div>
            <div id="order-item" class="flex flex-col h-9/12 space-y-5">

                <!-- Order Item will be dynamically added here -->
            </div>
            <!-- Subtotal -->
            <div class="mt-6 border-dashed border-t pt-4">
                <div class="flex justify-between text-gray-500 mb-2">
                    <span>Total</span>
                    <span id="total" class="font-semibold text-gray-700">Rp. 0,00</span>
                    <input type="hidden" name="total_price" id="total-input">
                    <input type="hidden" name="total_profit" id="profit-input">
                </div>
                <button type="submit"
                    class="w-full absolute bottom-0 left-0 bg-blue-500 text-white py-3 h-1/12 text-lg font-bold hover:bg-blue-600 transition">Bayar</button>
            </div>
        </form>

        {{-- pop up menu --}}
        {{-- menu overlay --}}
        <div id="menu-overlay"
            class="w-screen h-screen fixed inset-0 bg-black opacity-0 z-10 transition-opacity pointer-events-none duration-500">
        </div>

        {{-- main pop up menu --}}
        <div id="popup-menu"
            class="hidden transform -translate-x-full transition-transform duration-500 ease-in-out absolute left-52 top-52 z-20 drop-shadow-md p-4 space-y-2 rounded-md bg-white h-fit w-fit">
            <div class="-mt-2">
                <h1 class="text-center">Detail Menu</h1>
                <div id="close-btn"
                    class="absolute right-2 top-2 rounded-full text-red-400 cursor-pointer bg-red-100 h-7 w-7 text-center font-light">
                    X
                </div>
            </div>
            <div id="img-cover" class="p-4 w-full flex place-items-center justify-center h-40 bg-gray-100 rounded">
                <svg class="fill-gray-200" height="30px" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M21.71,14.54,19.21,12a1,1,0,0,0-1.42,0L15,14.84,12.21,12a1,1,0,0,0-1.42,0L8.5,14.34,6.21,12a1,1,0,0,0-1.42,0l-2.5,2.5a1,1,0,0,0-.21.33,1,1,0,0,0-.08.38V19a3,3,0,0,0,3,3H19a3,3,0,0,0,3-3V15.25a1,1,0,0,0-.08-.38A1,1,0,0,0,21.71,14.54ZM20,19a1,1,0,0,1-1,1H5a1,1,0,0,1-1-1V15.66l1.5-1.5,2.29,2.3a1,1,0,0,0,1.42,0l2.29-2.3L14.29,17a1,1,0,0,0,1.42,0l2.79-2.8,1.5,1.5ZM19,2H5A3,3,0,0,0,2,5v5.26a1.17,1.17,0,0,0,0,.27s0,.07,0,.1a1,1,0,0,0,1.66.31L5.5,9.16l2.29,2.3a1,1,0,0,0,1.42,0l2.29-2.3L14.29,12a1,1,0,0,0,1.42,0l2.79-2.8,1.77,1.78a1,1,0,0,0,1.66-.31.28.28,0,0,0,0-.09.88.88,0,0,0,.06-.28V5A3,3,0,0,0,19,2Zm1,5.84L19.21,7a1,1,0,0,0-1.42,0L15,9.84,12.21,7a1,1,0,0,0-1.42,0L8.5,9.34,6.21,7A1,1,0,0,0,4.79,7L4,7.84V5A1,1,0,0,1,5,4H19a1,1,0,0,1,1,1Z" />
                </svg>
            </div>
            <div id="product-category" class="p-1 px-2 text-xs rounded-full bg-green-200 w-fit text-green-500">Gorengan
            </div>
            <div>
                <h1 id="product-name"></h1>
                <p id="product-price" class="font-light text-sm"></p>
            </div>
            <div class="flex p-1 justify-between items-center bg-gray-100 rounded-full px-1">
                <div id="minus" class="cursor-pointer h-7 w-7 text-center font-bold bg-white rounded-full">
                    -
                </div>
                <p id="qty">1</p>
                <div id="plus" class="cursor-pointer h-7 w-7 text-center font-bold bg-white rounded-full">
                    +
                </div>
            </div>
            <button id='add-product'
                class="-mx-4 -mb-4 p-4 w-[232px] bg-blue-500 text-center rounded-b-md text-white">Tambah Ke
                Pesanan</button>
        </div>
    </div>
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const categoryButtons = document.querySelectorAll('.category-btn');
            const productList = document.getElementById('product-list');
            const allData = {!! json_encode($products) !!};
            const totalElement = document.getElementById('total');
            const totalInput = document.getElementById('total-input');
            const profitInput = document.getElementById('profit-input');
            const searchBox = document.querySelector('input[type="text"]');
            const orderItems = document.querySelector('#order-item')

            searchBox.addEventListener('input', function() {
                const searchTerm = this.value.toLowerCase()
                const filteredProducts = allData.filter(product => product.name.toLowerCase().includes(
                    searchTerm));
                if (filteredProducts.length > 0) {
                    const showFilteredData = filteredProducts.map(product => {
                        return `
                    <div class="product-btn bg-white rounded-2xl p-4 flex xl:w-72 flex-col items-center shadow hover:shadow-lg cursor-pointer">
                        <div class="product-id hidden">${product.id}</div>
                        <div class="product-name font-semibold">${product.name}</div>
                        <div class="product-price text-gray-400">Rp. ${Number(product.selling_price).toLocaleString('id-ID', {minimumFractionDigits: 2})}</div>
                        <div class="hidden purchase-price">${product.purchase_price}</div>
                    </div>
                `;
                    })
                    productList.innerHTML = showFilteredData.join('')
                    addProductToOrder();
                } else {
                    productList.innerHTML =
                        '<div class="col-span-4 text-center text-gray-400">Produk tidak ditemukan.</div>';
                }
            });

            let total = 0
            let totalPurchasePrice = 0

            const allProducts = () => {
                const showAllData = allData.map(product => {
                    return `
            <div class="product-btn bg-white rounded p-2 xl:w-60 flex flex-col items-center shadow hover:shadow-lg cursor-pointer">
                ${product.image === null
                    ? `<div class="product-image p-4 w-full flex content-center justify-center xl:h-28 h-16 items-center bg-gray-100 rounded">
                                                        <svg class="fill-gray-200" height="30px" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                                            <path d="M21.71,14.54,19.21,12a1,1,0,0,0-1.42,0L15,14.84,12.21,12a1,1,0,0,0-1.42,0L8.5,14.34,6.21,12a1,1,0,0,0-1.42,0l-2.5,2.5a1,1,0,0,0-.21.33,1,1,0,0,0-.08.38V19a3,3,0,0,0,3,3H19a3,3,0,0,0,3-3V15.25a1,1,0,0,0-.08-.38A1,1,0,0,0,21.71,14.54ZM20,19a1,1,0,0,1-1,1H5a1,1,0,0,1-1-1V15.66l1.5-1.5,2.29,2.3a1,1,0,0,0,1.42,0l2.29-2.3L14.29,17a1,1,0,0,0,1.42,0l2.79-2.8,1.5,1.5ZM19,2H5A3,3,0,0,0,2,5v5.26a1.17,1.17,0,0,0,0,.27s0,.07,0,.1a1,1,0,0,0,1.66.31L5.5,9.16l2.29,2.3a1,1,0,0,0,1.42,0l2.29-2.3L14.29,12a1,1,0,0,0,1.42,0l2.79-2.8,1.77,1.78a1,1,0,0,0,1.66-.31.28.28,0,0,0,0-.09.88.88,0,0,0,.06-.28V5A3,3,0,0,0,19,2Zm1,5.84L19.21,7a1,1,0,0,0-1.42,0L15,9.84,12.21,7a1,1,0,0,0-1.42,0L8.5,9.34,6.21,7A1,1,0,0,0,4.79,7L4,7.84V5A1,1,0,0,1,5,4H19a1,1,0,0,1,1,1Z"/>
                                                        </svg>
                                                      </div>`
                    : `<div class="product-image p-4 w-full flex content-center justify-center xl:h-28 h-16 bg-cover bg-center rounded"
                                   style="background-image: url('/storage/products/${product.image}')">
                              </div>`
                }
                <div class="product-id hidden">${product.id}</div>
                <div class="product-name font-semibold">${product.name}</div>
                <div class="product-price text-gray-400">Rp. ${Number(product.selling_price).toLocaleString('id-ID', {minimumFractionDigits: 2})}</div>
                <div class="hidden purchase-price">${product.purchase_price}</div>
                <div class="hidden category">${product.category.name}</div>
            </div>
        `;
                }).join('');
                productList.innerHTML = showAllData ||
                    '<div class="col-span-4 text-center text-gray-400">Produk tidak ditemukan.</div>';
            }
            allProducts();

            const quantityHandler = () => {
                const allOrderItems = Array.from(orderItems.children)

                allOrderItems.forEach(item => {
                    const minusCart = item.querySelector('#minus-cart')
                    const plusCart = item.querySelector('#plus-cart')
                    const qtyCart = item.querySelector('#qty-cart')
                    const qtyInput = item.querySelector('input[name="quantity[]"]')

                    minusCart.replaceWith(minusCart.cloneNode(true))
                    plusCart.replaceWith(plusCart.cloneNode(true))

                    newMinus = item.querySelector('#minus-cart')
                    newPlus = item.querySelector('#plus-cart')
                    newMinus.addEventListener('click', () => {
                        let currentQty = parseInt(qtyCart.innerText)
                        if (currentQty > 1) {
                            currentQty--
                            qtyCart.innerText = currentQty
                            qtyInput.value = currentQty
                            countTotalPrice()
                        }
                    })

                    newPlus.addEventListener('click', () => {
                        let currentQty = parseInt(qtyCart.innerText);
                        currentQty++;
                        qtyCart.innerText = currentQty;
                        qtyInput.value = currentQty;
                        countTotalPrice();
                    });
                })

            }

            const countTotalPrice = () => {
                const allOrderElements = Array.from(orderItems.children)
                let totalPrice = 0
                let totalProfit = 0

                allOrderElements.forEach(item => {
                    const price = parseInt(item.querySelector('p').innerText.split(',')[0].replace(
                        /[^0-9]/g, ''))
                    const quantity = parseInt(item.querySelector('#qty-cart').innerText);
                    const purchasePrice = parseInt(item.querySelector('input[name="purchase_price"]')
                        .value);

                    const itemTotal = price * quantity
                    const itemProfit = itemTotal - (purchasePrice * quantity)

                    totalPrice += itemTotal
                    totalProfit += itemProfit
                })

                totalElement.textContent = `Rp. ${totalPrice.toLocaleString('id-ID')}`
                totalInput.value = totalPrice
                profitInput.value = totalProfit
            }



            const addProductToOrder = () => {
                const productButtons = document.querySelectorAll('.product-btn');
                const popUpMenu = document.getElementById('popup-menu');
                const qtyElement = popUpMenu.querySelector('#qty');
                const plusQty = popUpMenu.querySelector('#plus');
                const minQty = popUpMenu.querySelector('#minus');
                const addProduct = document.querySelector('#add-product');
                const closeBtn = document.getElementById('close-btn');
                const menuOverlay = document.getElementById('menu-overlay');

                let currentQty = 1;
                let selectedProductId = '';
                let selectedProductName = '';
                let selectedProductPrice = '';
                let selectedProductPurchasePrice = '';
                let selectedImageProduct = '';

                // Remove existing listeners
                productButtons.forEach(btn => btn.replaceWith(btn.cloneNode(true)));
                addProduct.replaceWith(addProduct.cloneNode(true));

                // Get fresh references after replacing
                const newAddProduct = document.querySelector('#add-product');

                // Quantity controls
                plusQty.addEventListener('click', () => {
                    currentQty++;
                    qtyElement.innerText = currentQty;
                });

                minQty.addEventListener('click', () => {
                    if (currentQty > 1) {
                        currentQty--;
                        qtyElement.innerText = currentQty;
                    }
                });

                // Product click handler
                document.querySelectorAll('.product-btn').forEach(btn => {
                    btn.addEventListener('click', () => {
                        selectedProductId = btn.querySelector('.product-id').innerText;
                        selectedProductName = btn.querySelector('.product-name').innerText;
                        selectedProductPrice = btn.querySelector('.product-price').innerText;
                        selectedPurchasePrice = btn.querySelector('.purchase-price').innerText;
                        selectedImageProduct = btn.querySelector('.product-image')
                        const style = selectedImageProduct.currentStyle || window.getComputedStyle(selectedImageProduct, false);
                        const backgroundImage = style.backgroundImage.slice(4, -1).replace(/"/g, "");
                        const svgEl = popUpMenu.querySelector('svg')
                        if (backgroundImage !== undefined) {
                            const imgCover = popUpMenu.querySelector('#img-cover')
                            svgEl.classList.add('hidden')
                            imgCover.style.backgroundImage = `url(${backgroundImage})`
                            imgCover.style.backgroundSize = 'cover'
                            imgCover.style.backgroundPosition = 'center'
                        } else {
                            const imgCover = popUpMenu.querySelector('#img-cover')
                            svgEl.classList.remove('hidden')
                        }

                        popUpMenu.querySelector('#product-name').innerText =
                            selectedProductName;
                        popUpMenu.querySelector('#product-price').innerText =
                            selectedProductPrice;

                        popUpMenu.classList.remove('hidden', '-translate-x-full');
                        menuOverlay.classList.add('opacity-50');
                    });
                });

                // Add to order handler
                newAddProduct.addEventListener('click', () => {
                    const existingItem = Array.from(orderItems.children)
                        .find(item => item.querySelector('h1').innerText === selectedProductName);

                    if (existingItem) {
                        const qtyElement = existingItem.querySelector('#qty-cart');
                        const currentQtyInCart = parseInt(qtyElement.innerText);
                        qtyElement.innerText = currentQtyInCart + currentQty;
                        existingItem.querySelector('input[name="quantity[]"]').value =
                            currentQtyInCart + currentQty;
                        countTotalPrice()
                    } else {
                        const orderList = `
                <div class="flex justify-between">
                    <div>
                        <div>
                            <h1>${selectedProductName}</h1>
                            <p>${selectedProductPrice}</p>
                        </div>
                    </div>
                    <div class="flex items-center justify-between w-24 px-2 py-1 bg-gray-100 rounded-full">
                        <button type="button" id="minus-cart" class="flex items-center justify-center w-6 h-6 text-gray-600 transition-colors bg-white rounded-full hover:bg-gray-200 focus:outline-none focus:ring-2 focus:ring-blue-300">
                            <span class="text-lg font-medium leading-none select-none -mt-1">−</span>
                        </button>
                        <span id="qty-cart" class="font-medium text-sm text-gray-700 select-none">${currentQty}</span>
                        <input type="hidden" name="product_id[]" value="${selectedProductId}">
                        <input type="hidden" name="quantity[]" value="${currentQty}">
                        <input type="hidden" name="purchase_price" value="${selectedPurchasePrice}">
                        <button type="button" id="plus-cart" class="flex items-center justify-center w-6 h-6 text-gray-600 transition-colors bg-white rounded-full hover:bg-gray-200 focus:outline-none focus:ring-2 focus:ring-blue-300">
                            <span class="text-lg font-medium leading-none select-none -mt-1">+</span>
                        </button>
                    </div>
                </div>
            `;
                        const el = document.createElement('div');
                        el.innerHTML = orderList;
                        orderItems.appendChild(el.firstElementChild);
                        quantityHandler()
                        countTotalPrice()
                    }

                    // Reset and close popup
                    popUpMenu.classList.add('hidden', '-translate-x-full');
                    menuOverlay.classList.remove('opacity-50');
                    currentQty = 1;
                    qtyElement.innerText = currentQty;
                });
                closeBtn.addEventListener('click', () => {
                    if (!popUpMenu.classList.contains('hidden')) {
                        popUpMenu.classList.add('hidden')
                        popUpMenu.classList.add('-translate-x-full')
                        menuOverlay.classList.remove('opacity-50');
                        currentQty = 1
                        qtyElement.innerText = currentQty
                    }
                })
            };

            addProductToOrder()

            categoryButtons.forEach(btn => {
                btn.addEventListener('click', () => {
                    const categoryId = btn.getAttribute('data-id');
                    const categoryName = btn.getAttribute('value');
                    categoryButtons.forEach(btn => {
                        btn.classList.remove('bg-yellow-100', 'text-yellow-600',
                            'border-yellow-400');
                        btn.classList.add('bg-gray-100', 'hover:bg-yellow-100',
                            'hover:text-yellow-600', 'hover:border-yellow-400');
                    })

                    btn.classList.add('bg-yellow-100', 'text-yellow-600', 'border-yellow-400');
                    btn.classList.remove('bg-gray-100', 'hover:bg-yellow-100',
                        'hover:text-yellow-600', 'hover:border-yellow-400')
                    if (categoryId == 'all') {
                        allProducts()
                        addProductToOrder()

                    } else {
                        const filteredProducts = allData.filter(product => product.category_id ==
                            categoryId);
                        let html = '';
                        filteredProducts.forEach(product => {
                            html += `
                                    <div class="product-btn bg-white rounded-2xl xl:w-72 p-4 flex flex-col items-center shadow hover:shadow-lg cursor-pointer">
                                        <div class="product-id hidden">${product.id}</div>
                                        <div class="product-name font-semibold">${product.name}</div>
                                        <div class="product-price text-gray-400">Rp. ${Number(product.selling_price).toLocaleString('id-ID', {minimumFractionDigits: 2})}</div>
                                        <div class="hidden purchase-price">${product.purchase_price}</div>
                                    </div>
                                `;
                        });
                        productList.innerHTML = html ||
                            '<div class="col-span-4 text-center text-gray-400">Produk tidak ditemukan.</div>';
                        addProductToOrder();
                    }
                });
            });
        });
    </script>
@endsection
