<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use DataTables;
use PDF;

class SertifikatController extends Controller
{
    public function api()
    {
        $nim = Auth::user()->nim;

        DB::statement(DB::raw('set @rownum=0'));
        $sertifikats = DB::table('sertifikats')
            ->join('users', 'sertifikats.nim', '=', 'users.nim')
            ->select([
                DB::raw('@rownum  := @rownum  + 1 AS rownum'),
                'sertifikats.nim',
                'users.name',
                'sertifikats.code',
            ])->where('users.nim', $nim);
        return Datatables::of($sertifikats)
            ->addColumn('action', function ($sertifikats) {
                return '<a href="sertifikat/preview/' . str_replace('/', '-', $sertifikats->code) . '" target="_blank" class="btn btn-icon"><i class="text-primary mdi mdi-eye"></i></a>
                <a href="sertifikat/download/' . str_replace('/', '-', $sertifikats->code) . '" target="_blank" class="btn btn-icon"><i class="text-primary mdi mdi-download"></i></a>';
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
        return view('user.sertifikat');
    }
    public function preview($code)
    {
        $pdf = PDF::loadview('user.previewCertificate', compact('code'))->setpaper('A4', 'landscape');
        return $pdf->stream($code);
    }
    public function download($code)
    {
        $pdf = PDF::loadview('user.previewCertificate', compact('code'))->setpaper('A4', 'landscape');
        return $pdf->download("$code.pdf");
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
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
