<?php

namespace App\Http\Controllers;

use App\Models\Data;
use Illuminate\Http\Request;

class DataController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datas = Data::all();
        //return $data;
        return view('data.index',compact('datas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('data.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'RT' => 'required',
            'ketidakteraturan' => 'required',
            'luaskawasan' => 'required',
            'persyaratanteknis' => 'required',
            'keterjangkauan' => 'required',
            'kualitaspermukaan' => 'required',
            'ketersediaanaksesair' => 'required',
            'tidakterpenuhinyaair' => 'required',
            'ketidakmampuan' => 'required',
            'ketidaktersediaandrainase' => 'required',
            'kualitaskonstruksi' => 'required',
            'sistempengolahanair' => 'required',
            'sapraspengolahanair' => 'required',
            'sapraspersampahan' => 'required',
            'sistempengelolaan' => 'required',
            'ketidaktersediaanprasarana' => 'required',
            'ketidaktersediaansarana' => 'required',
        ]);
        //return $request;
        Data::create([
            'RT' => $request->RT,
            'ketidakteraturan' => $request->ketidakteraturan,
            'luaskawasan' => $request->luaskawasan,
            'persyaratanteknis' => $request->persyaratanteknis,
            'keterjangkauan' => $request->keterjangkauan,
            'kualitaspermukaan' => $request->kualitaspermukaan,
            'ketersediaanaksesair' => $request->ketersediaanaksesair,
            'tidakterpenuhinyaair' => $request->tidakterpenuhinyaair,
            'ketidakmampuan' => $request->ketidakmampuan,
            'ketidaktersediaandrainase' => $request->ketidaktersediaandrainase,
            'kualitaskonstruksi' => $request->kualitaskonstruksi,
            'sistempengolahanair' => $request->sistempengolahanair,
            'sapraspengolahanair' => $request->sapraspengolahanair,
            'sapraspersampahan' => $request->sapraspersampahan,
            'sistempengelolaan' => $request->sistempengelolaan,
            'ketidaktersediaanprasarana' => $request->ketidaktersediaanprasarana,
            'ketidaktersediaansarana' => $request->ketidaktersediaansarana,




        ]);
        return redirect('/data');
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
        $data = data::find($id);
        //return $data;
        return view('data.edit',compact('data'));
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
        //return $request;
        $request->validate([
            'RT' => 'required',
            'ketidakteraturan' => 'required',
            'luaskawasan' => 'required',
            'persyaratanteknis' => 'required',
            'keterjangkauan' => 'required',
            'kualitaspermukaan' => 'required',
            'ketersediaanaksesair' => 'required',
            'tidakterpenuhinyaair' => 'required',
            'ketidakmampuan' => 'required',
            'ketidaktersediaandrainase' => 'required',
            'kualitaskonstruksi' => 'required',
            'sistempengolahanair' => 'required',
            'sapraspengolahanair' => 'required',
            'sapraspersampahan' => 'required',
            'sistempengelolaan' => 'required',
            'ketidaktersediaanprasarana' => 'required',
            'ketidaktersediaansarana' => 'required',
        ]);

        Data::find($id)->update([
            'RT' => $request->RT,
            'ketidakteraturan' => $request->ketidakteraturan,
            'luaskawasan' => $request->luaskawasan,
            'persyaratanteknis' => $request->persyaratanteknis,
            'keterjangkauan' => $request->keterjangkauan,
            'kualitaspermukaan' => $request->kualitaspermukaan,
            'ketersediaanaksesair' => $request->ketersediaanaksesair,
            'tidakterpenuhinyaair' => $request->tidakterpenuhinyaair,
            'ketidakmampuan' => $request->ketidakmampuan,
            'ketidaktersediaandrainase' => $request->ketidaktersediaandrainase,
            'kualitaskonstruksi' => $request->kualitaskonstruksi,
            'sistempengolahanair' => $request->sistempengolahanair,
            'sapraspengolahanair' => $request->sapraspengolahanair,
            'sapraspersampahan' => $request->sapraspersampahan,
            'sistempengelolaan' => $request->sistempengelolaan,
            'ketidaktersediaanprasarana' => $request->ketidaktersediaanprasarana,
            'ketidaktersediaansarana' => $request->ketidaktersediaansarana,
        ]);
        return redirect('/data');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //return $id;
        Data::destroy($id);
        return redirect('/data');
    }

    public function fuzzyfikasi_turun($x, $b, $a)
    {
        if($x >= $b){
            $hasil = 0;
        }
        elseif(($a < $x) && ($x < $b)){
            $hasil = ($b - $x) / ($b - $a);
        }else{
            $hasil = 1;
        }
    }
    
    public function fuzzyfikasi_segitiga($x, $b, $a, $c)
    {
        if(($x <= $a) && ($x >= $c)){
            $hasil = 0;
        }
        elseif(($a <= $x) && ($x <= $b)){
            $hasil = ($x - $a) / ($b - $a);
        }
        else{
            $hasil = 1;
        }
    }
    public function fuzzyfikasi_naik($x, $a, $b)
    {
        if($x <= $a){
            $hasil = 0;
        }
        elseif(($a < $x) && ($x < $b)){
            $hasil = ($x - $a) / ($b - $a);
        }
        else{
            $hasil = 1;
        }
    }
}
