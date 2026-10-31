@extends('layouts.app')
@section('title', 'Data Produk')
@section('header')
<h1 class="text-xl font-bold">Data Produk</h1>
@endsection
@section('content')
<div class="container mb-4 mx-auto">
    <div class="py-4">
        <a class="p-2.5 bg-blue-500 hover:bg-blue-700 text-white rounded" href="/tambah-produk">Tambah Produk</a>
        <a class="p-2.5 bg-blue-500 hover:bg-blue-700 text-white rounded" href="/data-kategori">Data Kategori</a>
    </div>
    <table class="w-full bg-white border border-gray-300">
        <thead>
            <tr>
                <th class="py-2 px-4 border-b">No.</th>
                <th class="py-2 px-4 border-b">Nama Produk</th>
                <th class="py-2 px-4 border-b">Kategori</th>
                <th class="py-2 px-4 border-b">Harga</th>
                <th class="py-2 px-4 border-b">Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($products as $product)
                <tr>
                    <td class="py-2 px-4 border-b">{{$loop->iteration}}</td>
                    <td class="py-2 px-4 border-b">{{ $product->name }}</td>
                    <td class="py-2 px-4 border-b">{{ $product->category->name }}</td>
                    <td class="py-2 px-4 border-b">{{ $product->selling_price }}</td>
                    <td class="py-2 px-4 border-b">
                        <a href="/edit-produk/{{ $product->id }}" class="text-blue-500 hover:underline">Edit</a>
                        |
                        <form action="/produk/{{ $product->id }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="text-red-500 hover:underline">Hapus</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
