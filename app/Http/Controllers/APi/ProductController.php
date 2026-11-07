<?php

namespace App\Http\Controllers\APi;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use Storage;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::with('category')->paginate(10);
        return response()->json([
            'data' => $products,
            'success' => true,
            'message' => 'data produk'
        ]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'purchase_price' => 'required|numeric',
            'selling_price' => 'required|numeric',
            'category_id' => 'required|exists:categories,id',
        ]);

        $imageName = null;

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = $image->hashName();
            $image->storeAs('products', $image->hashName());
        }

        Product::create([
            'image' => $imageName,
            'name' => $request->name,
            'purchase_price' => $request->purchase_price,
            'selling_price' => $request->selling_price,
            'category_id' => $request->category_id,

        ]);

        return response()->json([
            'success' => true,
            'message' => 'berhasil menyimpan data'
        ]);
    }

    public function edit(Product $product)
    {
        return response()->json([
            "success" => true,
            "message" => "data detail produk",
            "data" => $product
        ]);
    }

    public function update(Request $request, Product $product)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'purchase_price' => 'required|numeric',
            'selling_price' => 'required|numeric',
            'category_id' => 'required|exists:categories,id',
        ]);

        // dd($request->all());

        $data = [
            'name' => $request->name,
            'purchase_price' => $request->purchase_price,
            'selling_price' => $request->selling_price,
            'category_id' => $request->category_id,
        ];

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            Storage::delete('products/' . $product->image);
            $image->storeAs('products', $image->hashName());
            $data['image'] = $image->hashName();
        }

        $product->update($data);

         return response()->json([
            "success" => true,
            "message" => "data berhasil diupdate",
        ]);
    }

    public function destroy(Product $product) {
        $product->delete();

        return response()->json([
            'message' => 'produk berhasil dihapus',
            'success' => true
        ]);
    }
}
