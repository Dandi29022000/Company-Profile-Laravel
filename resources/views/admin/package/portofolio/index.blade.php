@extends('admin.layouts.app')
@section('content')
<!-- Begin Page Content -->
<div class="container-fluid">
<br>
<!-- DataTales Example -->
<div class="card shadow mb-4">
	<div class="card-header py-3">
		<h3 class="m-0 font-weight-bold text-primary">Master Data Portofolio</h3>
	</div>

	<div class="card-body">
		<div class="row">
			<div class="col-lg-12 margin-tb">
				<div class="float-left my-2">
					<a href="{{ route('portofolio.create') }}" class="mr-4">
						<button type="button" class="btn btn-success"><i class="fa fa-plus-square"></i> Tambah</button>
					</a>
				</div>


				<div class="float-right my-2">
					<div class="float-left">
						<form action="{{ route('portofolio.index') }}" method="GET" role="search">
							<div class="input-group">
								<a href="{{ route('portofolio.index') }}" class="mr-4 mt-1">
									<span class="input-group-btn">
										<button class="btn btn-danger" type="button" title="Refresh page">
											<span class="fas fa-sync-alt">Refresh</span>
										</button>
									</span>
								</a>
								
								<input type="text" class="form-control mr-4 mt-1" name="term" placeholder="Search" id="term">
								<span class="input-group-btn mr-2 mt-1">
									<input type="submit" value="Cari" class="btn btn-primary">
								</span>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>

		<div class="table-responsive">
			<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
			<thead>
				<tr>
					<th>No.</th>
					<th>Judul</th>
					<th>Deskripsi</th>
					<th>Foto</th>
					<th>Aksi</th>
				</tr>
			</thead>
			<tbody>
				<?php $no = 1; ?>
				@if($portofolio->count() > 0)
				@foreach($portofolio as $Porto)
				<tr>
					<td>
						<?php
						echo $no++;
						?>
					</td>
					<td>{{ $Porto->judul }}</td>
					<td>{{ $Porto->deskripsi }}</td>
					<td><img width="90px" src="{{asset('storage/'.$Porto->gambar)}}" alt=""></td>
					<td>
						<form action="{{ route('portofolio.destroy',$Porto->id) }}" method="POST" onsubmit="return confirm('Apakah Anda yakin ingin menghapus data portofolio?')">
							<a id="button-edit" class="btn btn-info btn-circle" href="{{ route('portofolio.edit',$Porto->id) }}">
								<i class="fas fa-pencil-alt"></i>
							</a>
							
							@csrf
							@method('DELETE')
							<button class="btn btn-danger btn-circle" type="submit" class="btn btn-danger">
								<i class="fas fa-trash"></i>
							</button>
						</form>
					</td>
				</tr>
					@endforeach
					@else
				<tr>
					<td colspan="6">Data tidak tersedia</td>
				</tr>
					@endif
				</tbody>
			</table>
		</div>
	</div>
</div>

</div>
@endsection