<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h4>Kas Pemasukan Tahun Ini</h4>
            </div>
            <div class="card-body">
                <div id="cash-transaction-chart-dashboard"></div>
            </div>
        </div>
    </div>
</div>

@push('js')
@include('dashboard.dashboard.charts.script')
@endpush