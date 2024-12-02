<?php

namespace App\Http\Controllers;

use App\Models\Produk;
use Illuminate\Http\Request;

class ProdukController extends Controller
{
    // Store new product
    public function store(Request $request)
    {
        $request->validate([
            'name_produk' => 'required|string|max:255',
            'harga_produk' => 'required|numeric',
            'stock_produk' => 'required|numeric',
            'image' => 'nullable|image|mimes:jpg,png,jpeg,gif|max:2048', // Image validation
        ]);

        $produk = new Produk;
        $produk->name_produk = $request->name_produk;
        $produk->harga_produk = $request->harga_produk;
        $produk->stock_produk = $request->stock_produk;
        $produk->description = $request->description;

        // Handle image upload
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('produk_images', 'public');
            $produk->image = $imagePath;
        }

        $produk->save();

        return redirect()->route('produk.index')->with('success', 'Product uploaded successfully');
    }

    // Display uploaded products
    public function index()
    {
        $produk = Produk::all();

        return view('dashboard', compact('produk'));
    }
}
