<?php

namespace App\Http\Controllers;

use App\Praktikum;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

use Carbon\Carbon; 
use DataTables;

class PraktikumController extends Controller
{
    public function userApi()
    {
        $nim = Auth::user()->nim;

        DB::statement(DB::raw('set @rownum=0')); 
        $praktikums = DB::table('praktikums')
                        ->join('users', 'praktikums.nim', '=', 'users.nim')
                        ->select([
                            DB::raw('@rownum  := @rownum  + 1 AS rownum'),
                            'praktikums.nim',
                            'users.name',
                            'praktikums.kelas',
                            'praktikums.praktikum',
                            'praktikums.jadwal',
                            'praktikums.absen',
                        ])
                         ->where('users.nim',$nim);


        return Datatables::of($praktikums)
            ->editColumn('jadwal', function ($data) {
                return $data->jadwal ? with(new Carbon($data->jadwal))->format('l, d F Y H:i') : '';
            })
            ->editColumn('absen', function ($data) {
                return $data->absen ? with(new Carbon($data->absen))->format('l, d F Y H:i') : '';;
            })
            ->filterColumn('jadwal', function ($query, $keyword) {
                $query->whereRaw("DATE_FORMAT(jadwal,'%m/%d/%Y') like ?", ["%$keyword%"]);
            })
            ->filterColumn('absen', function ($query, $keyword) {
                $query->whereRaw("DATE_FORMAT(absen,'%Y/%m/%d') like ?", ["%$keyword%"]);
            })
             ->addColumn('action', function ($data) {
                $time = \Carbon\Carbon::parse($data->jadwal)->diffInMinutes($data->absen);
                $keterlambatan = $time - 15;
                if( $time > 30){
                    return '<div class="btn btn-danger btn-rounded">Tidak absen</div>';
                }else if($time > 15 && $time <= 30){
                    return '<div class="btn btn-warning btn-rounded">Telat '.$keterlambatan.' menit</div>';
                }
                else{
                    return '<div class="btn btn-primary btn-rounded">Hadir</div>';
                }
            })
             ->addIndexColumn()
            ->make(true);
    }

    public function api() 
    {
        
        DB::statement(DB::raw('set @rownum=0'));
        
        
        $praktikums = DB::table('praktikums')
                        ->join('users', 'praktikums.nim', '=', 'users.nim')
                        ->select([
                            DB::raw('@rownum  := @rownum  + 1 AS rownum'),
                            'praktikums.nim',
                            'users.name',
                            'praktikums.kelas',
                            'praktikums.praktikum',
                            'praktikums.jadwal',
                            'praktikums.absen',
                        ]);


        return Datatables::of($praktikums)
            ->editColumn('jadwal', function ($data) {
                return $data->jadwal ? with(new Carbon($data->jadwal))->format('l, d F Y H:i') : '';
            })
            ->editColumn('absen', function ($data) {
                return $data->absen ? with(new Carbon($data->absen))->format('l, d F Y H:i') : '';;
            })
            ->filterColumn('jadwal', function ($query, $keyword) {
                $query->whereRaw("DATE_FORMAT(jadwal,'%m/%d/%Y') like ?", ["%$keyword%"]);
            })
            ->filterColumn('absen', function ($query, $keyword) {
                $query->whereRaw("DATE_FORMAT(absen,'%Y/%m/%d') like ?", ["%$keyword%"]);
            })
             ->addColumn('action', function ($data) {
                $time = \Carbon\Carbon::parse($data->jadwal)->diffInMinutes($data->absen);
                if( $time >= 30){
                    return '<div class="btn btn-danger btn-rounded">telat banget</div>';
                }else if($time > 15)
                {
                    return '<div class="btn btn-warning btn-rounded">ampir telat</div>';
                }
                else{
                    return '<div class="btn btn-primary btn-rounded">Aman</div>';
                }
            })
             ->addIndexColumn()
            ->make(true);
            
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.praktikum');
    }

    public function user()
    {
        return view('user.praktikum');
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Praktikum  $praktikum
     * @return \Illuminate\Http\Response
     */
    public function show(Praktikum $praktikum)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Praktikum  $praktikum
     * @return \Illuminate\Http\Response
     */
    public function edit(Praktikum $praktikum)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Praktikum  $praktikum
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Praktikum $praktikum)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Praktikum  $praktikum
     * @return \Illuminate\Http\Response
     */
    public function destroy(Praktikum $praktikum)
    {
        //
    }
}
