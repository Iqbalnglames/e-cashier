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

        // $request->validate([
        //     'total_price' => 'required|numeric',
        //     'total_profit' => 'required|numeric',
        //     'notes' => 'nullable',
        //     'payment_status' => 'required',
        //     'payment_method' => 'nullable',
        //     'cart_items' => 'required',
        //     'isMember' => 'nullable',
        // ]);



        $transaction = Transaction::create([
            'transaction_date' => now(),
            'notes' => $request->notes,
            'payment_status' => $request->payment_pending,
            'payment_method' => $request->payment_method,
            'total_price' => $request->total_price,
            'total_profit' => $request->total_profit,
            'is_member' => $request->is_member ? true : false,
        ]);

        $cart_items = json_decode($request->cart_items);

        $details = [];
        foreach ($cart_items as $item) {
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
