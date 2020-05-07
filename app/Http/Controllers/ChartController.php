<?php

namespace App\Http\Controllers;

use App\User;
use App\Chart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ChartController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        // $nilai = \App\Nilai;
        // $matapelajaran = DB::raw('SELECT m.nama AS mapel, COUNT(*) AS jumlah FROM `mapel_asistens`LEFT JOIN `mapels` m on id_mapel = m.id LEFT JOIN `users` u on id_asisten = u.id GROUP BY id_mapel');
        // $matapelajaran = \App\Mapel::all();
        // $user = \App\User::all();

        $id = $request->id;

        $matapelajaran = DB::table('mapel_asistens')->leftJoin('mapels','id_mapel','=','mapels.id')->select(DB::raw('mapels.nama AS mapel,score AS jumlah'))->where('id_asisten', '=', $id)->get();
        
        //data untuk chart
        $categories = [];
        $nilai = [];
        
        foreach($matapelajaran as $mapel){
            $categories[] = $mapel->mapel;
            $nilai[] = $mapel->jumlah;

        }


        return view('User.Chart', compact('matapelajaran', 'categories', 'nilai'));
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
     * @param  \App\Chart  $chart
     * @return \Illuminate\Http\Response
     */
    public function show(Chart $chart)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Chart  $chart
     * @return \Illuminate\Http\Response
     */
    public function edit(Chart $chart)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Chart  $chart
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Chart $chart)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Chart  $chart
     * @return \Illuminate\Http\Response
     */
    public function destroy(Chart $chart)
    {
        //
    }
}
