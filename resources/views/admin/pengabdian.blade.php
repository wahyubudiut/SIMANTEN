@extends('layouts.dashboard') 
@section('content') 
<div class="col-lg-12 grid-margin stretch-card">
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">Data Pengabdian Asisten</h4>
            <div class="table-responsive pt-3">
                <table class="table table-bordered" id="pengabdian-table">
                    <thead>
                        <tr class="text-center">
                            <th>No </th>
                            <th>Nim </th>
                            <th>Nama </th>
                            <th>Mulai </th>
                            <th>Berakhir </th>
                            <th>Action </th>
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
    $('#pengabdian-table').DataTable({
        processing: true,
        serverSide: true,
        ajax: 'pengabdian/api',
        columns: [
            { data: 'rownum', name: 'rownum' },
            { data: 'nim', name: 'nim' },
            { data: 'name', name: 'name' },
            { data: 'start_from', name: 'start_from' },
            { data: 'end_on', name: 'end_on' },
            { data: 'action', name: 'action', orderable: false, searchable: false}     
        ]
    });
});
</script>
@endpush
