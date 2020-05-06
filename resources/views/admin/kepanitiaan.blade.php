@extends('layouts.dashboard') 
@section('content') 
<div class="col-lg-12 grid-margin stretch-card">
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">Data Kepanitiaan Asisten</h4>
            <div class="table-responsive pt-3">
                <table class="table table-bordered" id="kepanitiaan-table">
                    <thead>
                        <tr class="text-center">
                            <th>No </th>
                            <th>Nim </th>
                            <th>Nama </th>
                            <th>Nama Acara</th>
                            <th>Tgl Acara </th>
                            <th>Peran</th>
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
    $('#kepanitiaan-table').DataTable({
        processing: true,
        serverSide: true,
        ajax: 'kepanitiaan/api',
        columns: [
            { data: 'rownum', name: 'rownum' },
            { data: 'nim', name: 'nim' },
            { data: 'name', name: 'name' },
            { data: 'nama_acara', name: 'nama_acara' },
            { data: 'tgl_acara', name: 'tgl_acara' },
            { data: 'peran', name: 'peran' },
                
        ]
    });
});
</script>
@endpush
