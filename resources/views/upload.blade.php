<x-layout>
    <div class="flex flex-col items-center justify-center min-h-screen">
        <!-- Header -->
        <header class="w-full py-4 bg-white shadow-md">
            <div class="container flex items-center justify-between px-6 mx-auto">
                <h1 class="text-2xl font-bold text-gray-800">VNP by Florina</h1>
                <a href="/" class="btn btn-primary">Back to Home</a>
            </div>
        </header>

        <!-- Upload Form -->
        <main class="container flex-1 px-6 py-12 mx-auto">
            <div class="max-w-lg p-6 mx-auto bg-white rounded-lg shadow-md">
                <h2 class="mb-6 text-2xl font-bold text-center text-gray-800">Upload Produk</h2>
                <form action="{{ route('produk.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <!-- Nama Produk -->
                    <div class="mb-4">
                        <label for="name_produk" class="block font-medium text-gray-700">Nama Produk</label>
                        <input type="text" id="name_produk" name="name_produk" class="w-full input input-bordered"
                            placeholder="Masukkan nama produk" required>
                    </div>

                    <!-- Harga Produk -->
                    <div class="mb-4">
                        <label for="harga_produk" class="block font-medium text-gray-700">Harga Produk</label>
                        <input type="number" id="harga_produk" name="harga_produk" class="w-full input input-bordered"
                            placeholder="Masukkan harga produk" required>
                    </div>

                    <!-- Stok Produk -->
                    <div class="mb-4">
                        <label for="stock_produk" class="block font-medium text-gray-700">Stok Produk</label>
                        <input type="number" id="stock_produk" name="stock_produk" class="w-full input input-bordered"
                            placeholder="Masukkan jumlah stok produk" required>
                    </div>

                    <!-- Gambar Produk -->
                    <div class="mb-4">
                        <label for="image" class="block font-medium text-gray-700">Gambar Produk</label>
                        <input type="file" id="image" name="image"
                            class="w-full file-input file-input-bordered" accept="image/*" required>
                    </div>

                    <!-- Submit Button -->
                    <div class="mt-6">
                        <button type="submit" class="w-full btn btn-primary">Upload Produk</button>
                    </div>
                </form>
            </div>
        </main>

        <!-- Footer -->
        <footer class="w-full py-4 bg-white shadow-md">
            <div class="container mx-auto text-center text-gray-600">
                &copy; 2024 VNP by Florina. All rights reserved.
            </div>
        </footer>
    </div>
</x-layout>

