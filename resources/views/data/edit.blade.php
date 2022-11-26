@extends('layout.master')
@section('title')
    Data - Edit
@endsection
@section('content')
<div class="container">
        <div class="row">
                <form id="editdata" action="{{url('/data/'.$data->id)}}" method="post">
                    @csrf
                    @method('put')
                    <div class="row">
                        <div class="col">
                            <label for="RT" class="form-label">RT</label>
                            <input type="text" class="form-control @error('RT') is-invalid @enderror" id="RT" name="RT" placeholder="Masukan RT" value="{{ $data->RT }}">
                        </div>
                    </div>
                      
                    <div class="row">
                        <div class="col">
                            <label for="ketidakteraturan" class="form-label">Ketidakteraturan Bangunan</label>
                            <input type="number" min="0" max="100" class="form-control @error('ketidakteraturan') is-invalid @enderror" id="ketidakteraturan" name="ketidakteraturan" placeholder="Masukan persentase ketidakteraturan bangunan" value="{{ $data->ketidakteraturan }}">
                        </div>
                        <div class="col">
                            <label for="luaskawasan" class="form-label">luas kawasan tidak sesuai ketentuan</label>
                            <input type="number" min="0" max="100" class="form-control @error('ketidakteraturan') is-invalid @enderror" id="luaskawasan" name="luaskawasan" placeholder="Masukan persentase luas kawasan yang memiliki kepadatan tidak sesuai ketentuan" value="{{ $data->luaskawasan }}">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <label for="persyaratanteknis" class="form-label">bangunan tidak memenuhi persyaratan teknis</label>
                            <input type="number" min="0" max="100" class="form-control @error('ketidakteraturan') is-invalid @enderror" id="persyaratanteknis" name="persyaratanteknis" placeholder="Masukan persentase bangunan yang tidak memenuhi persyaratan teknis" value="{{ $data->persyaratanteknis }}">
                        </div>
                        <div class="col">
                            <label for="keterjangkauan" class="form-label">Keterjangkauan jaringan jalan</label>
                            <input type="number" min="0" max="100" class="form-control @error('ketidakteraturan') is-invalid @enderror" id="keterjangkauan" name="keterjangkauan" placeholder="Masukan persentase keterjangkauan jaringan jalan" value="{{ $data->keterjangkauan }}">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <label for="kualitaspermukaan" class="form-label">Kualitas permukaan jalan lingkungan</label>
                            <input type="number" min="0" max="100" class="form-control @error('ketidakteraturan') is-invalid @enderror" id="kualitaspermukaan" name="kualitaspermukaan" placeholder="Masukan persentase kualitas permukaan jalan lingkungan" value="{{ $data->kualitaspermukaan }}">
                        </div>
                        <div class="col">
                            <label for="ketersediaanaksesair" class="form-label">Ketersediaan akses aman air minum</label>
                            <input type="number" min="0" max="100" class="form-control @error('ketidakteraturan') is-invalid @enderror" id="ketersediaanaksesair" name="ketersediaanaksesair" placeholder="Masukan persentase ketersediaan akses aman air minum" value="{{ $data->ketersediaanaksesair }}">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <label for="tidakterpenuhinyaair" class="form-label">tidak terpenuhinya akses air minum</label>
                            <input type="number" min="0" max="100" class="form-control @error('ketidakteraturan') is-invalid @enderror" id="tidakterpenuhinyaair" name="tidakterpenuhinyaair" placeholder="Masukan persentase tidak terpenuhinya akses air minum" value="{{ $data->tidakterpenuhinyaair }}">
                        </div>
                        <div class="col">
                            <label for="ketidakmampuan" class="form-label">Ketidakmampuan mengalirkan limpasan air</label>
                            <input type="number" min="0" max="100" class="form-control @error('ketidakteraturan') is-invalid @enderror" id="ketidakmampuan" name="ketidakmampuan" placeholder="Masukan persentase ketidakmampuan mengalirkan limpasan air" value="{{ $data->ketidakmampuan }}">
                        </div>
                    </div>
                   <div class="row">
                        <div class="col">
                            <label for="ketidaktersediaandrainase" class="form-label">Ketidaktersediaan drainase</label>
                            <input type="number" min="0" max="100" class="form-control @error('ketidakteraturan') is-invalid @enderror" id="ketidaktersediaandrainase" name="ketidaktersediaandrainase" placeholder="Masukan persentase ketidaktersediaan drainase" value="{{ $data->ketidaktersediaandrainase }}">
                        </div>
                        <div class="col">
                            <label for="kualitaskonstruksi" class="form-label">Kualitas konstruksi drainase</label>
                            <input type="number" min="0" max="100" class="form-control @error('ketidakteraturan') is-invalid @enderror" id="kualitaskonstruksi" name="kualitaskonstruksi" placeholder="Masukan persentase kualitas konstruksi drainase" value="{{ $data->kualitaskonstruksi }}">
                        </div>
                   </div>
                   <div class="row">
                        <div class="col">
                            <label for="sistempengolahanair" class="form-label">Sistem pengolahan air tidak sesuai standar teknis</label>
                            <input type="number" min="0" max="100" class="form-control @error('ketidakteraturan') is-invalid @enderror" id="sistempengolahanair" name="sistempengolahanair" placeholder="Masukan persentase Sistem pengolahan air yang tidak sesuai standar teknis" value="{{ $data->sistempengolahanair }}">
                        </div>
                        <div class="col">
                            <label for="sapraspengolahanair" class="form-label">Sapras pengolahan air tidak sesuai standar teknis</label>
                            <input type="number" min="0" max="100" class="form-control @error('ketidakteraturan') is-invalid @enderror" id="sapraspengolahanair" name="sapraspengolahanair" placeholder="Masukan persentase Sapras pengolahan air yang tidak sesuai standar teknis" value="{{ $data->sapraspengolahanair }}">
                        </div>
                   </div>
                   <div class="row">
                       <div class="col">
                            <label for="sapraspersampahan" class="form-label">sapras persampahan yang tidak sesuai persyaratan teknis</label>
                            <input type="number" min="0" max="100" class="form-control @error('ketidakteraturan') is-invalid @enderror" id="sapraspersampahan" name="sapraspersampahan" placeholder="Masukan persentase sapras persampahan yang tidak sesuai persyaratan teknis" value="{{ $data->sapraspersampahan }}">
                    </div>
                    <div class="col">
                            <label for="sistempengelolaan" class="form-label">sistem pengelolaan persampahan yang tidak sesuai persyaratan teknis</label>
                            <input type="number" min="0" max="100" class="form-control @error('ketidakteraturan') is-invalid @enderror" id="sistempengelolaan" name="sistempengelolaan" placeholder="Masukan persentase sistem pengelolaan persampahan yang tidak sesuai persyaratan teknis" value="{{ $data->sistempengelolaan }}">
                    </div>
                   </div>
                   <div class="row">
                    <div class="col">
                        <label for="ketidaktersediaanprasarana" class="form-label">ketidaktersediaan prasarana proteksi kebakaran</label>
                        <input type="number" min="0" max="100" class="form-control @error('ketidakteraturan') is-invalid @enderror" id="ketidaktersediaanprasarana" name="ketidaktersediaanprasarana" placeholder="Masukan persentase ketidaktersediaan prasarana proteksi kebakaran" value="{{ $data->ketidaktersediaanprasarana }}">
                    </div>
                    <div class="col">
                        <label for="ketidaktersediaansarana" class="form-label">ketidaktersediaan sarana proteksi kebakaran</label>
                        <input type="number" min="0" max="100" class="form-control @error('ketidakteraturan') is-invalid @enderror" id="ketidaktersediaansarana" name="ketidaktersediaansarana" placeholder="Masukan persentase ketidaktersediaan sarana proteksi kebakaran" value="{{ $data->ketidaktersediaansarana }}">
                    </div>
                   </div>
                    <div class="row">
                        <div class="col mt-2">
                            <button type="submit" class="btn btn-primary">edit</button>
                        </div>
                    </div>
                    
                    
                   
                </form>
            </div>
        </div>
    </div>
@endsection