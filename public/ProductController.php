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
        'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,webp|max:2048',
        'purchase_price' => 'required|numeric',
        'selling_price' => 'required|numeric',
        'category_id' => 'required|exists:categories,id',
    ]);

    $imageName = null;

    if ($request->hasFile('image')) {
        $image = $request->file('image');

        $imageName = time().'_'.uniqid().'.'.$image->getClientOriginalExtension();

        $destination = public_path('../../products');

        $image->move($destination, $imageName);
    }

    Product::create([
        'image' => $imageName,
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
    public function update() 
    {
            if ($request->hasFile('image')) {

    // hapus file lama
    if ($product->image && file_exists(public_path('products/'.$product->image))) {
        unlink(public_path('products/'.$product->image));
    }

    $image = $request->file('image');
    $imageName = time().'_'.$image->getClientOriginalName();

    $destination = public_path('products');

    if (!file_exists($destination)) {
        mkdir($destination, 0777, true);
    }

    $image->move($destination, $imageName);

    $data['image'] = $imageName;
}
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {
        $product->delete();
        
        return redirect()->back()->with('success', 'berhasil dihapus');
    }
}
