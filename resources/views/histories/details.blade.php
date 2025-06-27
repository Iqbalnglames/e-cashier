@extends('layouts.app')
@section('title', 'Riwayat Transaksi')
@section('content')
    <div class="w-fit p-5 bg-white drop-shadow-md rounded-lg border border-gray-200">
        <h1 class="text-center">Toko A</h1>
        <span>----------------------------------------------------</span>
        <div class="flex justify-between">
            <p>Transaksi No. {{ $transactions->id }}</p>
            <p>{{ $transactions->transaction_date }}</p>
        </div>
        <span>----------------------------------------------------</span>
        <div>
            @foreach ($transactionDetails as $detail)
            <div class="flex justify-between">
                <p>{{ $detail->product->name }}</p>
                <div class="flex space-x-1">
                    <p class="font-light">x{{ $detail->quantity }}</p>
                    <p>Rp. {{ number_format($detail->product->selling_price, 0, ',', '.'); }}</p>
            </div>
            </div>
            @endforeach
        </div>
        <span>----------------------------------------------------</span>
        <div class="flex justify-between">
            <p>Total</p>
            <p>Rp. {{ number_format($transactions->total_price, 0, ',', '.'); }}</p>
        </div>
    </div>
    <script>
        const transactionDetails = @json($transactionDetails);
        console.log(transactionDetails);
    </script>
@endsection
