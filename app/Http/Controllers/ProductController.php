<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = Product::all();
        return view('products.index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Category::all();
        return view('products.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'purchase_price' => 'required|numeric',
            'selling_price' => 'required|numeric',
            'category_id' => 'required|exists:categories,id',
        ]);

        $image = $request->file('image');
        $image->storeAs('products', $image->hashName());

        Product::create([
            'image' => $image->hashName(),
            'name' => $request->name,
            'purchase_price' => $request->purchase_price,
            'selling_price' => $request->selling_price,
            'category_id' => $request->category_id,

        ]);

        return redirect()->route('tambah-produk')->with('success', 'Produk berhasil ditambahkan.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $product)
    {
        $categories = Category::all();
        return view('products.edit', compact('product', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     */
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
            $image->storeAs('products', $image->hashName());
            $data['image'] = $image->hashName();
            Storage::delete('products/' . $product->image);
        }
        
        $product->update($data);

        return redirect()->route('data-produk')->with('success', 'Produk berhasil diperbarui');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {
        //
    }
}
