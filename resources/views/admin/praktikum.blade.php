@extends('layouts.dashboard') 
@section('content') 
<div class="col-lg-12 grid-margin stretch-card">
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">Data Praktikum Asisten</h4>
            <div class="table-responsive pt-3">
                <table class="table table-bordered" id="praktikum-table">
                    <thead>
                        <tr class="text-center">
                            <th>No</th>
                            <th>Nim</th>
                            <th>Nama</th>
                            <th>Kelas</th>
                            <th>Praktikum</th>
                            <th>Jadwal</th>
                            <th>Absen</th>
                            <th>Kehadiran</th>
                           
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
//$(function() {
    $('#praktikum-table').DataTable({
        processing: true,
        serverSide: true,
        ajax: 'admin/praktikum/api',
        columns: [
            { data: 'rownum', name: 'rownum' },
            { data: 'nim', name: 'nim' },
            { data: 'name', name: 'name' },
            { data: 'kelas', name: 'kelas' },
            { data: 'praktikum', name: 'praktikum' },
            { data: 'jadwal', name: 'jadwal' },
            { data: 'absen', name: 'absen' },
            { data: 'action', name: 'action', orderable: false, searchable: false}
        ]
    });
//});
</script>
@endpush
