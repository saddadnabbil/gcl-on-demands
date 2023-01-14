@extends('dashboard.layouts.main', ['title' => 'RT', 'page_heading' => 'Data RT'])

@section('content')
<section class="row">
	@include('dashboard.utilities.alert-flash-message')
	<div class="col card px-3 py-3">
		<div class="d-flex justify-content-end pb-3">
			@auth
			<div class="btn-group d-gap gap-2">
				<a href="{{ route('school-majors.index.history') }}" class="btn btn-secondary">
					<span class="badge">{{ $schoolMajorTrashedCount }}</span> Histori Data Jurusan
				</a>
				<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addSchoolMajorModal">
					<i class="bi bi-plus-circle"></i> Tambah Data
				</button>
			</div>
			@endauth
		</div>

		<div class="table-responsive">
			<table class="table table-sm w-100" id="datatable">
				<thead>
					<tr>
						<th scope="col">#</th>
						<th scope="col">Nama</th>
						<th scope="col">Singkatan</th>
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
@include('dashboard.school_majors.modal.create')
@include('dashboard.school_majors.modal.show')
@include('dashboard.school_majors.modal.edit')
@endpush

@if(!Auth::guest())
	@push('js')
	@include('dashboard.school_majors.script')
	@endpush
@else
	@push('js')
	@include('dashboard.school_majors.script-guest')
	@endpush
@endif
