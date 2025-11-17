@extends('layouts.app')

@section('title', $article->title)

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-lg-8">
            <article>
                <header class="mb-4">
                    <h1 class="fw-bolder mb-1">{{ $article->title }}</h1>
                    <div class="text-muted fst-italic mb-2">
                        Diposting pada {{ $article->created_at->translatedFormat('d F Y') }}
                    </div>
                    @if($article->image)
                    <img class="img-fluid rounded" src="{{ asset('storage/' . $article->image) }}" alt="{{ $article->title }}" />
                    @endif
                </header>

                <section class="mb-5">
                    {!! $article->content !!}
                </section>
            </article>

            <div class="d-flex justify-content-between mb-4">
                <a href="{{ route('articles.index') }}" class="btn btn-secondary">
                    <i class="bi bi-arrow-left"></i> Kembali ke Daftar Artikel
                </a>
                <div>
                    <a href="{{ route('articles.edit', $article->id) }}" class="btn btn-primary">
                        <i class="bi bi-pencil"></i> Edit
                    </a>
                    <form action="{{ route('articles.destroy', $article->id) }}" method="POST" class="d-inline">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger" 
                            onclick="return confirm('Apakah Anda yakin ingin menghapus artikel ini?')">
                            <i class="bi bi-trash"></i> Hapus
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection