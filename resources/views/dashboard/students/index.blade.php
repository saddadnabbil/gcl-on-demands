@extends('dashboard.layouts.main', ['title' => 'Warga', 'page_heading' => 'Data Warga'])

@section('content')
<section class="row">
	<div class="col-6">
		<div class="card">
			<div class="card-body px-3 py-4-5">
				<div class="row">
					<div class="col-4">
						<div class="stats-icon green">
							<i class="iconly-boldProfile"></i>
						</div>
					</div>
					<div class="col-8">
						<h6 class="text-muted font-semibold">Data Kepala Keluarga</h6>
						<h6 class="font-extrabold mb-0">
							{{ $maleStudentCount }}
						</h6>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="col-6">
		<div class="card">
			<!--<div class="card-body px-3 py-4-5">
				<div class="row">
					<div class="col-4">
						<div class="stats-icon blue">
							<i class="iconly-boldProfile"></i>
						</div>
					</div>
					<div class="col-8">
						<h6 class="text-muted font-semibold">Perempuan</h6>
						<h6 class="font-extrabold mb-0">
							{{ $femaleStudentCount }}
						</h6>
					</div>
				</div>-->
			</div>
		</div>
	</div>

	@include('dashboard.utilities.alert-flash-message')
	<div class="col card px-3 py-3">
		@auth
		<div class="d-flex justify-content-end pb-3">
			<div class="btn-group d-gap gap-2">
				<a href="{{ route('students.export') }}" class="btn btn-success">
					<i class="bi bi-file-earmark-excel-fill"></i>
					Export Excel
				</a>
				<a href="{{ route('students.index.history') }}" class="btn btn-secondary">
					<span class="badge">{{ $studentTrashedCount }}</span> Histori Data Pelajar
				</a>
				<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addStudentModal">
					<i class="bi bi-plus-circle"></i> Tambah Data
				</button>
			</div>
		</div>
		@endauth

		<div class="table-responsive">
			<table class="table table-sm w-100" id="datatable">
				<thead>
					<tr>
						<th scope=" col">#</th>
						<th scope="col">ID</th>
						<th scope="col">Nama Warga</th>
						<th scope="col">Blok Rumah</th>
						<th scope="col">RT</th>
						<th scope="col">Periode</th>
						<th scope="col">Aksi</th>
					</tr>
				</thead>
				<tbody>
				</tbody>
			</table>
		</div>
	</div>
</section>
@endsection

@push('modal')
@include('dashboard.students.modal.create')
@include('dashboard.students.modal.show')
@include('dashboard.students.modal.edit')
@endpush

@if(!Auth::guest())
	@push('js')
	@include('dashboard.students.script')
	@endpush
@else
	@push('js')
	@include('dashboard.students.script-guest')
	@endpush
@endif

