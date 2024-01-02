@extends('frontend.layouts.app')
@section('content')

<!-- banner -->
<div class="container-fluid banner">
    <div class="container text-center">
    <h4 class="display-6">Selamat Datang di Website Kami</h4>
    <h3 class="display-1">Hai! Halo!</h3>
    <a href="#layanan">
        <button type="button" class="btn btn-danger btn-lg">
        Cek Layanan
        </button>
    </a>
    </div>
</div>
<!-- untuk home -->
<div class="section sec-features">
    <div class="container">
    <div class="row g-5">
        <div
        class="col-12 col-sm-6 col-md-6 col-lg-4"
        data-aos="fade-up"
        data-aos-delay="0"
        >
        <div class="feature d-flex">
            <span class="bi-bag-check-fill"></span>
            <div>
            <h3>Building your blog</h3>
            <p>
                Far far away, behind the word mountains, far from the
                countries Vokalia and Consonantia, there live the blind texts.
            </p>
            </div>
        </div>
        </div>
        <div
        class="col-12 col-sm-6 col-md-6 col-lg-4"
        data-aos="fade-up"
        data-aos-delay="100"
        >
        <div class="feature d-flex">
            <span class="bi-wallet-fill"></span>
            <div>
            <h3>Resources and insights</h3>
            <p>
                Far far away, behind the word mountains, far from the
                countries Vokalia and Consonantia, there live the blind texts.
            </p>
            </div>
        </div>
        </div>
        <div
        class="col-12 col-sm-6 col-md-6 col-lg-4"
        data-aos="fade-up"
        data-aos-delay="200"
        >
        <div class="feature d-flex">
            <span class="bi-pie-chart-fill"></span>
            <div>
            <h3>Blog just for you</h3>
            <p>
                Far far away, behind the word mountains, far from the
                countries Vokalia and Consonantia, there live the blind texts.
            </p>
            </div>
        </div>
        </div>
    </div>
    </div>
</div>

<div class="section">
    <div class="container">
    <div class="row justify-content-between">
        <div class="col-lg-7 mb-4 mb-lg-0">
        <img
            src="{{ asset('images/img_7_sq.jpg') }}"
            alt="Image"
            class="img-fluid rounded"
        />
        </div>
        <div class="col-lg-4 ps-lg-2">
            <div class="mb-5">
                <h2 class="text-black h4">
                Bidang Usaha CV Karya Multimedia
                </h2>
            </div>
            <div class="d-flex mb-3 service-alt">
                <div>
                    <span class="bi-wallet-fill me-4"></span>
                </div>
                <div>
                    <h3>Divisi ERP/IT Project (Enterprise Resouce Planning)</h3>
                </div>
            </div>

            <div class="d-flex mb-3 service-alt">
                <div>
                    <span class="bi-wallet-fill me-4"></span>
                </div>
                <div>
                    <h3>Divisi Retail (Sistem Aplikasi Penunjang Jual Beli)</h3>
                </div>
            </div>

            <div class="d-flex mb-3 service-alt">
                <div>
                    <span class="bi-wallet-fill me-4"></span>
                </div>
                <div>
                    <h3>Divisi Cashless (Sistem Pembayaran Non-Tunai)</h3>
                </div>
            </div>

            <div class="d-flex mb-3 service-alt">
                <div>
                    <span class="bi-wallet-fill me-4"></span>
                </div>
                <div>
                    <h3>Divisi Egov (Sistem Aplikasi Pemerintahan)</h3>
                </div>
            </div>

            <div class="d-flex mb-3 service-alt">
                <div>
                    <span class="bi-wallet-fill me-4"></span>
                </div>
                <div>
                    <h3>Divisi IT Multimedia (Sistem Antrian)</h3>
                </div>
            </div>

            <div class="d-flex mb-3 service-alt">
                <div>
                    <span class="bi-wallet-fill me-4"></span>
                </div>
                <div>
                    <h3>Divisi Bisnis Development d& Mobile Apps</h3>
                </div>
            </div>
        </div>
    </div>
    </div>
</div>

@endsection