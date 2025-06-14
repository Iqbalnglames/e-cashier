<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use App\Models\Transaction;
use Illuminate\Http\Request;

class TransactionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $categories = Category::all();
        $products = Product::with('category')->get();
        return view('cashier.index', compact('products', 'categories'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $request->validate([
            'total_price' => 'required|numeric',
            'total_profit' => 'required|numeric',
        ]);
        
       

        $transaction = Transaction::create([
            'transaction_date' => now(),
            'total_price' => $request->total_price,
            'total_profit' => $request->total_profit,
        ]);

        $details = [];
        foreach($request->product_id as $index => $productId) {
            $details[] = [
                'transaction_id' => $transaction->id,
                'product_id' => $productId,
                'quantity' => $request->quantity[$index],
            ];
        }

        $transaction->transaction_details()->createMany($details);

        return redirect()->route('home')->with('success', 'Transaksi Berhasil.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Transaction $transaction)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Transaction $transaction)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Transaction $transaction)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Transaction $transaction)
    {
        //
    }
}
