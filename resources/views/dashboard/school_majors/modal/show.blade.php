<div class="modal fade" id="showSchoolMajorModal" tabindex="-1" data-bs-backdrop="static" data-bs-keyboard="false"
	aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title">Detail RT</h5>
				<button type="button" class="btn-close  " data-bs-dismiss="modal" aria-label="Close"></button>
			</div>
			<div class="modal-body">
				@include('dashboard.utilities.loading-alert')
				<div class="row">
					<div class="col-md-12">
						<div class="mb-3">
							<label for="name" class="form-label">RT</label>
							<input type="text" class="form-control" id="name" disabled>
						</div>
						<div class="mb-3">
							<label for="name" class="form-label">RT</label>
							<input type="text" class="form-control" id="abbreviated_word" disabled>
						</div>
					</div>
				</div>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-secondary  " data-bs-dismiss="modal">Tutup</button>
			</div>
		</div>
	</div>
</div>
