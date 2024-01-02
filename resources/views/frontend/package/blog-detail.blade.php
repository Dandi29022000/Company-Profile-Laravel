@extends('frontend.layouts.app')
@section('content')

<div class="container-fluid pt-5 pb-5 bg-light">
    <div class="container">
        <div class="row same-height justify-content-center">
            <div class="col-md-6">
            <div class="post-entry text-center">
                <h1 class="mb-4">{{ $blog->judul }}</h1>
            </div>
            </div>
        </div>
        </div>
    </div>

    <div class="container">
        <div class="row blog-entries element-animate">
            <div class="col-md-12 col-lg-8 main-content">
                <div class="post-content-body">
                    <p>
                        {{ $blog->deskripsi}}
                    </p>
                    <div class="row my-4">
                    <div class="col-md-12 mb-4">
                        <img
                        src="{{ Storage::url($blog->gambar) }}"
                        alt="Image placeholder"
                        class="img-fluid rounded"
                        />
                    </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection