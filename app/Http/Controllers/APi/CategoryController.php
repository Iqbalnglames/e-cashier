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

    public function edit(Category $category)
    {
        return response()->json([
            "success" => true,
            "message" => "data detail kategori",
            "data" => $category
        ]);
    }

    public function update(Request $request, Category $category)
    {
        $request->validate([
            'name' => 'required|string|max:255',
        ]);

        $data = [
            'name' => $request->name,
        ];


        $category->update($data);

        return response()->json([
            "success" => true,
            "message" => "data berhasil diupdate",
        ]);
    }

    public function destroy(Category $category)
    {
        $category->delete();
        return response()->json([
            'success' => true,
            'message' => 'kategori berhasil dihapus'
        ]);
    }

}
