@extends('layouts.app')

@section('content')
<!-- Navigation -->
<nav class="fixed w-full bg-white bg-opacity-95 shadow-lg z-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between items-center h-16">
            <div class="flex items-center">
                <h1 class="text-2xl font-bold bg-gradient-to-r from-blue-600 to-purple-600 bg-clip-text text-transparent">LuxeLand</h1>
            </div>
            <div class="hidden md:flex space-x-8">
                <a href="#features" class="text-gray-700 hover:text-blue-600 transition">Fitur</a>
                <a href="#pricing" class="text-gray-700 hover:text-blue-600 transition">Harga</a>
                <a href="#testimonials" class="text-gray-700 hover:text-blue-600 transition">Testimoni</a>
                <a href="#contact" class="text-gray-700 hover:text-blue-600 transition">Hubungi</a>
            </div>
        </div>
    </div>
</nav>

<!-- Hero Section -->
<section class="pt-32 pb-20 bg-gradient-to-br from-blue-50 to-purple-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <h2 class="text-5xl md:text-6xl font-bold text-gray-900 mb-6">
            Solusi Bisnis Digital
            <span class="bg-gradient-to-r from-blue-600 to-purple-600 bg-clip-text text-transparent">Mewah & Modern</span>
        </h2>
        <p class="text-xl text-gray-600 mb-8 max-w-2xl mx-auto">Tingkatkan bisnis Anda dengan platform terdepan yang dirancang untuk kesuksesan modern</p>
        <div class="flex justify-center gap-4">
            <button class="bg-gradient-to-r from-blue-600 to-purple-600 text-white px-8 py-3 rounded-lg font-semibold hover:shadow-lg transition">Mulai Sekarang</button>
            <button class="border-2 border-gray-300 text-gray-700 px-8 py-3 rounded-lg font-semibold hover:border-blue-600 transition">Pelajari Lebih</button>
        </div>
    </div>
</section>

<!-- Features Section -->
<section id="features" class="py-20 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <h3 class="text-4xl font-bold text-center mb-16">Fitur Unggulan</h3>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            @php
            $features = [
                ['icon' => '⚡', 'title' => 'Kecepatan Luar Biasa', 'desc' => 'Performa super cepat dengan teknologi terkini'],
                ['icon' => '🔒', 'title' => 'Keamanan Maksimal', 'desc' => 'Enkripsi end-to-end untuk melindungi data Anda'],
                ['icon' => '📊', 'title' => 'Analytics Mendalam', 'desc' => 'Dashboard real-time dengan insights berharga'],
                ['icon' => '🎨', 'title' => 'Design Modern', 'desc' => 'Antarmuka yang indah dan mudah digunakan'],
                ['icon' => '🌍', 'title' => 'Jangkauan Global', 'desc' => 'Server di 50+ negara untuk kecepatan optimal'],
                ['icon' => '💼', 'title' => 'Support 24/7', 'desc' => 'Tim ahli siap membantu kapan saja'],
            ];
            @endphp
            
            @foreach($features as $feature)
            <div class="p-8 bg-gray-50 rounded-2xl hover:shadow-xl transition transform hover:scale-105">
                <div class="text-5xl mb-4">{{ $feature['icon'] }}</div>
                <h4 class="text-xl font-semibold mb-3">{{ $feature['title'] }}</h4>
                <p class="text-gray-600">{{ $feature['desc'] }}</p>
            </div>
            @endforeach
        </div>
    </div>
</section>

<!-- Pricing Section -->
<section id="pricing" class="py-20 bg-gray-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <h3 class="text-4xl font-bold text-center mb-16">Paket Harga</h3>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            @php
            $pricing = [
                ['name' => 'Starter', 'price' => '199', 'features' => ['5 Projects', '10GB Storage', 'Email Support', 'Basic Analytics']],
                ['name' => 'Professional', 'price' => '499', 'features' => ['Unlimited Projects', '100GB Storage', 'Priority Support', 'Advanced Analytics', 'API Access'], 'popular' => true],
                ['name' => 'Enterprise', 'price' => 'Custom', 'features' => ['Unlimited Everything', 'Dedicated Server', '24/7 Phone Support', 'Custom Integration', 'SLA Guarantee']],
            ];
            @endphp
            
            @foreach($pricing as $plan)
            <div class="@if($plan['popular'] ?? false) transform scale-105 @endif bg-white p-8 rounded-2xl @if($plan['popular'] ?? false) shadow-2xl border-2 border-blue-600 @else shadow-lg @endif">
                @if($plan['popular'] ?? false)
                <div class="bg-blue-600 text-white px-4 py-1 rounded-full inline-block mb-4 text-sm font-semibold">Paling Populer</div>
                @endif
                <h4 class="text-2xl font-bold mb-2">{{ $plan['name'] }}</h4>
                <p class="text-4xl font-bold text-blue-600 mb-6">Rp {{ $plan['price'] }}<span class="text-lg text-gray-600">/bulan</span></p>
                <ul class="space-y-3 mb-8">
                    @foreach($plan['features'] as $feature)
                    <li class="flex items-center"><span class="text-green-500 mr-3">✓</span>{{ $feature }}</li>
                    @endforeach
                </ul>
                <button class="w-full @if($plan['popular'] ?? false) bg-gradient-to-r from-blue-600 to-purple-600 text-white @else border-2 border-blue-600 text-blue-600 @endif py-3 rounded-lg font-semibold hover:shadow-lg transition">Pilih Paket</button>
            </div>
            @endforeach
        </div>
    </div>
</section>

<!-- Testimonials Section -->
<section id="testimonials" class="py-20 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <h3 class="text-4xl font-bold text-center mb-16">Testimoni Pelanggan</h3>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            @php
            $testimonials = [
                ['name' => 'Budi Santoso', 'company' => 'PT Maju Jaya', 'text' => 'Platform ini mengubah cara kami berbisnis. Sangat recommended!', 'rating' => 5],
                ['name' => 'Siti Nurhaliza', 'company' => 'E-Commerce Indonesia', 'text' => 'Support team mereka luar biasa responsif dan helpful.', 'rating' => 5],
                ['name' => 'Ahmad Hidayat', 'company' => 'Tech Startup Co', 'text' => 'ROI yang kami dapatkan melebihi ekspektasi. Mantap!', 'rating' => 5],
            ];
            @endphp
            
            @foreach($testimonials as $testimonial)
            <div class="bg-gray-50 p-8 rounded-2xl">
                <div class="flex items-center mb-4">
                    <div class="w-12 h-12 bg-gradient-to-br from-blue-400 to-purple-400 rounded-full"></div>
                    <div class="ml-4">
                        <p class="font-semibold">{{ $testimonial['name'] }}</p>
                        <p class="text-sm text-gray-600">{{ $testimonial['company'] }}</p>
                    </div>
                </div>
                <div class="flex mb-3">
                    @for($i = 0; $i < $testimonial['rating']; $i++)
                    <span class="text-yellow-400">★</span>
                    @endfor
                </div>
                <p class="text-gray-700">"{{ $testimonial['text'] }}"</p>
            </div>
            @endforeach
        </div>
    </div>
</section>

<!-- Contact Section -->
<section id="contact" class="py-20 bg-gray-50">
    <div class="max-w-3xl mx-auto px-4 sm:px-6 lg:px-8">
        <h3 class="text-4xl font-bold text-center mb-4">Hubungi Kami</h3>
        <p class="text-center text-gray-600 mb-12">Ada pertanyaan? Kami siap membantu Anda</p>
        
        @if($errors->any())
        <div class="mb-4 p-4 bg-red-100 border border-red-400 text-red-700 rounded">
            @foreach($errors->all() as $error)
            <p>{{ $error }}</p>
            @endforeach
        </div>
        @endif
        
        @if(session('success'))
        <div class="mb-4 p-4 bg-green-100 border border-green-400 text-green-700 rounded">
            {{ session('success') }}
        </div>
        @endif
        
        <form method="POST" action="{{ route('contact.submit') }}" class="bg-white p-8 rounded-2xl shadow-lg">
            @csrf
            <div class="mb-6">
                <label class="block text-gray-700 font-semibold mb-2">Nama Anda</label>
                <input type="text" name="name" required class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:border-blue-600" placeholder="Masukkan nama Anda">
            </div>
            <div class="mb-6">
                <label class="block text-gray-700 font-semibold mb-2">Email</label>
                <input type="email" name="email" required class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:border-blue-600" placeholder="Masukkan email Anda">
            </div>
            <div class="mb-6">
                <label class="block text-gray-700 font-semibold mb-2">Pesan</label>
                <textarea name="message" required rows="5" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:border-blue-600" placeholder="Tuliskan pesan Anda"></textarea>
            </div>
            <button type="submit" class="w-full bg-gradient-to-r from-blue-600 to-purple-600 text-white py-3 rounded-lg font-semibold hover:shadow-lg transition">Kirim Pesan</button>
        </form>
    </div>
</section>

<!-- Newsletter Section -->
<section class="py-20 bg-gradient-to-r from-blue-600 to-purple-600">
    <div class="max-w-3xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <h3 class="text-4xl font-bold text-white mb-4">Berlangganan Newsletter</h3>
        <p class="text-blue-100 mb-8">Dapatkan tips eksklusif dan penawaran khusus langsung ke email Anda</p>
        <form method="POST" action="{{ route('newsletter.subscribe') }}" class="flex flex-col sm:flex-row gap-4 justify-center">
            @csrf
            <input type="email" name="email" required class="flex-1 max-w-md px-4 py-3 rounded-lg focus:outline-none" placeholder="Masukkan email Anda">
            <button type="submit" class="bg-white text-blue-600 px-8 py-3 rounded-lg font-semibold hover:shadow-lg transition">Subscribe</button>
        </form>
    </div>
</section>

<!-- Footer -->
<footer class="bg-gray-900 text-gray-300 py-12">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 md:grid-cols-4 gap-8 mb-8">
            <div>
                <h5 class="text-white font-bold mb-4">Tentang Kami</h5>
                <p class="text-sm">Platform terdepan untuk solusi bisnis digital modern</p>
            </div>
            <div>
                <h5 class="text-white font-bold mb-4">Produk</h5>
                <ul class="text-sm space-y-2">
                    <li><a href="#" class="hover:text-white transition">Features</a></li>
                    <li><a href="#" class="hover:text-white transition">Pricing</a></li>
                    <li><a href="#" class="hover:text-white transition">Security</a></li>
                </ul>
            </div>
            <div>
                <h5 class="text-white font-bold mb-4">Perusahaan</h5>
                <ul class="text-sm space-y-2">
                    <li><a href="#" class="hover:text-white transition">Blog</a></li>
                    <li><a href="#" class="hover:text-white transition">Karir</a></li>
                    <li><a href="#" class="hover:text-white transition">Kontak</a></li>
                </ul>
            </div>
            <div>
                <h5 class="text-white font-bold mb-4">Legal</h5>
                <ul class="text-sm space-y-2">
                    <li><a href="#" class="hover:text-white transition">Privacy</a></li>
                    <li><a href="#" class="hover:text-white transition">Terms</a></li>
                    <li><a href="#" class="hover:text-white transition">Cookies</a></li>
                </ul>
            </div>
        </div>
        <hr class="border-gray-700 mb-8">
        <div class="text-center text-sm">
            <p>&copy; 2026 LuxeLand. Semua hak dilindungi.</p>
        </div>
    </div>
</footer>

<script>
// Smooth scrolling
document.querySelectorAll('a[href^="#"]').forEach(anchor => {
    anchor.addEventListener('click', function (e) {
        e.preventDefault();
        const target = document.querySelector(this.getAttribute('href'));
        if (target) {
            target.scrollIntoView({ behavior: 'smooth' });
        }
    });
});

// Fade in on scroll
const observerOptions = {
    threshold: 0.1,
    rootMargin: '0px 0px -100px 0px'
};

const observer = new IntersectionObserver(function(entries) {
    entries.forEach(entry => {
        if (entry.isIntersecting) {
            entry.target.style.opacity = '1';
            entry.target.style.transform = 'translateY(0)';
        }
    });
}, observerOptions);

document.querySelectorAll('section').forEach(section => {
    section.style.opacity = '0';
    section.style.transform = 'translateY(20px)';
    section.style.transition = 'opacity 0.6s, transform 0.6s';
    observer.observe(section);
});
</script>
@endsection