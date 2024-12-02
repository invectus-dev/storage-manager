<x-layout>
    <div class="flex flex-col items-center justify-center min-h-screen">
        <div class="w-full max-w-md p-6 mx-auto bg-white rounded-lg shadow-md">
            <h2 class="mb-6 text-2xl font-bold text-center text-gray-800">Edit Product</h2>
            <form action="{{ route('produk.update', $produk->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')

                <!-- Nama Produk -->
                <div class="mb-4">
                    <label for="name_produk" class="block text-sm font-medium text-gray-700">Nama Produk</label>
                    <input type="text" id="name_produk" name="name_produk"
                        value="{{ old('name_produk', $produk->name_produk) }}" class="w-full input input-bordered"
                        required>
                </div>

                <!-- Harga Produk -->
                <div class="mb-4">
                    <label for="harga_produk" class="block text-sm font-medium text-gray-700">Harga Produk</label>
                    <input type="number" id="harga_produk" name="harga_produk"
                        value="{{ old('harga_produk', $produk->harga_produk) }}" class="w-full input input-bordered"
                        required>
                </div>

                <!-- Stok Produk -->
                <div class="mb-4">
                    <label for="stock_produk" class="block text-sm font-medium text-gray-700">Stok Produk</label>
                    <input type="number" id="stock_produk" name="stock_produk"
                        value="{{ old('stock_produk', $produk->stock_produk) }}" class="w-full input input-bordered"
                        required>
                </div>

                <!-- Gambar Produk -->
                <div class="mb-4">
                    <label for="image" class="block text-sm font-medium text-gray-700">Gambar Produk</label>
                    <input type="file" id="image" name="image" class="w-full file-input file-input-bordered"
                        accept="image/*">
                </div>

                <button type="submit" class="w-full btn btn-primary">Update Product</button>
            </form>
        </div>
    </div>
</x-layout>
