@extends('layouts.app')
@section('title', 'Tambah Produk')
@section('content')
<div class="container mx-auto mt-5">
        <h1 class="text-2xl font-bold mb-4">Tambah Produk</h1>
        <form action="/tambah-kategori" method="POST">
            @csrf
            <div class="mb-4">
                <label for="name" class="block text-gray-700">Nama Kategori</label>
                <input type="text" name="name" id="name" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-blue-500 focus:ring focus:ring-blue-200" required>
            </div>
            <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded">Simpan</button>
            <a href="data-kategori" class="bg-red-500 text-white px-4 py-2.5 rounded">Kembali</a>
        </form>
</div>
@endsection
