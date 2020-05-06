<?php

namespace App\Http\Controllers;

use App\Kepanitiaan;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

use Carbon\Carbon; 
use DataTables;

class KepanitiaanController extends Controller
{
    public function userApi()
    {
        $nim = Auth::user()->nim;

        DB::statement(DB::raw('set @rownum=0'));
        $kepanitiaans = DB::table('kepanitiaans')
                        ->join('users', 'kepanitiaans.nim', '=', 'users.nim')
                        ->select([
                            DB::raw('@rownum  := @rownum  + 1 AS rownum'),
                            'kepanitiaans.nim',
                            'users.name',
                            'kepanitiaans.nama_acara',
                            'kepanitiaans.tgl_acara',
                            'kepanitiaans.peran',
                        ])->where('users.nim',$nim);
         return Datatables::of($kepanitiaans)
            ->editColumn('tgl_acara', function ($data) {
                return $data->tgl_acara ? with(new Carbon($data->tgl_acara))->format('l, d F Y H:i') : '';
            })
            
            ->filterColumn('tgl_acara', function ($query, $keyword) {
                $query->whereRaw("DATE_FORMAT(tgl_acara,'%m/%d/%Y') like ?", ["%$keyword%"]);
            })
           
             ->addIndexColumn()
            ->make(true);    
    }
    public function api()
    {
        DB::statement(DB::raw('set @rownum=0'));
        $kepanitiaans = DB::table('kepanitiaans')
                        ->join('users', 'kepanitiaans.nim', '=', 'users.nim')
                        ->select([
                            DB::raw('@rownum  := @rownum  + 1 AS rownum'),
                            'kepanitiaans.nim',
                            'users.name',
                            'kepanitiaans.nama_acara',
                            'kepanitiaans.tgl_acara',
                            'kepanitiaans.peran',
                        ]);
         return Datatables::of($kepanitiaans)
            ->editColumn('tgl_acara', function ($data) {
                return $data->tgl_acara ? with(new Carbon($data->tgl_acara))->format('l, d F Y H:i') : '';
            })
            
            ->filterColumn('tgl_acara', function ($query, $keyword) {
                $query->whereRaw("DATE_FORMAT(tgl_acara,'%m/%d/%Y') like ?", ["%$keyword%"]);
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
        return view('admin.kepanitiaan');
    }
    public function user()
    {
        return view('user.kepanitiaan');
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
     * @param  \App\Kepanitiaan  $kepanitiaan
     * @return \Illuminate\Http\Response
     */
    public function show(Kepanitiaan $kepanitiaan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Kepanitiaan  $kepanitiaan
     * @return \Illuminate\Http\Response
     */
    public function edit(Kepanitiaan $kepanitiaan)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Kepanitiaan  $kepanitiaan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Kepanitiaan $kepanitiaan)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Kepanitiaan  $kepanitiaan
     * @return \Illuminate\Http\Response
     */
    public function destroy(Kepanitiaan $kepanitiaan)
    {
        //
    }
}
