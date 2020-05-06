<?php

namespace App\Http\Controllers;

use App\Organization;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon; 
use DataTables;

class OrganizationController extends Controller
{
    public function userApi()
    {
         $nim = Auth::user()->nim;

        DB::statement(DB::raw('set @rownum=0'));
        $organizations = DB::table('organizations')
                        ->join('users', 'organizations.nim', '=', 'users.nim')
                        ->select([
                            DB::raw('@rownum  := @rownum  + 1 AS rownum'),
                            'organizations.nim',
                            'users.name',
                            'organizations.tgl_acara'
                        ]) ->where('users.nim',$nim);
         return Datatables::of($organizations)
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
        $organizations = DB::table('organizations')
                        ->join('users', 'organizations.nim', '=', 'users.nim')
                        ->select([
                            DB::raw('@rownum  := @rownum  + 1 AS rownum'),
                            'organizations.nim',
                            'users.name',
                            'organizations.tgl_acara'
                        ]);
         return Datatables::of($organizations)
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
        return view('admin.organization');
    }
    public function user()
    {
        return view('admin.organization');
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
     * @param  \App\Organization  $organization
     * @return \Illuminate\Http\Response
     */
    public function show(Organization $organization)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Organization  $organization
     * @return \Illuminate\Http\Response
     */
    public function edit(Organization $organization)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Organization  $organization
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Organization $organization)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Organization  $organization
     * @return \Illuminate\Http\Response
     */
    public function destroy(Organization $organization)
    {
        //
    }
}
