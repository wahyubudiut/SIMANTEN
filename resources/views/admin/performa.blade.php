@extends('layouts.dashboard')
@section('content')
<div class="row">
    @foreach( $performas as $performa )
    <div class="col-md-3 mt-5">
        <!-- <div class="panel"> -->
        <ul class="list-group">
            <div class="card" style="width: 18rem;">
                <img src="{{asset('images/faces/face28.png') }}" width="180px" height="220px" class="card-img-top">
                <div class="card-body">
                    <h7 class="card-title">{{ $performa->name }}</h7>
                    <p class="card-text">{{ $performa->email }}</p>
                </div>

                <ul class="list-group">
                    <li class="list-group-item d-flex justify-content-between align-items-center"> Predikat
                        <a href="" class="badge badge-pill badge-dark">Detail</a>
                    </li>
                </ul>
                <ul class="list-group">
                    <li class="list-group-item d-flex justify-content-between align-items-center"> Nilai
                        <a href="" class="badge badge-pill badge-dark">Detail</a>
                    </li>
                </ul>
                <!-- <ul class="list-group">
                        <li class="list-group-item d-flex justify-content-between align-items-center"> Grafik
                            <a href="" class="badge badge-pill badge-dark">Detail</a>
                        </li>
                    </ul> -->
                    <a href={{'/dashboard/chart?id='.$performa->id}} button type="button" class="btn btn-primary btn-lg btn-block">Show Performance</button></a>
            </div>
        </ul>
    </div>
    @endforeach
</div>
@endsection()

@section('content1')
<div class="container"></div>
<div class="row">
    @foreach( $performas as $performa )
    <div class="col-md-4 mt-5">
        <ul class="list-group">
            <div class="card" style="width: 18rem;">
                <img src="{{asset('images/faces/face28.png') }}" width="180px" height="220px" class="card-img-top">
                <div class="card-body">
                    <h7 class="card-title">{{ $performa->name }}</h7>
                    <p class="card-text">{{ $performa->email }}</p>
                </div>

                <ul class="list-group">
                    <li class="list-group-item d-flex justify-content-between align-items-center"> Predikat
                        <a href="" class="badge badge-pill badge-dark">Detail</a>
                    </li>
                </ul>
                <ul class="list-group">
                    <li class="list-group-item d-flex justify-content-between align-items-center"> Nilai
                        <a href="" class="badge badge-pill badge-dark">Detail</a>
                    </li>
                </ul>
                <!-- <ul class="list-group">
                        <li class="list-group-item d-flex justify-content-between align-items-center"> Grafik
                            <a href="" class="badge badge-pill badge-dark">Detail</a>
                        </li>
                    </ul> -->
                <a href="/dashboard/chart" button type="button" class="btn btn-primary btn-lg btn-block">Show Performance</button></a>
            </div>
        </ul>
    </div>
    @endforeach
</div>
@endsection()