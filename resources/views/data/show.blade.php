@extends('layout.master')
@section('title')
    Hasil - Fuzzyfikasi
@endsection
@section('content')
<div class="container">
    <div class="row">
        <div class="col">
            <a href=" {{ URL::previous() }}" class="btn btn-danger">Kembali</a>
            <a href=" {{ url('/query') }}" class="btn btn-info">Query</a>
            </div>
    </div>
    <div class="row">
        <h3 style="color: white">Fuzzyfikasi Ringan</h3>
        <div class="col">
            <div class="table-responsive">
                <table class="table">
                    <thead class="table-light">
                     <th>No</th>
                        <th>RT</th>
                        <th>Ketidakteraturan</th>
                        <th>LuasKawasan</th>
                        <th>persyaratanteknis</th>
                        <th>keterjangkauan</th>
                        <th>kualitaspermukaan</th>
                        <th>ketersediaanaksesair</th>
                        <th>tidakterpenuhinyaair</th>
                        <th>ketidakmampuan</th>
                        <th>ketidaktersediaandrainase</th>
                        <th>kualitaskonstruksi</th>
                        <th>sistempengolahanair</th>
                        <th>sapraspengolahanair</th>
                        <th>sapraspersampahan</th>
                        <th>sistempengelolaan</th>
                        <th>ketidaktersediaanprasarana</th>
                        <th>ketidaktersediaansarana</th>
                        
                    </thead>
                    <tbody class="table-light">
                        @foreach ($ringan as $data)
                        
                        <tr>
                            <td>{{$loop->iteration}}</td>
                            <td>{{$data->data->RT}}</td> 
                            <td>{{$data->ketidakteraturan}}</td>
                            <td>{{$data->luaskawasan}}</td>
                            <td>{{$data->persyaratanteknis}}</td>
                            <td>{{$data->keterjangkauan}}</td>
                            <td>{{$data->kualitaspermukaan}}</td>
                            <td>{{$data->ketersediaanaksesair}}</td>
                            <td>{{$data->tidakterpenuhinyaair}}</td>
                            <td>{{$data->ketidakmampuan}}</td>
                            <td>{{$data->ketidaktersediaandrainase}}</td>
                            <td>{{$data->kualitaskonstruksi}}</td>
                            <td>{{$data->sistempengolahanair}}</td>
                            <td>{{$data->sapraspengolahanair}}</td>
                            <td>{{$data->sapraspersampahan}}</td>
                            <td>{{$data->sistempengelolaan}}</td>
                            <td>{{$data->ketidaktersediaanprasarana}}</td>
                            <td>{{$data->ketidaktersediaansarana}}</td>
                            <td>
                                
                                
                            </td>

                        </tr>
            @endforeach
                    </tbody>
                </table>
            </div>
       
        </div>
    </div>
    <div class="row">
        <h3 style="color : white">Fuzzyfikasi sedang</h3>
        <div class="col">
            <div class="table-responsive">
                <table class="table">
                    <thead class="table-light">
                     <th>No</th>
                        <th>RT</th>
                        <th>Ketidakteraturan</th>
                        <th>LuasKawasan</th>
                        <th>persyaratanteknis</th>
                        <th>keterjangkauan</th>
                        <th>kualitaspermukaan</th> 
                        <th>ketersediaanaksesair</th>
                        <th>tidakterpenuhinyaair</th>
                        <th>ketidakmampuan</th>
                        <th>ketidaktersediaandrainase</th>
                        <th>kualitaskonstruksi</th>
                        <th>sistempengolahanair</th>
                        <th>sapraspengolahanair</th>
                        <th>sapraspersampahan</th>
                        <th>sistempengelolaan</th>
                        <th>ketidaktersediaanprasarana</th>
                        <th>ketidaktersediaansarana</th>
                        
                    </thead>
                    <tbody class="table-light">
                        @foreach ($sedang as $data)
                        
                        <tr>
                            <td>{{$loop->iteration}}</td>
                            <td>{{$data->data->RT}}</td> 
                            <td>{{$data->ketidakteraturan}}</td>
                            <td>{{$data->luaskawasan}}</td>
                            <td>{{$data->persyaratanteknis}}</td>
                            <td>{{$data->keterjangkauan}}</td>
                            <td>{{$data->kualitaspermukaan}}</td>
                            <td>{{$data->ketersediaanaksesair}}</td>
                            <td>{{$data->tidakterpenuhinyaair}}</td>
                            <td>{{$data->ketidakmampuan}}</td>
                            <td>{{$data->ketidaktersediaandrainase}}</td>
                            <td>{{$data->kualitaskonstruksi}}</td>
                            <td>{{$data->sistempengolahanair}}</td>
                            <td>{{$data->sapraspengolahanair}}</td>
                            <td>{{$data->sapraspersampahan}}</td>
                            <td>{{$data->sistempengelolaan}}</td>
                            <td>{{$data->ketidaktersediaanprasarana}}</td>
                            <td>{{$data->ketidaktersediaansarana}}</td>
                            <td>
                                
                               
                            </td>

                        </tr>
                     @endforeach
                    </tbody>
                </table>
            </div>
       
        </div>
    </div>
    <div class="row">
        <h3 style="color : white">Fuzzyfikasi berat</h3>
        <div class="col">
            <div class="table-responsive">
                <table class="table">
                    <thead class="table-light">
                     <th>No</th>
                        <th>RT</th>
                        <th>Rata-Rata</th>
                        <th>Ketidakteraturan</th>
                        <th>LuasKawasan</th>
                        <th>persyaratanteknis</th>
                        <th>keterjangkauan</th>
                        <th>kualitaspermukaan</th>
                        <th>ketersediaanaksesair</th>
                        <th>tidakterpenuhinyaair</th>
                        <th>ketidakmampuan</th>
                        <th>ketidaktersediaandrainase</th>
                        <th>kualitaskonstruksi</th>
                        <th>sistempengolahanair</th>
                        <th>sapraspengolahanair</th>
                        <th>sapraspersampahan</th>
                        <th>sistempengelolaan</th>
                        <th>ketidaktersediaanprasarana</th>
                        <th>ketidaktersediaansarana</th>
                        
                    </thead>
                    <tbody class="table-light">
                        @foreach ($berat as $data)
                        
                        <tr>
                            <td>{{$loop->iteration}}</td>
                            <td>{{$data->data->RT}}</td> 
                            <td>{{$data->rata}}</td>
                            <td>{{$data->ketidakteraturan}}</td>
                            <td>{{$data->luaskawasan}}</td>
                            <td>{{$data->persyaratanteknis}}</td>
                            <td>{{$data->keterjangkauan}}</td>
                            <td>{{$data->kualitaspermukaan}}</td>
                            <td>{{$data->ketersediaanaksesair}}</td>
                            <td>{{$data->tidakterpenuhinyaair}}</td>
                            <td>{{$data->ketidakmampuan}}</td>
                            <td>{{$data->ketidaktersediaandrainase}}</td>
                            <td>{{$data->kualitaskonstruksi}}</td>
                            <td>{{$data->sistempengolahanair}}</td>
                            <td>{{$data->sapraspengolahanair}}</td>
                            <td>{{$data->sapraspersampahan}}</td>
                            <td>{{$data->sistempengelolaan}}</td>
                            <td>{{$data->ketidaktersediaanprasarana}}</td>
                            <td>{{$data->ketidaktersediaansarana}}</td>
                            <td>
                                
                               
                            </td>

                        </tr>
                     @endforeach
                    </tbody>
                </table>
            </div>
       
        </div>
    </div>
</div>

@endsection