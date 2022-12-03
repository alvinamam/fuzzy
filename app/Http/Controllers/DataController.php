<?php

namespace App\Http\Controllers;

use App\Models\Data;
use App\models\Ringan;
use App\models\Sedang;
use App\models\Berat;
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

    public function fuzzyfikasi_turun($x)
    {
        $a = 25; $b = 50;
        if($x >= $b){
            $hasil = 0;
            return $hasil;
        }
        elseif(($a < $x) && ($x < $b)){
            $hasil = ($b - $x) / ($b - $a);
            return $hasil;
        }else{
            $hasil = 1;
            return $hasil;
        }
    }
    
    public function fuzzyfikasi_segitiga($x)
    {
        $a = 25; $b = 50;
        if(($x <= $a) && ($x >= $b)){
            $hasil = 0;
        }
        elseif(($a <= $x) && ($x <= $b)){
            $hasil = ($x - $a) / ($b - $a);
        }
        else{
            $hasil = 1;
        }
        return $hasil;
    }
    public function fuzzyfikasi_naik($x)
    {
        $a = 25; $b = 50;
        if($x <= $a){
            $hasil = 0;
        }
        elseif(($a < $x) && ($x < $b)){
            $hasil = ($x - $a) / ($b - $a);
        }
        else{
            $hasil = 1;
        }
        return $hasil;
    }
    public function main()
    {
        $berat = $this->fuzzyfikasi_naik(45);
        $sedang = $this->fuzzyfikasi_segitiga(45);
        $ringan = $this->fuzzyfikasi_turun(45);
        $hasil = [
            $berat, $sedang, $ringan
        ];
        return $hasil;
        $datas = Data::all(); // mengambil data
        foreach ($datas as $data){}
        $ringan_ketidakteraturan = $this->fuzzyfikasi_turun($data->ketidakteraturan); //memasukan data
        $sedang_ketidakteraturan = $this->fuzzyfikasi_segitiga($data->ketidakteraturan);
        $berat_ketidakteratuaran= $this->fuzzyfikasi_naik($data->ketidakteraturan);

        $ringan_ketidakteraturan = $this->fuzzyfikasi_turun($data->luaskawasan);
        $sedang_ketidakteraturan = $this->fuzzyfikasi_segitiga($data->luaskawasan);
        $berat_ketidakteratuaran= $this->fuzzyfikasi_naik($data->luaskawasan);
        
        $ringan_ketidakteraturan = $this->fuzzyfikasi_turun($data->persyaratanteknis);
        $sedang_ketidakteraturan = $this->fuzzyfikasi_segitiga($data->persyaratanteknis);
        $berat_ketidakteratuaran= $this->fuzzyfikasi_naik($data->persyaratanteknis);

        $ringan_ketidakteraturan = $this->fuzzyfikasi_turun($data->keterjangkauan);
        $sedang_ketidakteraturan = $this->fuzzyfikasi_segitiga($data->keterjangkauan);
        $berat_ketidakteratuaran= $this->fuzzyfikasi_naik($data->keterjangkauan);

        $ringan_ketidakteraturan = $this->fuzzyfikasi_turun($data->kualitaspermukaan);
        $sedang_ketidakteraturan = $this->fuzzyfikasi_segitiga($data->kualitaspermukaan);
        $berat_ketidakteratuaran= $this->fuzzyfikasi_naik($data->kualitaspermukaan);

        $ringan_ketidakteraturan = $this->fuzzyfikasi_turun($data->ketersediaanaksesair);
        $sedang_ketidakteraturan = $this->fuzzyfikasi_segitiga($data->ketersediaanaksesair);
        $berat_ketidakteratuaran= $this->fuzzyfikasi_naik($data->ketersediaanaksesair);

        $ringan_ketidakteraturan = $this->fuzzyfikasi_turun($data->tidakterpenuhinyaair);
        $sedang_ketidakteraturan = $this->fuzzyfikasi_segitiga($data->tidakterpenuhinyaair);
        $berat_ketidakteratuaran= $this->fuzzyfikasi_naik($data->tidakterpenuhinyaair);

        $ringan_ketidakteraturan = $this->fuzzyfikasi_turun($data->ketidakmampuan);
        $sedang_ketidakteraturan = $this->fuzzyfikasi_segitiga($data->ketidakmampuan);
        $berat_ketidakteratuaran= $this->fuzzyfikasi_naik($data->ketidakmampuan);

        $ringan_ketidakteraturan = $this->fuzzyfikasi_turun($data->ketidaktersediaandrainase);
        $sedang_ketidakteraturan = $this->fuzzyfikasi_segitiga($data->ketidaktersediaandrainase);
        $berat_ketidakteratuaran= $this->fuzzyfikasi_naik($data->ketidaktersediaandrainase);

        $ringan_ketidakteraturan = $this->fuzzyfikasi_turun($data->kualitaskonstruksi);
        $sedang_ketidakteraturan = $this->fuzzyfikasi_segitiga($data->kualitaskonstruksi);
        $berat_ketidakteratuaran= $this->fuzzyfikasi_naik($data->kualitaskonstruksi);

        $ringan_ketidakteraturan = $this->fuzzyfikasi_turun($data->sistempengolahanair);
        $sedang_ketidakteraturan = $this->fuzzyfikasi_segitiga($data->sistempengolahanair);
        $berat_ketidakteratuaran= $this->fuzzyfikasi_naik($data->sistempengolahanair);

        $ringan_ketidakteraturan = $this->fuzzyfikasi_turun($data->sapraspengolahanair);
        $sedang_ketidakteraturan = $this->fuzzyfikasi_segitiga($data->sapraspengolahanair);
        $berat_ketidakteratuaran= $this->fuzzyfikasi_naik($data->sapraspengolahanair);

        $ringan_ketidakteraturan = $this->fuzzyfikasi_turun($data->sapraspersampahan);
        $sedang_ketidakteraturan = $this->fuzzyfikasi_segitiga($data->sapraspersampahan);
        $berat_ketidakteratuaran= $this->fuzzyfikasi_naik($data->sapraspersampahan);

        $ringan_ketidakteraturan = $this->fuzzyfikasi_turun($data->sistempengelolaan);
        $sedang_ketidakteraturan = $this->fuzzyfikasi_segitiga($data->sistempengelolaan);
        $berat_ketidakteratuaran= $this->fuzzyfikasi_naik($data->sistempengelolaan);

        $ringan_ketidakteraturan = $this->fuzzyfikasi_turun($data->ketidaktersediaanprasarana);
        $sedang_ketidakteraturan = $this->fuzzyfikasi_segitiga($data->ketidaktersediaanprasarana);
        $berat_ketidakteratuaran= $this->fuzzyfikasi_naik($data->ketidaktersediaanprasarana);

        $ringan_ketidakteraturan = $this->fuzzyfikasi_turun($data->ketidaktersediaansarana);
        $sedang_ketidakteraturan = $this->fuzzyfikasi_segitiga($data->ketidaktersediaansarana);
        $berat_ketidakteratuaran= $this->fuzzyfikasi_naik($data->ketidaktersediaansarana);

        Ringan::create([
            'data_id' => $data->id,
            'ketidakteraturan' => $ringan_ketidakteraturan // menambahkan data ke database
        ]);

        Sedang::create([
            'data_id' => $data->id,
            'ketidakteraturan' => $sedang_ketidakteraturan
        ]);

        Berat::create([
            'data_id' => $data->id,
            'ketidakteraturan' => $berat_ketidakteraturan
        ]);

        //return $ringan;
    }
}
