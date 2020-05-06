<?php

namespace App\Http\Controllers;

use App\Pengabdian;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon; 
use DataTables;
use Illuminate\Support\Facades\Auth;
class PengabdianController extends Controller
{
    public function userApi()
    {
        $nim = Auth::user()->nim;

        DB::statement(DB::raw('set @rownum=0'));

        $pengabdians = DB::table('pengabdians')
                        ->join('users', 'pengabdians.nim', '=', 'users.nim')
                        ->select([
                            DB::raw('@rownum  := @rownum  + 1 AS rownum'),
                            'pengabdians.nim',
                            'users.name',
                            'pengabdians.start_from',
                            'pengabdians.end_on'
                        ])
                        ->where('users.nim',$nim);

            return Datatables::of($pengabdians)
            ->editColumn('start_from', function ($data) {
                return $data->start_from ? with(new Carbon($data->start_from))->format('l, d F Y H:i') : '';
            })
            ->editColumn('end_on', function ($data) {
                return $data->end_on ? with(new Carbon($data->end_on))->format('l, d F Y H:i') : '';;
            })
            ->filterColumn('start_from', function ($query, $keyword) {
                $query->whereRaw("DATE_FORMAT(start_from,'%m/%d/%Y') like ?", ["%$keyword%"]);
            })
            ->filterColumn('end_on', function ($query, $keyword) {
                $query->whereRaw("DATE_FORMAT(end_on,'%Y/%m/%d') like ?", ["%$keyword%"]);
            })
             ->addIndexColumn()
            ->make(true);
    }

    public function api()
    {
        DB::statement(DB::raw('set @rownum=0'));

        $pengabdians = DB::table('pengabdians')
                        ->join('users', 'pengabdians.nim', '=', 'users.nim')
                        ->select([
                            DB::raw('@rownum  := @rownum  + 1 AS rownum'),
                            'pengabdians.nim',
                            'users.name',
                            'pengabdians.start_from',
                            'pengabdians.end_on'
                        ]);

            return Datatables::of($pengabdians)
            ->editColumn('start_from', function ($data) {
                return $data->start_from ? with(new Carbon($data->start_from))->format('l, d F Y H:i') : '';
            })
            ->editColumn('end_on', function ($data) {
                return $data->end_on ? with(new Carbon($data->end_on))->format('l, d F Y H:i') : '';;
            })
            ->filterColumn('start_from', function ($query, $keyword) {
                $query->whereRaw("DATE_FORMAT(start_from,'%m/%d/%Y') like ?", ["%$keyword%"]);
            })
            ->filterColumn('end_on', function ($query, $keyword) {
                $query->whereRaw("DATE_FORMAT(end_on,'%Y/%m/%d') like ?", ["%$keyword%"]);
            })
             ->addColumn('action', function ($data) {
                return '<button class="btn btn-danger btn-rounded">Berhentikan</button>';
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
        return view('admin.pengabdian');
    }

    public function user()
    {
        return view('user.pengabdian');
    }

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
     * @param  \App\Pengabdian  $pengabdian
     * @return \Illuminate\Http\Response
     */
    public function show(Pengabdian $pengabdian)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Pengabdian  $pengabdian
     * @return \Illuminate\Http\Response
     */
    public function edit(Pengabdian $pengabdian)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Pengabdian  $pengabdian
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Pengabdian $pengabdian)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Pengabdian  $pengabdian
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pengabdian $pengabdian)
    {
        //
    }
}
