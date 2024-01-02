@extends('frontend.layouts.app')
@section('content')

 <!-- portofolio -->
 <div class="container-fluid pt-5 pb-5 bg-light">
    <div class="container">
        <div class="row same-height justify-content-center">
            <div class="col-md-auto">
                <div class="post-entry text-center">
                    <h3 class="mb-4">{{ $portofolio->judul }}</h3>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row blog-entries element-animate justify-content-center">
            <div class="col-md-auto col-lg-auto main-content">
                <div class="post-content-body">
                    <p>
                        {{ $portofolio->deskripsi}}
                    </p>
                    <div class="row my-4">
                    <div class="col-md-12 mb-4">
                        <img
                        src="{{ Storage::url($portofolio->gambar) }}"
                        alt="Image placeholder"
                        class="img-fluid rounded "
                        />
                    </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection