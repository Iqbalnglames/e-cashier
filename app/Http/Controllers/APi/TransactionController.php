<?php

namespace App\Http\Controllers\APi;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\Transaction;
use Illuminate\Http\Request;

class TransactionController extends Controller
{
    public function index()
    {
        $transactions = Transaction::with(['transaction_details.product'])
            ->get();
        $products = Product::all();
        return response()->json([
            'status' => 'success',
            'message' => 'data transaksi',
            'transaksi' => $transactions,
            'produk' => $products
        ]);
    }

    public function store(Request $request)
    {

        $request->validate([
            'total_price' => 'required|numeric',
            'total_profit' => 'required|numeric',
            'notes' => 'nullable',
            'payment_method' => 'required',
            'cart_items' => 'required'
        ]);



        $transaction = Transaction::create([
            'transaction_date' => now(),
            'notes' => $request->notes,
            'payment_method' => $request->payment_method,
            'total_price' => $request->total_price,
            'total_profit' => $request->total_profit,
        ]);

        $details = [];
        foreach ($request->cart_items as $item) {
            $details[] = [
                'transaction_id' => $transaction->id,
                'product_id' => $item->id,
                'quantity' => $item->quantity,
            ];
        }

        $transaction->transaction_details()->createMany($details);

        return response()->json([
            'message' => 'pesanan berhasil tersimppan',
            'success' => true,
        ]);
    }
}
