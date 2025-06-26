@extends('layouts.app')
@section('title', 'Tambah Produk')
@section('header')
<h1 class="text-xl font-bold">Tambah Produk</h1>
@endsection
@section('content')
<div class="container mx-auto">
        @if(session('message'))
            <h1>{{session('message')}}</h1>
        @endif
        <form action="/tambah-produk" enctype="multipart/form-data" method="POST">
            @csrf
            <div class="mb-4">
                <label for="name" class="block text-gray-700">Gambar Produk</label>
                <input type="file" name="image" id="image" class="bg-white p-2 mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-blue-500 focus:ring focus:ring-blue-200" required>
                @error('image')
                    <span class="text-red-500 text-sm">{{ $message }}</span>
                @enderror
            </div>
            <div class="mb-4">
                <label for="name" class="block text-gray-700">Nama Produk</label>
                <input type="text" name="name" id="name" value="{{old('name')}}" class="bg-white p-2 mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-blue-500 focus:ring focus:ring-blue-200" required>
                @error('name')
                    <span class="text-red-500 text-sm">{{ $message }}</span>
                @enderror
            </div>
            <div class="mb-4">
                <label for="price" class="block text-gray-700">Harga Beli</label>
                <input type="number" name="purchase_price" id="price" value="{{old('purchase_price')}}" class="bg-white p-2 mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-blue-500 focus:ring focus:ring-blue-200" required>
                @error('purchase_price')
                    <span class="text-red-500 text-sm">{{ $message }}</span>
                @enderror
            </div>
            <div class="mb-4">
                <label for="price" class="block text-gray-700">Harga Jual</label>
                <input type="number" name="selling_price" id="price" value="{{old('selling_price')}}" class="bg-white p-2 mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-blue-500 focus:ring focus:ring-blue-200" required>
                @error('selling_price')
                    <span class="text-red-500 text-sm">{{ $message }}</span>
                @enderror
            </div>
            <div class="mb-4">
                <label for="price" class="block text-gray-700">Kategori</label>
                <select class="bg-white p-2 mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-blue-500 focus:ring focus:ring-blue-200" name="category_id">
                    <option disabled selected>--pilih kategori--</option>
                    @foreach($categories as $category)
                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                    @endforeach
                </select>
                @error('category_id')
                    <span class="text-red-500 text-sm">{{ $message }}</span>
                @enderror
            </div>
            <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded">Simpan</button>
            <a href="data-produk" class="bg-red-500 text-white px-4 py-2.5 rounded">Kembali</a>
        </form>
    </div>
@endsection
 