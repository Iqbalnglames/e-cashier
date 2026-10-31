<?php

namespace App\Http\Controllers\APi;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
     public function index()
    {
        $categories = Category::paginate(10);
        return response()->json([
            'data' => $categories,
            'success' => true,
            'message' => 'data kategori produk'
        ]);
    }

    public function store(Request $request)
    {
        $validate = $request->validate([
            'name' => 'required',
        ]);

        Category::create($validate);

        return response()->json([
            'success' => true,
            'message' => 'data berhasil ditambahkan'
        ]);
    }
}
