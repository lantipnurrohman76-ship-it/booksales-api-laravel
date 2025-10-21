<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Transaction;
use App\Models\Book;

class TransactionController extends Controller
{
    // ✅ Admin → lihat semua transaksi
    public function index()
    {
        $transactions = Transaction::with(['book', 'user'])->get();
        return response()->json($transactions);
    }

    // ✅ Customer → lihat transaksi sendiri
    public function show($id)
    {
        $transaction = Transaction::with(['book', 'user'])->find($id);

        if (!$transaction) {
            return response()->json(['message' => 'Transaction not found'], 404);
        }

        return response()->json($transaction);
    }

    // ✅ Customer → buat transaksi baru
    public function store(Request $request)
    {
        $validated = $request->validate([
            'book_id' => 'required|exists:books,id',
            'quantity' => 'required|integer|min:1',
        ]);

        $book = Book::find($validated['book_id']);

        // Pastikan stok cukup
        if ($book->stock < $validated['quantity']) {
            return response()->json(['message' => 'Not enough stock'], 400);
        }

        // Kurangi stok buku
        $book->stock -= $validated['quantity'];
        $book->save();

        // Buat transaksi
        $transaction = Transaction::create([
            'user_id' => $request->user()->id,
            'book_id' => $validated['book_id'],
            'quantity' => $validated['quantity'],
            'total_price' => $book->price * $validated['quantity'],
        ]);

        return response()->json($transaction, 201);
    }

    // ✅ Customer → update transaksi
    public function update(Request $request, $id)
    {
        $transaction = Transaction::find($id);

        if (!$transaction) {
            return response()->json(['message' => 'Transaction not found'], 404);
        }

        $validated = $request->validate([
            'quantity' => 'required|integer|min:1',
        ]);

        $transaction->update($validated);
        return response()->json($transaction);
    }

    // ✅ Admin → hapus transaksi
    public function destroy($id)
    {
        $transaction = Transaction::find($id);

        if (!$transaction) {
            return response()->json(['message' => 'Transaction not found'], 404);
        }

        $transaction->delete();
        return response()->json(['message' => 'Transaction deleted successfully']);
    }
}
