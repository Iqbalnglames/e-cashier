@extends('layouts.app')
@section('title', 'Data Kategori')
@section('header')
<h1 class="text-xl font-bold">Data Kategori</h1>
@endsection
@section('content')
<div class="container mx-auto">
    <div class="py-4">
        <a class="p-2.5 bg-blue-500 hover:bg-blue-700 text-white rounded" href="/tambah-kategori">Tambah Kategori</a>
        <a class="p-2.5 bg-blue-500 hover:bg-blue-700 text-white rounded" href="/data-produk">Data Produk</a>
    </div>
    <table class="w-full bg-white border border-gray-300">
        <thead>
            <tr>
                <th class="py-2 px-4 border-b">No.</th>
                <th class="py-2 px-4 border-b">Nama Kategori</th>
                <th class="py-2 px-4 border-b">Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($categories as $category)
                <tr>
                    <td class="py-2 px-4 border-b">{{$loop->iteration}}</td>
                    <td class="py-2 px-4 border-b">{{ $category->name }}</td>
                    <td class="py-2 px-4 border-b">
                        <a href="/kategori/{{ $category->id }}/edit" class="text-blue-500 hover:underline">Edit</a>
                        |
                        <form action="/kategori/{{ $category->id }}" method="POST" style="display:inline;">
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
