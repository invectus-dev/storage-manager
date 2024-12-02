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
    public function index(Request $request)
    {
        $query = $request->get('search'); // Get the search query from the request

        if ($query) {
            // If there is a search query, filter products by name
            $produk = Produk::where('name_produk', 'like', '%'.$query.'%')->get();
        } else {
            // If no search query, get all products
            $produk = Produk::all();
        }

        return view('dashboard', compact('produk'));
    }

    public function edit($id)
    {
        $produk = Produk::findOrFail($id);

        return view('edit', compact('produk')); // This will show the edit form
    }

    public function update(Request $request, $id)
    {
        $produk = Produk::findOrFail($id);

        // Validate and upload the new image if provided
        if ($request->hasFile('image')) {
            // Delete old image if it exists
            if ($produk->image && file_exists(public_path('storage/'.$produk->image))) {
                unlink(public_path('storage/'.$produk->image));
            }

            // Store the new image
            $imagePath = $request->file('image')->store('products', 'public');
            $produk->image = $imagePath;
        }

        // Update other product fields
        $produk->name_produk = $request->input('name_produk');
        $produk->harga_produk = $request->input('harga_produk');
        $produk->stock_produk = $request->input('stock_produk');

        $produk->save();

        return redirect()->route('dashboard')->with('success', 'Product updated successfully.');
    }

    public function destroy($id)
    {
        $produk = Produk::findOrFail($id);
        $produk->delete(); // Delete the product

        return redirect()->route('dashboard')->with('success', 'Product deleted successfully.');
    }
}
