<?php

namespace App\Http\Controllers;

use App\Http\Requests\OrderRequest;
use App\Models\Order;
use App\Models\Product;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function order(OrderRequest $request, Product $product)
    {
        try {
            $order = Order::create([
                'product_id' => $product->id,
                'user_id' => auth()->id(),
                'quantity' => $request->quantity,
                'total_price' => $request->quantity * $product->price,
                'product_name' => $product->name,
                'product_price' => $product->price,
                'status' => 0
            ]);
            return view('order', compact('order'));
        } catch (\Throwable $th) {
            dd($th);
        }
    }

    public function payment(Order $order)
    {
        try {
            $order->update([
                'status' => 1
            ]);
            $products = Product::all();
            return view('index', compact('products'));
        } catch (\Throwable $th) {
            dd($th);
        }
    }

    public function cancel()
    {
    }
}
