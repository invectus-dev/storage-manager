<x-layout>
    <!-- Navbar -->
    <div class="text-white navbar bg-primary">
        <div class="container flex justify-between mx-auto">
            <a href="#" class="text-lg font-bold">VNP by Florina</a>
            <div class="space-x-4">
                <a href="{{ route('pages.about') }}" class="btn btn-ghost btn-sm">About</a>
                <a href="{{ route('pages.fitur') }}" class="btn btn-ghost btn-sm">Features</a>
                <a href="{{ route('pages.upload') }}" class="btn btn-ghost btn-sm">Upload Product</a>
                <a href="{{ route('pages.kontak') }}" class="btn btn-ghost btn-sm">Contact</a>
                <a href="{{ route('dashboard') }}" class="btn btn-ghost btn-sm">Dashboard</a>
            </div>
        </div>
    </div>

    <!-- Hero Section -->
    <section class="py-20 text-white hero bg-gradient-to-r from-blue-600 to-blue-400">
        <div class="container mx-auto text-center">
            <h1 class="text-5xl font-bold">Welcome to VNP by Florina</h1>
            <p class="mt-4 text-lg">Manage your fashion products easily and professionally.</p>
            <div class="mt-6">
                <a href="{{ route('pages.upload') }}" class="btn btn-accent">Get Started</a>
            </div>
        </div>
    </section>

    <!-- About Section -->
    <section id="about" class="py-16 bg-base-200">
        <div class="container mx-auto text-center">
            <h2 class="mb-4 text-3xl font-bold">About Us</h2>
            <p class="text-lg text-gray-700">
                VNP by Florina is your one-stop solution for managing fashion products. Our tools are designed to help
                you track inventory and showcase your brand with ease.
            </p>
        </div>
    </section>

    <!-- Features Section -->
    <section id="features" class="py-16 bg-white">
        <div class="container mx-auto">
            <h2 class="mb-8 text-3xl font-bold text-center">Our Features</h2>
            <div class="grid grid-cols-1 gap-6 md:grid-cols-3">
                <div class="p-6 text-center shadow-md card bg-base-100">
                    <div class="card-body">
                        <h3 class="text-xl card-title">Upload Products</h3>
                        <p>Easily upload your fashion items and manage them effortlessly.</p>
                    </div>
                </div>
                <div class="p-6 text-center shadow-md card bg-base-100">
                    <div class="card-body">
                        <h3 class="text-xl card-title">Inventory Tracking</h3>
                        <p>Monitor your stock in real-time and make informed decisions.</p>
                    </div>
                </div>
                <div class="p-6 text-center shadow-md card bg-base-100">
                    <div class="card-body">
                        <h3 class="text-xl card-title">Customer Insights</h3>
                        <p>Understand your customers' preferences and grow your business.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Upload Section -->
    <section id="upload" class="py-16 bg-base-200">
        <div class="container mx-auto text-center">
            <h2 class="mb-4 text-3xl font-bold">Upload Your Products</h2>
            <p class="mb-6 text-lg text-gray-700">Start adding your products to the system now!</p>
            <a href="" class="btn btn-primary">Upload Now</a>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact" class="py-16 bg-white">
        <div class="container mx-auto text-center">
            <h2 class="mb-4 text-3xl font-bold">Contact Us</h2>
            <p class="mb-6 text-lg text-gray-700">Have questions? Reach out to us at:</p>
            <p class="text-xl font-bold">email@example.com</p>
        </div>
    </section>

    <!-- Footer -->
    <footer class="p-4 text-white footer bg-primary">
        <div class="container mx-auto text-center">
            <p>&copy; 2024 VNP by Florina. All rights reserved.</p>
        </div>
    </footer>

</x-layout>
