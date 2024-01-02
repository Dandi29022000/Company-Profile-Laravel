@extends('frontend.layouts.app')
@section('content')

<!-- tentang -->
<div class="container-fluid pt-5 pb-5">
    <div class="container">
    <h5 class="display-3 text-center" id="tentang">Tentang</h5>
    <p class="text-center">
        Berdiri tahun 2019, didirikan di Jawa Timur dikukuhkan dengan Akta Pendirian Perusahaan di 
        hadapan Notaris Donni Yulian Dwi Siswanto, SH, M.Kn. Penandatangan oleh pejabat yang ditunjuk 
        dihadapan notaris ini dilakukan pada tanggal 18 Oktober 2019.
    </p>
    <div class="clearfix pt-5">
        <img
        src="https://img.freepik.com/free-vector/about-us-website-banner-concept-with-thin-line-flat-design_56103-96.jpg?size=626&ext=jpg"
        class="col-md-6 float-md-end mb-3 crop-img"
        width="300"
        height="300"
        />
        <h3>VISI</h3>
			<p>Menjadi Solusi Informasi Technology (IT) di perusahaan rekaan.</p>
		<h3>MISI</h3>
			<p>- Menjadi mitra dan konsultan terbaik bagi pelanggan.</p> 
            <p>- Memberikan layanan tepat waktu dan keunggulan operasional kepada pelanggan.</p> 
            <p>- Menghasilkan produk inovatif yang bermutu demi kepuasan pelanggan.</p> 
            <p>- Menjadi perusahaan yang tumbuh secara layak dan bermoral.</p>
    </div>
    </div>
</div>

<!-- tim -->
<div class="container-fluid pt-5 pb-5 bg-light">
    <div class="container text-center">
        <h2 class="display-3" id="staff">Tim Kami</h2>
        <p>
            Lorem, ipsum dolor sit amet consectetur adipisicing elit. Et deleniti
            quas at magni, iusto voluptates neque corrupti dolorum! Repellat,
            quod.
        </p>
        
        <div class="row pt-4 gx-4 gy-4">
            @foreach($TimKami as $t)
            <div class="col-md-4 text-center tim">
                <img
                    src="{{ Storage::url($t->gambar) }}"
                    class="rounded-circle mb-3"
                />
                <h4>{{ $t->nama }}</h4>
                <p>{{ $t->jabatan }}</p>
                <p>
                    <a href="" class="social"><i class="fab fa-twitter"></i></a>
                    <a href="" class="social"><i class="fab fa-facebook-f"></i></a>
                    <a href="" class="social"><i class="fab fa-linkedin-in"></i></a>
                </p>
            </div>
            @endforeach
        </div>
    </div>
</div>

@endsection