@extends('frontend.layouts.app')
@section('content')

<div class="container-fluid pt-5 pb-5 bg-light">
    <div class="container text-center">
        <h2 class="display-3" id="portofolio">Blog</h2>
        
        <div class="section search-result-wrap">
            <div class="container">
                <div class="row posts-entry">
                    <div class="col-lg-8">
                        @foreach($blog as $b)
                            <div class="blog-entry d-flex blog-entry-search-item">
                                <a href="single.html" class="img-link me-4">
                                <img src="{{ Storage::url($b->gambar) }}" width="200px" alt="Image" class="img-fluid" />
                                </a>
                                <div>
                                <span class="date"
                                    >{{ $b->tanggal }} &bullet; <a href="#">{{ $b->jenis }}</a></span
                                >
                                <h2>
                                    <a href="#"
                                    >{{ $b->judul }}</a
                                    >
                                </h2>
                                <p>
                                    {{ substr($b->deskripsi, 0, 100) }}{{ strlen($b->deskripsi) > 100 ? "..." : "" }}
                                </p>
                                <p>
                                    <a href="{{ route('frontend.blog-detail', $b->id) }}" class="btn btn-sm btn-outline-primary py-2"
                                    >Read More</a
                                    >
                                </p>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection