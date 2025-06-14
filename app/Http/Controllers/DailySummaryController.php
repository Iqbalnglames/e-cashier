<?php

namespace App\Http\Controllers;

use App\Models\DailySummary;
use App\Models\Product;
use App\Models\Transaction;
use Illuminate\Http\Request;

class DailySummaryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $transactions = Transaction::with(['transaction_details.product'])
            ->get();
        $products = Product::all();
        return view('summaries.index', compact('transactions', 'products'));
    }

    public function transactionHistory()
    {
        $transactions = Transaction::all();
        return view('histories.index', compact('transactions'));
    }

    public function transactionDetails($id)
    {
        $transactions = Transaction::findOrFail($id);
        $transactionDetails = $transactions->transaction_details()->with('product')->get();
        return view('histories.details', compact('transactions', 'transactionDetails'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(DailySummary $dailySummary)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(DailySummary $dailySummary)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, DailySummary $dailySummary)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(DailySummary $dailySummary)
    {
        //
    }
}
