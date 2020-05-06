@extends('layouts.app')

@section('content')
<div id="bg-main-content" style="height: 480px;">
    <div class="container py-5">
        <div class="row justify-content-md-center py-5 text-center">
            <div class="col-md-auto">
                <h1 class="text-light">Enter Your Number : </h1>
                <form action="/sertifikat" method="GET">
                    <!-- @csrf -->
                    <div class="input-group">
                        <input type="text" name="code" class="form-control rounded" placeholder="Enter your number code" required value="{{ old('code') }}">
                        <div style="position: absolute;right: 4px;top: 4px;bottom: 4px;z-index:9">
                            <input type="submit" value="Search" class="btn btn-sm rounded"
                                style=" background-color: #282958; border-color:#282958; color:#fff; ">
                        </div>
                    </div>

                </form>
            </div>
        </div>
    </div>
</div>
@endsection()
