@extends('frontend.layouts.app')
@section('content')

 <!-- portofolio -->
<div class="container-fluid pt-5 pb-5 bg-light">
    <div class="container text-center">
        <h2 class="display-3" id="portofolio">Portofolio</h2>
        <p>
            Lorem ipsum dolor sit amet consectetur, adipisicing elit. Deleniti,
            dolorum quasi? Neque consectetur odio placeat inventore perferendis
            quibusdam omnis deleniti.
        </p>
        <div class="row pt-4 gx-4 gy-4">
            @forelse ($portofolio as $por)
                <div class="col-md-4">
                    <div class="card crop-img">
                    <a href="{{ route('frontend.portofolio-detail', $por->id) }}">
                        <img
                            src="{{asset('storage/'.$por->gambar)}}"  alt="{{ $por->nama }}"
                            class="card-img-top"
                            width="200"
                            height="200"
                            />
                        <div class="card-body">
                            <h5 class="card-title">{{ $por->judul }}</h5>
                            <p class="card-text">
                                {{ substr($por->deskripsi, 0, 100) }}{{ strlen($por->deskripsi) > 100 ? "..." : "" }}
                            </p>
                        </div>
                    </a>
                    </div>
                </div>
            @empty
                No product found!
            @endforelse
        </div>
    </div>
</div>

@endsection