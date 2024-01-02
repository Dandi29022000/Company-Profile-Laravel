@extends('frontend.layouts.app')
@section('content')

<!-- layanan -->
<div class="container-fluid layanan pt-5 pb-5">
    <div class="container text-center">
    <h2 class="display-3" id="layanan">Layanan</h2>
    <p>
        Produk dan layanan yang ditawarkan oleh CV Karya Multimedia terdiri dari
    </p>
    <div class="row pt-4">
        <div class="col-md-3">
            <span class="lingkaran"><i class="fas fa-network-wired fa-5x"></i
            ></span>
            <h3 class="mt-3">Integritas</h3>
            <p>
                Memiliki integritas, komitmen tinggi dan dapat diandalkan dalam menjalankan setiap aktivitas bisnis
            </p>
        </div>

        <div class="col-md-3">
            <span class="lingkaran"><i class="fas fa-regular fa-gem fa-5x"></i></span>
            <h3 class="mt-3">Kreatif</h3>
            <p>
                Menghasilkan ide-ide kreatif dan menarik terkait kebutuhan pelanggan untuk membangun sebuah aplikasi
            </p>
        </div>

        <div class="col-md-3">
        <span class="lingkaran"><i class="fas fa-solid fa-handshake fa-5x"></i></span>
        <h3 class="mt-3">Sinergi</h3>
        <p>
            Bersikap proaktif menjalin kerjasama dengan pelanggan, mitra usaha, karyawan dan pemegang saham
        </p>
        </div>

        <div class="col-md-3">
        <span class="lingkaran"><i class="fas fa-solid fa-chart-line fa-5x"></i></span>
        <h3 class="mt-3">Fokus</h3>
        <p>
            Mengedepankan dan mendedikasikan diri pada pengembangan IT yang modern
        </p>
        </div>
    </div>
    </div>
</div>

@endsection