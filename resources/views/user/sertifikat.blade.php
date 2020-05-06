@extends('layouts.dashboard')
@section('content')
<div class="col-lg-12 grid-margin stretch-card">
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">Data Sertifikat</h4>
            <div class="table-responsive pt-3">
                <table class="table table-bordered" id="sertifikat">
                    <thead>
                        <tr class="text-center">
                            <th>No</th>
                            <th>Nomor Sertifikat</th>
                            <th>Nim</th>
                            <th>Nama</th>
                            <th>Action</th>
                           
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
    $('#sertifikat').DataTable({
        processing: true,
        serverSide: true,
        ajax: 'sertifikat/api',
        columns: [
            { data: 'rownum', name: 'rownum' },
            { data: 'code', name: 'code' },
            { data: 'nim', name: 'nim' },
            { data: 'name', name: 'name' },
            { data: 'action', name: 'action', orderable: false, searchable: false}     
            
        ]
    });
});
</script>
@endpush
