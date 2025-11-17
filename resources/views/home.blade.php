@extends('layouts.app')

@section('title', 'Beranda')

@section('content')
<!-- Hero Section -->
<section class="bg-primary text-white py-5">
    <div class="container text-center py-5">
        <h1 class="display-4 fw-bold mb-4">Selamat Datang di Majujaya Konstruksi</h1>
        <p class="lead mb-4">Membangun Impian Anda Menjadi Kenyataan</p>
        <a href="#contact" class="btn btn-light btn-lg">Hubungi Kami</a>
    </div>
</section>

<!-- About Section -->
<section id="about" class="py-5">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <h2 class="fw-bold mb-4">Tentang Kami</h2>
                <p class="lead">Majujaya Konstruksi adalah perusahaan yang berdedikasi untuk memberikan solusi konstruksi terbaik dengan kualitas terjamin dan harga kompetitif.</p>
                <p>Dengan pengalaman lebih dari 10 tahun di industri konstruksi, kami telah menyelesaikan berbagai proyek mulai dari perumahan, gedung perkantoran, hingga fasilitas umum.</p>
                <a href="{{ route('about') }}" class="btn btn-primary">Selengkapnya</a>
            </div>
            <div class="col-lg-6 mt-4 mt-lg-0">
                <img src="https://images.unsplash.com/photo-1486406146926-c627a92ad1ab?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80" 
                     alt="Tentang Kami" class="img-fluid rounded shadow">
            </div>
        </div>
    </div>
</section>

<!-- Products Section -->
<section id="products" class="py-5 bg-light">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="fw-bold">Produk Kami</h2>
            <p class="lead">Temukan produk-produk terbaik dari Majujaya Konstruksi</p>
        </div>
        
        <div class="row">
            @php
                $products = App\Models\Product::latest()->take(3)->get();
            @endphp
            
            @forelse($products as $product)
            <div class="col-md-4 mb-4">
                <div class="card h-100 shadow-sm">
                    @if($product->image)
                    <img src="{{ asset('storage/' . $product->image) }}" class="card-img-top" 
                         alt="{{ $product->name }}" style="height: 200px; object-fit: cover;">
                    @endif
                    <div class="card-body">
                        <h5 class="card-title">{{ $product->name }}</h5>
                        <p class="card-text">{{ Str::limit($product->description, 100) }}</p>
                        <p class="h5 text-primary">Rp {{ number_format($product->price, 0, ',', '.') }}</p>
                    </div>
                    <div class="card-footer bg-white">
                        <a href="{{ route('products.show', $product->id) }}" class="btn btn-outline-primary w-100">
                            Lihat Detail
                        </a>
                    </div>
                </div>
            </div>
            @empty
            <div class="col-12">
                <div class="alert alert-info">
                    Belum ada produk yang tersedia.
                </div>
            </div>
            @endforelse
        </div>
        
        @if(count($products) > 0)
        <div class="text-center mt-4">
            <a href="{{ route('products.index') }}" class="btn btn-primary">Lihat Semua Produk</a>
        </div>
        @endif
    </div>
</section>

<!-- Articles Section -->
<section id="articles" class="py-5">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="fw-bold">Artikel Terbaru</h2>
            <p class="lead">Informasi dan tips seputar konstruksi</p>
        </div>
        
        <div class="row">
            @php
                $articles = App\Models\Article::latest()->take(3)->get();
            @endphp
            
            @forelse($articles as $article)
            <div class="col-md-4 mb-4">
                <div class="card h-100 shadow-sm">
                    @if($article->image)
                    <img src="{{ asset('storage/' . $article->image) }}" class="card-img-top" 
                         alt="{{ $article->title }}" style="height: 200px; object-fit: cover;">
                    @endif
                    <div class="card-body">
                        <h5 class="card-title">{{ $article->title }}</h5>
                        <p class="card-text">{{ Str::limit(strip_tags($article->content), 100) }}</p>
                        <div class="text-muted small mb-3">
                            {{ $article->created_at->diffForHumans() }}
                        </div>
                    </div>
                    <div class="card-footer bg-white">
                        <a href="{{ route('articles.show', $article->id) }}" class="btn btn-outline-primary w-100">
                            Baca Selengkapnya
                        </a>
                    </div>
                </div>
            </div>
            @empty
            <div class="col-12">
                <div class="alert alert-info">
                    Belum ada artikel yang tersedia.
                </div>
            </div>
            @endforelse
        </div>
        
        @if(count($articles) > 0)
        <div class="text-center mt-4">
            <a href="{{ route('articles.index') }}" class="btn btn-primary">Lihat Semua Artikel</a>
        </div>
        @endif
    </div>
</section>

<!-- Contact Section -->
<section id="contact" class="py-5 bg-light">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="card shadow">
                    <div class="card-body p-5">
                        <div class="text-center mb-5">
                            <h2 class="fw-bold">Hubungi Kami</h2>
                            <p class="lead">Kami siap membantu Anda</p>
                        </div>
                        
                        <form action="{{ route('contact.submit') }}" method="POST">
                            @csrf
                            <div class="row g-3">
                                <div class="col-md-6">
                                    <div class="form-floating mb-3">
                                        <input type="text" class="form-control" id="name" name="name" 
                                               placeholder="Nama Anda" required>
                                        <label for="name">Nama Lengkap</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-floating mb-3">
                                        <input type="email" class="form-control" id="email" name="email" 
                                               placeholder="nama@contoh.com" required>
                                        <label for="email">Alamat Email</label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-floating mb-3">
                                        <input type="text" class="form-control" id="subject" name="subject" 
                                               placeholder="Subjek" required>
                                        <label for="subject">Subjek</label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-floating mb-3">
                                        <textarea class="form-control" id="message" name="message" 
                                                  placeholder="Pesan Anda" style="height: 150px;" required></textarea>
                                        <label for="message">Pesan</label>
                                    </div>
                                </div>
                                <div class="col-12 text-center">
                                    <button type="submit" class="btn btn-primary btn-lg">Kirim Pesan</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Contact Info Section -->
<section class="py-5">
    <div class="container">
        <div class="row g-4 text-center">
            <div class="col-md-4">
                <div class="p-4 bg-white rounded shadow-sm">
                    <div class="text-primary mb-3">
                        <i class="bi bi-geo-alt-fill fs-1"></i>
                    </div>
                    <h5>Alamat</h5>
                    <p class="mb-0">Jl. Contoh No. 123, Kota Bandung, Jawa Barat</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="p-4 bg-white rounded shadow-sm">
                    <div class="text-primary mb-3">
                        <i class="bi bi-telephone-fill fs-1"></i>
                    </div>
                    <h5>Telepon</h5>
                    <p class="mb-0">+62 812 3456 7890</p>
                    <p class="mb-0">(022) 1234567</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="p-4 bg-white rounded shadow-sm">
                    <div class="text-primary mb-3">
                        <i class="bi bi-envelope-fill fs-1"></i>
                    </div>
                    <h5>Email</h5>
                    <p class="mb-0">info@majujayakonstruksi.com</p>
                    <p class="mb-0">marketing@majujayakonstruksi.com</p>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection