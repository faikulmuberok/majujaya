@extends('layouts.app')

@section('title', 'Artikel')

@section('content')
<div class="container">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h1>Artikel</h1>
        <a href="{{ route('articles.create') }}" class="btn btn-primary">
            <i class="bi bi-plus-circle"></i> Buat Artikel
        </a>
    </div>

    <div class="row">
        @forelse($articles as $article)
        <div class="col-md-6 col-lg-4 mb-4">
            <div class="card h-100">
                @if($article->image)
                <img src="{{ asset('storage/' . $article->image) }}" class="card-img-top" alt="{{ $article->title }}" style="height: 200px; object-fit: cover;">
                @endif
                <div class="card-body">
                    <h5 class="card-title">{{ $article->title }}</h5>
                    <p class="card-text">{{ Str::limit(strip_tags($article->content), 150) }}</p>
                </div>
                <div class="card-footer bg-white">
                    <div class="d-flex justify-content-between align-items-center">
                        <a href="{{ route('articles.show', $article->id) }}" class="btn btn-sm btn-outline-primary">
                            Baca Selengkapnya
                        </a>
                        <div class="text-muted small">
                            {{ $article->created_at->diffForHumans() }}
                        </div>
                    </div>
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

    <div class="d-flex justify-content-center">
        {{ $articles->links() }}
    </div>
</div>
@endsection