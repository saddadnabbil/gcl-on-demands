@extends('dashboard.layouts.main', ['title' => 'Blok', 'page_heading' => 'Data Blok'])

@section('content')
<section class="row">
	@include('dashboard.utilities.alert-flash-message')
	<div class="col card px-3 py-3">
		@auth
		<div class="d-flex justify-content-end pb-3">
			<div class="btn-group d-gap gap-2">
				<a href="{{ route('school-classes.index.history') }}" class="btn btn-secondary">
					<span class="badge">{{ $schoolClassesTrashedCount }}</span> Histori Data Blok
				</a>
				<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addSchoolClassModal">
					<i class="bi bi-plus-circle"></i> Tambah Data
				</button>
			</div>
		</div>
		@endauth

		<div class="table-responsive">
			<table class="table table-sm w-100" id="datatable">
				<thead>
					<tr>
						<th scope="col">#</th>
						<th scope="col">Nama</th>
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
@include('dashboard.school_classes.modal.create')
@include('dashboard.school_classes.modal.show')
@include('dashboard.school_classes.modal.edit')
@endpush

@if(!Auth::guest())
	@push('js')
	@include('dashboard.school_classes.script')
	@endpush
@else
	@push('js')
	@include('dashboard.school_classes.script-guest')
	@endpush
@endif
