@extends('layouts.app')
@section('title', 'Tambah Produk')
@section('content')
<div class="container mx-auto mt-5">
        <h1 class="text-2xl font-bold mb-4">Tambah Produk</h1>
         {{-- @if(session('success')) --}}
       <div id="alert" class="bg-green-100 transition-opacity opacity-100 duration-200 border border-green-400 text-green-700 px-4 py-3 rounded-sm relative my-2" role="alert">
    <h1>{{ session('success') }}</h1>
</div>
<script>
    document.addEventListener('DOMContentLoaded', () => {
        setTimeout(() => {
        const alert = document.getElementById('alert');
        if (alert) {
            alert.classList.add('opacity-0');
            setTimeout(() => {
                alert.style.display = 'none';
            }, 200); // waktu harus sama dengan duration-200
        }
    }, 1000);
    });
    
</script>
        {{-- @endif --}}
        <form action="/tambah-kategori" method="POST">
            @csrf
            <div class="mb-4">
                <label for="name" class="block text-gray-700">Nama Kategori</label>
                <input type="text" name="name" id="name" class="bg-white p-2 mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-blue-500 focus:ring focus:ring-blue-200" required>
            </div>
            <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded">Simpan</button>
            <a href="data-kategori" class="bg-red-500 text-white px-4 py-2.5 rounded">Kembali</a>
        </form>
</div>
@endsection
