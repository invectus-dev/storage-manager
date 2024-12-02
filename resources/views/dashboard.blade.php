<x-layout>
    <div class="flex flex-col items-center min-h-screen px-4 py-8 bg-gray-100">
        <!-- Dashboard Header -->
        <div class="w-full p-6 mx-auto bg-white rounded-lg shadow-lg max-w-7xl">
            <h2 class="mb-6 text-3xl font-semibold text-center text-gray-800">Dashboard</h2>

            <!-- Product List Section -->
            <div class="mb-8">
                <h3 class="mb-4 text-xl font-medium text-gray-700">Uploaded Products</h3>
                <div class="grid grid-cols-1 gap-6 sm:grid-cols-2 lg:grid-cols-3">
                    <!-- Loop through the uploaded products -->
                    @foreach ($produk as $item)
                        <div class="p-4 bg-white rounded-lg shadow-lg">
                            <img src="{{ asset('storage/' . $item->image) }}" alt="{{ $item->name_produk }}"
                                class="object-cover w-full h-48 mb-4 rounded-lg">
                            <h4 class="text-lg font-semibold text-gray-800">{{ $item->name_produk }}</h4>
                            <p class="text-sm text-gray-500">{{ $item->description ?? 'No description available' }}</p>
                            <div class="flex items-center justify-between mt-4">
                                <span class="text-lg text-green-500">Rp
                                    {{ number_format($item->harga_produk, 0, ',', '.') }}</span>
                                <span class="text-sm text-gray-500">{{ $item->stock_produk }} in stock</span>
                            </div>
                        </div>
                    @endforeach

                </div>
            </div>

            <!-- Coming Soon Features Section -->
            <div class="text-center">
                <h3 class="mb-4 text-xl font-medium text-gray-700">Features Coming Soon</h3>
                <div class="grid grid-cols-1 gap-6 sm:grid-cols-2 lg:grid-cols-3">
                    <div class="p-4 bg-white rounded-lg shadow-lg">
                        <h4 class="text-lg font-semibold text-gray-800">Product Management</h4>
                        <p class="text-sm text-gray-500">Easily manage and edit uploaded products.</p>
                    </div>
                    <div class="p-4 bg-white rounded-lg shadow-lg">
                        <h4 class="text-lg font-semibold text-gray-800">Order Tracking</h4>
                        <p class="text-sm text-gray-500">Track customer orders and delivery statuses.</p>
                    </div>
                    <div class="p-4 bg-white rounded-lg shadow-lg">
                        <h4 class="text-lg font-semibold text-gray-800">User Reviews</h4>
                        <p class="text-sm text-gray-500">Allow customers to review products and leave feedback.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-layout>
