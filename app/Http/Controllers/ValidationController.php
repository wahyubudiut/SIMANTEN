<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use DataTables;
use App\Validation;
use Illuminate\Http\Request;

class ValidationController extends Controller
{
    public function api()
    {
        DB::statement(DB::raw('set @rownum=0'));
        $sertifikats = DB::table('sertifikats')
                        ->join('users', 'sertifikats.nim', '=', 'users.nim')
                        ->select([
                            DB::raw('@rownum  := @rownum  + 1 AS rownum'),
                            'sertifikats.nim',
                            'users.name',
                            'sertifikats.code',
                            'sertifikats.validated',
                        ]);
         return Datatables::of($sertifikats)
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
        return view('admin.validasi');
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
     * @param  \App\Validation  $validation
     * @return \Illuminate\Http\Response
     */
    public function show(Validation $validation)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Validation  $validation
     * @return \Illuminate\Http\Response
     */
    public function edit(Validation $validation)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Validation  $validation
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Validation $validation)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Validation  $validation
     * @return \Illuminate\Http\Response
     */
    public function destroy(Validation $validation)
    {
        //
    }
}
