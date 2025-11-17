@extends('layouts.app')

@section('title', 'Tentang Kami')

@section('content')
<!-- Page Header -->
<header class="bg-primary text-white py-5">
    <div class="container text-center py-5">
        <h1 class="display-4 fw-bold">Tentang Kami</h1>
        <p class="lead">Mengenal lebih dekat dengan Majujaya Konstruksi</p>
    </div>
</header>

<!-- About Section -->
<section class="py-5">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 order-lg-2">
                <div class="p-5">
                    <img class="img-fluid " src="data:image/jpeg;base64,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" alt="Tentang Kami">
                </div>
            </div>
            <div class="col-lg-6 order-lg-1">
                <div class="p-5">
                    <h2 class="display-6 fw-bold">Sejarah Perusahaan</h2>
                    <p>Berdiri sejak tahun 2010, PT Majujaya Konstruksi telah tumbuh menjadi salah satu perusahaan konstruksi terpercaya di Indonesia. Awalnya kami memulai dengan tim kecil dan proyek-proyek skala menengah, namun berkat komitmen kami terhadap kualitas dan kepuasan pelanggan, kami terus berkembang hingga saat ini.</p>
                    <p>Dengan pengalaman lebih dari 10 tahun, kami telah menyelesaikan ratusan proyek konstruksi mulai dari perumahan, gedung perkantoran, pusat perbelanjaan, hingga fasilitas umum lainnya.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Vision & Mission Section -->
<section class="py-5 bg-light">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="card h-100 border-0 shadow-sm">
                    <div class="card-body p-5">
                        <div class="text-center mb-4">
                            <div class="bg-primary bg-opacity-10 d-inline-flex align-items-center justify-content-center rounded-circle" style="width: 80px; height: 80px;">
                                <i class="bi bi-eye-fill text-primary fs-1"></i>
                            </div>
                        </div>
                        <h3 class="h4 text-center mb-4">Visi</h3>
                        <p class="text-center mb-0">Menjadi perusahaan konstruksi terdepan yang memberikan solusi inovatif dan berkelanjutan untuk mewujudkan impian klien dengan kualitas terbaik.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 mt-4 mt-lg-0">
                <div class="card h-100 border-0 shadow-sm">
                    <div class="card-body p-5">
                        <div class="text-center mb-4">
                            <div class="bg-primary bg-opacity-10 d-inline-flex align-items-center justify-content-center rounded-circle" style="width: 80px; height: 80px;">
                                <i class="bi bi-bullseye text-primary fs-1"></i>
                            </div>
                        </div>
                        <h3 class="h4 text-center mb-4">Misi</h3>
                        <ul class="list-unstyled">
                            <li class="mb-2"><i class="bi bi-check-circle-fill text-primary me-2"></i> Memberikan layanan konstruksi terbaik dengan standar kualitas tinggi</li>
                            <li class="mb-2"><i class="bi bi-check-circle-fill text-primary me-2"></i> Mengutamakan keselamatan kerja dan kelestarian lingkungan</li>
                            <li class="mb-2"><i class="bi bi-check-circle-fill text-primary me-2"></i> Mengembangkan sumber daya manusia yang profesional dan berintegritas</li>
                            <li class="mb-2"><i class="bi bi-check-circle-fill text-primary me-2"></i> Memberikan nilai tambah bagi semua pemangku kepentingan</li>
                            <li><i class="bi bi-check-circle-fill text-primary me-2"></i> Berinovasi dalam teknologi dan metode konstruksi</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Team Section -->
<section class="py-5">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="fw-bold">Tim Kami</h2>
            <p class="lead">Orang-orang profesional di balik kesuksesan Majujaya Konstruksi</p>
        </div>
        
        <div class="row g-4">
            <div class="col-lg-3 col-md-3 mb-4">
                <div class="card border-0 shadow-sm h-100">
                    <img src="{{ asset('images/team/gilbert.jpg') }}" class="card-img-top" alt="Team Member">
                    <div class="card-body text-center">
                        <h5 class="card-title mb-1">Gilbert Aviensha N</h5>
                        <p class="text-muted mb-3">Direktur Utama</p>
                        <p class="card-text">Memiliki pengalaman lebih dari 15 tahun di industri konstruksi dengan spesialisasi manajemen proyek skala besar.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 mb-4">
                <div class="card border-0 shadow-sm h-100">
                    <img src="{{ asset('images/team/nopal.jpg') }}" class="card-img-top" alt="Team Member">
                    <div class="card-body text-center">
                        <h5 class="card-title mb-1">Nopal Ihsan Asegaf</h5>
                        <p class="text-muted mb-3">Direktur Utama</p>
                        <p class="card-text">Memiliki pengalaman lebih dari 15 tahun di industri konstruksi dengan spesialisasi manajemen proyek skala besar.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 mb-4">
                <div class="card border-0 shadow-sm h-100">
                    <img src="{{ asset('images/team/faik.png') }}" class="card-img-top" alt="Team Member">
                    <div class="card-body text-center">
                        <h5 class="card-title mb-1">Faikul Muberok</h5>
                        <p class="text-muted mb-3">Manajer Proyek</p>
                        <p class="card-text">Berkecimpung di dunia konstruksi selama 10 tahun dengan fokus pada pengembangan properti komersial.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 mb-4">
                <div class="card border-0 shadow-sm h-100">
                    <img src="{{ asset('images/team/adit.jpg') }}" class="card-img-top" alt="Team Member">
                    <div class="card-body text-center">
                        <h5 class="card-title mb-1">Aditya Rizqy Segara</h5>
                        <p class="text-muted mb-3">Kepala Teknik</p>
                        <p class="card-text">Ahli dalam perencanaan teknis dan pengawasan proyek dengan pengalaman 12 tahun di berbagai proyek strategis.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Values Section -->
<section class="py-5 bg-light">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="fw-bold">Nilai-Nilai Perusahaan</h2>
            <p class="lead">Prinsip yang kami pegang teguh dalam setiap pekerjaan</p>
        </div>
        
        <div class="row g-4">
            <div class="col-md-3 col-sm-6">
                <div class="text-center p-4 bg-white rounded shadow-sm h-100">
                    <div class="bg-primary bg-opacity-10 d-inline-flex align-items-center justify-content-center rounded-circle mb-3" style="width: 80px; height: 80px; margin: 0 auto;">
                        <i class="bi bi-award-fill text-primary fs-3"></i>
                    </div>
                    <h5 class="h6">Integritas</h5>
                    <p class="small mb-0">Kami bekerja dengan jujur, transparan, dan bertanggung jawab dalam setiap proyek.</p>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="text-center p-4 bg-white rounded shadow-sm h-100">
                    <div class="bg-primary bg-opacity-10 d-inline-flex align-items-center justify-content-center rounded-circle mb-3" style="width: 80px; height: 80px; margin: 0 auto;">
                        <i class="bi bi-star-fill text-primary fs-3"></i>
                    </div>
                    <h5 class="h6">Kualitas</h5>
                    <p class="small mb-0">Kami mengutamakan kualitas terbaik dalam setiap detail pekerjaan.</p>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="text-center p-4 bg-white rounded shadow-sm h-100">
                    <div class="bg-primary bg-opacity-10 d-inline-flex align-items-center justify-content-center rounded-circle mb-3" style="width: 80px; height: 80px; margin: 0 auto;">
                        <i class="bi bi-people-fill text-primary fs-3"></i>
                    </div>
                    <h5 class="h6">Kerja Sama Tim</h5>
                    <p class="small mb-0">Kami percaya kolaborasi tim yang solid adalah kunci keberhasilan proyek.</p>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="text-center p-4 bg-white rounded shadow-sm h-100">
                    <div class="bg-primary bg-opacity-10 d-inline-flex align-items-center justify-content-center rounded-circle mb-3" style="width: 80px; height: 80px; margin: 0 auto;">
                        <i class="bi bi-lightbulb-fill text-primary fs-3"></i>
                    </div>
                    <h5 class="h6">Inovasi</h5>
                    <p class="small mb-0">Kami terus berinovasi dalam metode dan teknologi konstruksi.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Clients Section -->
<section class="py-5">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="fw-bold">Klien Kami</h2>
            <p class="lead">Beberapa klien yang telah mempercayakan proyeknya kepada kami</p>
        </div>
        
        <div class="row g-4 align-items-center">
            <div class="col-4 col-md-2">
                <div class="p-3 bg-white rounded shadow-sm d-flex align-items-center justify-content-center" style="height: 100px;">
                    <img src="https://img.freepik.com/vektor-premium/vektor-desain-logo-minimalis-abstrak-yang-kreatif-dan-elegan-untuk-semua-perusahaan-merek_1287271-13782.jpg?semt=ais_hybrid&w=740&q=80" alt="Client Logo" class="img-fluid" style="max-height: 60px; width: auto;">
                </div>
            </div>
            <div class="col-4 col-md-2">
                <div class="p-3 bg-white rounded shadow-sm d-flex align-items-center justify-content-center" style="height: 100px;">
                    <img src="https://maxipro.co.id/wp-content/uploads/2022/01/logo-Maxipro-1024x1024.jpg" alt="Client Logo" class="img-fluid" style="max-height: 60px; width: auto;">
                </div>
            </div>
            <div class="col-4 col-md-2">
                <div class="p-3 bg-white rounded shadow-sm d-flex align-items-center justify-content-center" style="height: 100px;">
                    <img src="https://marketplace.canva.com/EAFyRspJvEE/1/0/1600w/canva-biru-hitam-ilustrasi-icon-elegan-properti-logo-nspa5h4PiFM.jpg" alt="Client Logo" class="img-fluid" style="max-height: 60px; width: auto;">
                </div>
            </div>
            <div class="col-4 col-md-2">
                <div class="p-3 bg-white rounded shadow-sm d-flex align-items-center justify-content-center" style="height: 100px;">
                    <img src="https://cdnb.artstation.com/p/assets/images/images/031/720/963/large/pixell-design-logo-perusahaan-pt-cahayabakti.jpg?1604413179" alt="Client Logo" class="img-fluid" style="max-height: 60px; width: auto;">
                </div>
            </div>
            <div class="col-4 col-md-2">
                <div class="p-3 bg-white rounded shadow-sm d-flex align-items-center justify-content-center" style="height: 100px;">
                    <img src="https://algotech.co.id/assets/berita/jasa-pembuatan-logo-perusahaan.jpg" alt="Client Logo" class="img-fluid" style="max-height: 60px; width: auto;">
                </div>
            </div>
            <div class="col-4 col-md-2">
                <div class="p-3 bg-white rounded shadow-sm d-flex align-items-center justify-content-center" style="height: 100px;">
                    <img src="https://marketplace.canva.com/EAF2Qiq8zXk/2/0/1600w/canva-logo-perusahaan-pengembangan-aplikasi-gradien-profesional-kuning-ZgB_kFddIuU.jpg" alt="Client Logo" class="img-fluid" style="max-height: 60px; width: auto;">
                </div>
            </div>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="py-5 bg-primary text-white">
    <div class="container text-center py-4">
        <h2 class="fw-bold mb-4">Tertarik Bekerja Sama dengan Kami?</h2>
        <p class="lead mb-4">Kami siap membantu mewujudkan proyek konstruksi Anda dengan hasil terbaik.</p>
        <a href="{{ route('contact') }}" class="btn btn-light btn-lg">Hubungi Kami Sekarang</a>
    </div>
</section>
@endsection