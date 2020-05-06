@extends('layouts.dashboard')
@section('content')
<div class="col-lg-12 grid-margin stretch-card">
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">Data Sertifikat</h4>
            <div class="table-responsive pt-3">
                <table class="table table-bordered" id="validasi">
                    <thead>
                        <tr class="text-center">
                            <th>No</th>
                            <th>Nomor Sertifikat</th>
                            <th>Nim</th>
                            <th>Nama</th>
                            <th>Jumlah validasi</th>
                           
                        </tr>
                    </thead>
                    <tbody class="text-center">
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection()
@push('scripts')
<script>
$(function() {
    $('#validasi').DataTable({
        processing: true,
        serverSide: true,
        ajax: 'validasi/api',
        columns: [
            { data: 'rownum', name: 'rownum' },
            { data: 'code', name: 'code' },
            { data: 'nim', name: 'nim' },
            { data: 'name', name: 'name' },
            { data: 'validated', name: 'validated' },
               
            
        ]
    });
});
</script>
@endpush
