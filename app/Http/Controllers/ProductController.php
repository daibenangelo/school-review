<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    public function restock(Request $request, string $id)
    {
        $p = Product::query()
            ->select('stock', 'name')
            ->where('product_id', '=', $id)
            ->get()
            ->first();
        $new_stock = $p->stock +  $request->input('stock_change');
        Product::where('product_id', '=', $id)
            ->update(
                [
                    'stock' => $new_stock
                ]
            );

        return redirect('/admin/products/')->with('success', 'Added ' . $request->input('stock_change') . " to " . $p->name);
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = Product::query()
            ->select('*')
            ->orderBy('name')
            ->get();
        return view('products', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('products_create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $p = new Product;
        $p->name = $request->input("name");
        $p->price = $request->input("price");
        $p->stock = $request->input("stock");
        if ($request->file('image')) {
            $file = $request->file('image');
            $filename = date('YmdHiu') . $file->getClientOriginalName();
            $file->move(public_path('img/food'), $filename);
            $p->image = $filename;
        }
        $p->save();
        return redirect("/admin/products");
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
