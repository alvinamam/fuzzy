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
       
        $a = 25; $b = 50; $c = 75;
        if(($x <= $a) || ($x >= $c)){
            $hasil = 0;
            
        }
        elseif(($x >= $a) && ($x <= $b)){
            $hasil = ($x - $a) / ($b - $a);
        }
        elseif(($x >= $b) && ($x <= $c)){
            $hasil = ($c - $x) / (($c - $b));
        }
        return $hasil;
    }
    public function fuzzyfikasi_naik($x)
    {
        $a = 50; $b = 75; 
        if($x <= $a){
            $hasil = 0;
        }
        elseif(($x >= $a) && ($x <= $b)){
            $hasil = ($x - $a) / ($b - $a);
        }
        elseif(($x >= $b)){
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
        $berat_ketidakteraturan= $this->fuzzyfikasi_naik($data->ketidakteraturan);

        $ringan_luaskawasan = $this->fuzzyfikasi_turun($data->luaskawasan);
        $sedang_luaskawasan = $this->fuzzyfikasi_segitiga($data->luaskawasan);
        $berat_luaskawasan= $this->fuzzyfikasi_naik($data->luaskawasan);
        
        $ringan_persyaratanteknis = $this->fuzzyfikasi_turun($data->persyaratanteknis);
        $sedang_persyaratanteknis = $this->fuzzyfikasi_segitiga($data->persyaratanteknis);
        $berat_persyaratanteknis= $this->fuzzyfikasi_naik($data->persyaratanteknis);

        $ringan_keterjangkauan = $this->fuzzyfikasi_turun($data->keterjangkauan);
        $sedang_keterjangkauan = $this->fuzzyfikasi_segitiga($data->keterjangkauan);
        $berat_keterjangkauan= $this->fuzzyfikasi_naik($data->keterjangkauan);

        $ringan_kualitaspermukaan = $this->fuzzyfikasi_turun($data->kualitaspermukaan);
        $sedang_kualitaspermukaan = $this->fuzzyfikasi_segitiga($data->kualitaspermukaan);
        $berat_kualitaspermukaan= $this->fuzzyfikasi_naik($data->kualitaspermukaan);

        $ringan_ketersediaanaksesair = $this->fuzzyfikasi_turun($data->ketersediaanaksesair);
        $sedang_ketersediaanaksesair = $this->fuzzyfikasi_segitiga($data->ketersediaanaksesair);
        $berat_ketersediaanaksesair= $this->fuzzyfikasi_naik($data->ketersediaanaksesair);

        $ringan_tidakterpenuhinyaair = $this->fuzzyfikasi_turun($data->tidakterpenuhinyaair);
        $sedang_tidakterpenuhinyaair = $this->fuzzyfikasi_segitiga($data->tidakterpenuhinyaair);
        $berat_tidakterpenuhinyaair= $this->fuzzyfikasi_naik($data->tidakterpenuhinyaair);

        $ringan_ketidakmampuan = $this->fuzzyfikasi_turun($data->ketidakmampuan);
        $sedang_ketidakmampuan = $this->fuzzyfikasi_segitiga($data->ketidakmampuan);
        $berat_ketidakmampuan= $this->fuzzyfikasi_naik($data->ketidakmampuan);

        $ringan_ketidaktersediaandrainase = $this->fuzzyfikasi_turun($data->ketidaktersediaandrainase);
        $sedang_ketidaktersediaandrainase = $this->fuzzyfikasi_segitiga($data->ketidaktersediaandrainase);
        $berat_ketidaktersediaandrainase= $this->fuzzyfikasi_naik($data->ketidaktersediaandrainase);

        $ringan_kualitaskonstruksi = $this->fuzzyfikasi_turun($data->kualitaskonstruksi);
        $sedang_kualitaskonstruksi = $this->fuzzyfikasi_segitiga($data->kualitaskonstruksi);
        $berat_kualitaskonstruksi= $this->fuzzyfikasi_naik($data->kualitaskonstruksi);

        $ringan_sistempengolahanair = $this->fuzzyfikasi_turun($data->sistempengolahanair);
        $sedang_sistempengolahanair = $this->fuzzyfikasi_segitiga($data->sistempengolahanair);
        $berat_sistempengolahanair= $this->fuzzyfikasi_naik($data->sistempengolahanair);

        $ringan_sapraspengolahanair = $this->fuzzyfikasi_turun($data->sapraspengolahanair);
        $sedang_sapraspengolahanair = $this->fuzzyfikasi_segitiga($data->sapraspengolahanair);
        $berat_sapraspengolahanair= $this->fuzzyfikasi_naik($data->sapraspengolahanair);

        $ringan_sapraspersampahan = $this->fuzzyfikasi_turun($data->sapraspersampahan);
        $sedang_sapraspersampahan = $this->fuzzyfikasi_segitiga($data->sapraspersampahan);
        $berat_sapraspersampahan= $this->fuzzyfikasi_naik($data->sapraspersampahan);

        $ringan_sistempengelolaan = $this->fuzzyfikasi_turun($data->sistempengelolaan);
        $sedang_sistempengelolaan = $this->fuzzyfikasi_segitiga($data->sistempengelolaan);
        $berat_sistempengelolaan= $this->fuzzyfikasi_naik($data->sistempengelolaan);

        $ringan_ketidaktersediaanprasarana = $this->fuzzyfikasi_turun($data->ketidaktersediaanprasarana);
        $sedang_ketidaktersediaanprasarana = $this->fuzzyfikasi_segitiga($data->ketidaktersediaanprasarana);
        $berat_ketidaktersediaanprasarana= $this->fuzzyfikasi_naik($data->ketidaktersediaanprasarana);

        $ringan_ketidaktersediaansarana = $this->fuzzyfikasi_turun($data->ketidaktersediaansarana);
        $sedang_ketidaktersediaansarana = $this->fuzzyfikasi_segitiga($data->ketidaktersediaansarana);
        $berat_ketidaktersediaansarana= $this->fuzzyfikasi_naik($data->ketidaktersediaansarana);

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
    public function main1(Data $data)
    {
        //return $data;
        $ringan_ketidakteraturan = $this->fuzzyfikasi_turun($data->ketidakteraturan); //memasukan data
        $sedang_ketidakteraturan = $this->fuzzyfikasi_segitiga($data->ketidakteraturan);
        $berat_ketidakteraturan= $this->fuzzyfikasi_naik($data->ketidakteraturan);

        $ringan_luaskawasan = $this->fuzzyfikasi_turun($data->luaskawasan);
        $sedang_luaskawasan = $this->fuzzyfikasi_segitiga($data->luaskawasan);
        $berat_luaskawasan= $this->fuzzyfikasi_naik($data->luaskawasan);
        
        $ringan_persyaratanteknis = $this->fuzzyfikasi_turun($data->persyaratanteknis);
        $sedang_persyaratanteknis = $this->fuzzyfikasi_segitiga($data->persyaratanteknis);
        $berat_persyaratanteknis= $this->fuzzyfikasi_naik($data->persyaratanteknis);

        $ringan_keterjangkauan = $this->fuzzyfikasi_turun($data->keterjangkauan);
        $sedang_keterjangkauan = $this->fuzzyfikasi_segitiga($data->keterjangkauan);
        $berat_keterjangkauan= $this->fuzzyfikasi_naik($data->keterjangkauan);

        $ringan_kualitaspermukaan = $this->fuzzyfikasi_turun($data->kualitaspermukaan);
        $sedang_kualitaspermukaan = $this->fuzzyfikasi_segitiga($data->kualitaspermukaan);
        $berat_kualitaspermukaan= $this->fuzzyfikasi_naik($data->kualitaspermukaan);

        $ringan_ketersediaanaksesair = $this->fuzzyfikasi_turun($data->ketersediaanaksesair);
        $sedang_ketersediaanaksesair = $this->fuzzyfikasi_segitiga($data->ketersediaanaksesair);
        $berat_ketersediaanaksesair= $this->fuzzyfikasi_naik($data->ketersediaanaksesair);

        $ringan_tidakterpenuhinyaair = $this->fuzzyfikasi_turun($data->tidakterpenuhinyaair);
        $sedang_tidakterpenuhinyaair = $this->fuzzyfikasi_segitiga($data->tidakterpenuhinyaair);
        $berat_tidakterpenuhinyaair= $this->fuzzyfikasi_naik($data->tidakterpenuhinyaair);

        $ringan_ketidakmampuan = $this->fuzzyfikasi_turun($data->ketidakmampuan);
        $sedang_ketidakmampuan = $this->fuzzyfikasi_segitiga($data->ketidakmampuan);
        $berat_ketidakmampuan= $this->fuzzyfikasi_naik($data->ketidakmampuan);

        $ringan_ketidaktersediaandrainase = $this->fuzzyfikasi_turun($data->ketidaktersediaandrainase);
        $sedang_ketidaktersediaandrainase = $this->fuzzyfikasi_segitiga($data->ketidaktersediaandrainase);
        $berat_ketidaktersediaandrainase= $this->fuzzyfikasi_naik($data->ketidaktersediaandrainase);

        $ringan_kualitaskonstruksi = $this->fuzzyfikasi_turun($data->kualitaskonstruksi);
        $sedang_kualitaskonstruksi = $this->fuzzyfikasi_segitiga($data->kualitaskonstruksi);
        $berat_kualitaskonstruksi= $this->fuzzyfikasi_naik($data->kualitaskonstruksi);

        $ringan_sistempengolahanair = $this->fuzzyfikasi_turun($data->sistempengolahanair);
        $sedang_sistempengolahanair = $this->fuzzyfikasi_segitiga($data->sistempengolahanair);
        $berat_sistempengolahanair= $this->fuzzyfikasi_naik($data->sistempengolahanair);

        $ringan_sapraspengolahanair = $this->fuzzyfikasi_turun($data->sapraspengolahanair);
        $sedang_sapraspengolahanair = $this->fuzzyfikasi_segitiga($data->sapraspengolahanair);
        $berat_sapraspengolahanair= $this->fuzzyfikasi_naik($data->sapraspengolahanair);

        $ringan_sapraspersampahan = $this->fuzzyfikasi_turun($data->sapraspersampahan);
        $sedang_sapraspersampahan = $this->fuzzyfikasi_segitiga($data->sapraspersampahan);
        $berat_sapraspersampahan= $this->fuzzyfikasi_naik($data->sapraspersampahan);

        $ringan_sistempengelolaan = $this->fuzzyfikasi_turun($data->sistempengelolaan);
        $sedang_sistempengelolaan = $this->fuzzyfikasi_segitiga($data->sistempengelolaan);
        $berat_sistempengelolaan= $this->fuzzyfikasi_naik($data->sistempengelolaan);

        $ringan_ketidaktersediaanprasarana = $this->fuzzyfikasi_turun($data->ketidaktersediaanprasarana);
        $sedang_ketidaktersediaanprasarana = $this->fuzzyfikasi_segitiga($data->ketidaktersediaanprasarana);
        $berat_ketidaktersediaanprasarana= $this->fuzzyfikasi_naik($data->ketidaktersediaanprasarana);

        $ringan_ketidaktersediaansarana = $this->fuzzyfikasi_turun($data->ketidaktersediaansarana);
        $sedang_ketidaktersediaansarana = $this->fuzzyfikasi_segitiga($data->ketidaktersediaansarana);
        $berat_ketidaktersediaansarana= $this->fuzzyfikasi_naik($data->ketidaktersediaansarana);

        Ringan::create([
            'data_id' => $data->id,
            'ketidakteraturan' => $ringan_ketidakteraturan ,
            'luaskawasan' => $ringan_luaskawasan,
            'persyaratanteknis' => $ringan_persyaratanteknis,
            'keterjangkauan' => $ringan_keterjangkauan,
            'kualitaspermukaan' => $ringan_kualitaspermukaan,
            'ketersediaanaksesair' => $ringan_ketersediaanaksesair,
            'tidakterpenuhinyaair' => $ringan_tidakterpenuhinyaair,
            'ketidakmampuan' => $ringan_ketidakmampuan,
            'ketidaktersediaandrainase' => $ringan_ketidaktersediaandrainase,
            'kualitaskonstruksi' => $ringan_kualitaskonstruksi,
            'sistempengolahanair' => $ringan_sistempengolahanair,
            'sapraspengolahanair' => $ringan_sapraspengolahanair,
            'sapraspersampahan' => $ringan_sapraspersampahan,
            'sistempengelolaan' => $ringan_sistempengelolaan,
            'ketidaktersediaanprasarana' => $ringan_ketidaktersediaanprasarana,
            'ketidaktersediaansarana' => $ringan_ketidaktersediaansarana,
        ]);

        Sedang::create([
            'data_id' => $data->id,
            'ketidakteraturan' => $sedang_ketidakteraturan,
            'luaskawasan' => $sedang_luaskawasan,
            'persyaratanteknis' => $sedang_persyaratanteknis,
            'keterjangkauan' => $sedang_keterjangkauan,
            'kualitaspermukaan' => $sedang_kualitaspermukaan,
            'ketersediaanaksesair' => $sedang_ketersediaanaksesair,
            'tidakterpenuhinyaair' => $sedang_tidakterpenuhinyaair,
            'ketidakmampuan' => $sedang_ketidakmampuan,
            'ketidaktersediaandrainase' => $sedang_ketidaktersediaandrainase,
            'kualitaskonstruksi' => $sedang_kualitaskonstruksi,
            'sistempengolahanair' => $sedang_sistempengolahanair,
            'sapraspengolahanair' => $sedang_sapraspengolahanair,
            'sapraspersampahan' => $sedang_sapraspersampahan,
            'sistempengelolaan' => $sedang_sistempengelolaan,
            'ketidaktersediaanprasarana' => $sedang_ketidaktersediaanprasarana,
            'ketidaktersediaansarana' => $sedang_ketidaktersediaansarana,
        ]);

$rata = ($berat_ketidakteraturan + $berat_luaskawasan + $berat_persyaratanteknis + $berat_keterjangkauan + $berat_kualitaspermukaan + $berat_ketersediaanaksesair + $berat_tidakterpenuhinyaair + $berat_ketidakmampuan + $berat_ketidaktersediaandrainase + $berat_kualitaskonstruksi + $berat_sistempengolahanair + $berat_sapraspengolahanair + $berat_sapraspersampahan + $berat_sistempengelolaan + $berat_ketidaktersediaanprasarana + $berat_ketidaktersediaansarana) / 16;

        Berat::create([
            'data_id' => $data->id,
            'ketidakteraturan' => $berat_ketidakteraturan,
            'luaskawasan' => $berat_luaskawasan,
            'persyaratanteknis' => $berat_persyaratanteknis,
            'keterjangkauan' => $berat_keterjangkauan,
            'kualitaspermukaan' => $berat_kualitaspermukaan,
            'ketersediaanaksesair' => $berat_ketersediaanaksesair,
            'tidakterpenuhinyaair' => $berat_tidakterpenuhinyaair,
            'ketidakmampuan' => $berat_ketidakmampuan,
            'ketidaktersediaandrainase' => $berat_ketidaktersediaandrainase,
            'kualitaskonstruksi' => $berat_kualitaskonstruksi,
            'sistempengolahanair' => $berat_sistempengolahanair,
            'sapraspengolahanair' => $berat_sapraspengolahanair,
            'sapraspersampahan' => $berat_sapraspersampahan,
            'sistempengelolaan' => $berat_sistempengelolaan,
            'ketidaktersediaanprasarana' => $berat_ketidaktersediaanprasarana,
            'ketidaktersediaansarana' => $berat_ketidaktersediaansarana,
            'rata' => $rata
        ]);
        return redirect()->back();
    }
    public function indexHasil()
    {
        $ringan = Ringan::all();
        $sedang = Sedang::all();
        $berat= berat::all();

        return view('data.show', compact('ringan', 'sedang', 'berat'));
    }
    public function indexQuery()
    {
        $berat = Berat::orderBy('rata', 'desc')->get();
        return view('data/query', compact('berat'));
    }
}
