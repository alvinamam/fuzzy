@extends('layout.master')
@section('title')
    Data - Create
@endsection
@section('content')
    <div class="container">
        <div class="row">
                <form id="inputdata" action="{{url('/data')}}" method="post">
                    @csrf
                    <div class="row">
                        <div class="col">
                            <label for="RT" class="form-label">RT</label>
                            <input type="text" class="form-control @error('RT') is-invalid @enderror" id="RT" name="RT" placeholder="Masukan RT" >
                        </div>
                    </div>
                       
                    <div class="row">
                        <div class="col">
                            <label style= "color:white" for="ketidakteraturan" class="form-label">Ketidakteraturan Bangunan</label>
                            <input type="number" min="0" max="100" class="form-control @error('ketidakteraturan') is-invalid @enderror" id="ketidakteraturan" name="ketidakteraturan" placeholder="Masukan persentase ketidakteraturan bangunan">
                        </div>
                        <div class="col">
                            <label style= "color:white" for="luaskawasan" class="form-label">luas kawasan tidak sesuai ketentuan</label>
                            <input type="number" min="0" max="100" class="form-control @error('ketidakteraturan') is-invalid @enderror" id="luaskawasan" name="luaskawasan" placeholder="Masukan persentase luas kawasan yang memiliki kepadatan tidak sesuai ketentuan">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <label style= "color:white" for="persyaratanteknis" class="form-label">bangunan tidak memenuhi persyaratan teknis</label>
                            <input type="number" min="0" max="100" class="form-control @error('ketidakteraturan') is-invalid @enderror" id="persyaratanteknis" name="persyaratanteknis" placeholder="Masukan persentase bangunan yang tidak memenuhi persyaratan teknis">
                        </div>
                        <div class="col">
                            <label style= "color:white" for="keterjangkauan" class="form-label">Keterjangkauan jaringan jalan</label>
                            <input type="number" min="0" max="100" class="form-control @error('ketidakteraturan') is-invalid @enderror" id="keterjangkauan" name="keterjangkauan" placeholder="Masukan persentase keterjangkauan jaringan jalan">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <label style= "color:white" for="kualitaspermukaan" class="form-label">Kualitas permukaan jalan lingkungan</label>
                            <input type="number" min="0" max="100" class="form-control @error('ketidakteraturan') is-invalid @enderror" id="kualitaspermukaan" name="kualitaspermukaan" placeholder="Masukan persentase kualitas permukaan jalan lingkungan">
                        </div>
                        <div class="col">
                            <label style= "color:white" for="ketersediaanaksesair" class="form-label">Ketersediaan akses aman air minum</label>
                            <input type="number" min="0" max="100" class="form-control @error('ketidakteraturan') is-invalid @enderror" id="ketersediaanaksesair" name="ketersediaanaksesair" placeholder="Masukan persentase ketersediaan akses aman air minum">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <label style= "color:white" for="tidakterpenuhinyaair" class="form-label">tidak terpenuhinya akses air minum</label>
                            <input type="number" min="0" max="100" class="form-control @error('ketidakteraturan') is-invalid @enderror" id="tidakterpenuhinyaair" name="tidakterpenuhinyaair" placeholder="Masukan persentase tidak terpenuhinya akses air minum">
                        </div>
                        <div class="col">
                            <label style= "color:white" for="ketidakmampuan" class="form-label">Ketidakmampuan mengalirkan limpasan air</label>
                            <input type="number" min="0" max="100" class="form-control @error('ketidakteraturan') is-invalid @enderror" id="ketidakmampuan" name="ketidakmampuan" placeholder="Masukan persentase ketidakmampuan mengalirkan limpasan air">
                        </div>
                    </div>
                   <div class="row">
                        <div class="col">
                            <label style= "color:white" for="ketidaktersediaandrainase" class="form-label">Ketidaktersediaan drainase</label>
                            <input type="number" min="0" max="100" class="form-control @error('ketidakteraturan') is-invalid @enderror" id="ketidaktersediaandrainase" name="ketidaktersediaandrainase" placeholder="Masukan persentase ketidaktersediaan drainase">
                        </div>
                        <div class="col">
                            <label style= "color:white" for="kualitaskonstruksi" class="form-label">Kualitas konstruksi drainase</label>
                            <input type="number" min="0" max="100" class="form-control @error('ketidakteraturan') is-invalid @enderror" id="kualitaskonstruksi" name="kualitaskonstruksi" placeholder="Masukan persentase kualitas konstruksi drainase">
                        </div>
                   </div>
                   <div class="row">
                        <div class="col">
                            <label style= "color:white" for="sistempengolahanair" class="form-label">Sistem pengolahan air tidak sesuai standar teknis</label>
                            <input type="number" min="0" max="100" class="form-control @error('ketidakteraturan') is-invalid @enderror" id="sistempengolahanair" name="sistempengolahanair" placeholder="Masukan persentase Sistem pengolahan air yang tidak sesuai standar teknis">
                        </div>
                        <div class="col">
                            <label style= "color:white" for="sapraspengolahanair" class="form-label">Sapras pengolahan air tidak sesuai standar teknis</label>
                            <input type="number" min="0" max="100" class="form-control @error('ketidakteraturan') is-invalid @enderror" id="sapraspengolahanair" name="sapraspengolahanair" placeholder="Masukan persentase Sapras pengolahan air yang tidak sesuai standar teknis">
                        </div>
                   </div>
                   <div class="row">
                       <div class="col">
                            <label style= "color:white" for="sapraspersampahan" class="form-label">sapras persampahan yang tidak sesuai persyaratan teknis</label>
                            <input type="number" min="0" max="100" class="form-control @error('ketidakteraturan') is-invalid @enderror" id="sapraspersampahan" name="sapraspersampahan" placeholder="Masukan persentase sapras persampahan yang tidak sesuai persyaratan teknis">
                    </div>
                    <div class="col">
                            <label style= "color:white" for="sistempengelolaan" class="form-label">sistem pengelolaan persampahan yang tidak sesuai persyaratan teknis</label>
                            <input type="number" min="0" max="100" class="form-control @error('ketidakteraturan') is-invalid @enderror" id="sistempengelolaan" name="sistempengelolaan" placeholder="Masukan persentase sistem pengelolaan persampahan yang tidak sesuai persyaratan teknis">
                    </div>
                   </div>
                   <div class="row">
                    <div class="col">
                        <label style= "color:white" for="ketidaktersediaanprasarana" class="form-label">ketidaktersediaan prasarana proteksi kebakaran</label>
                        <input type="number" min="0" max="100" class="form-control @error('ketidakteraturan') is-invalid @enderror" id="ketidaktersediaanprasarana" name="ketidaktersediaanprasarana" placeholder="Masukan persentase ketidaktersediaan prasarana proteksi kebakaran">
                    </div>
                    <div class="col">
                        <label style= "color:white" for="ketidaktersediaansarana" class="form-label">ketidaktersediaan sarana proteksi kebakaran</label>
                        <input type="number" min="0" max="100" class="form-control @error('ketidakteraturan') is-invalid @enderror" id="ketidaktersediaansarana" name="ketidaktersediaansarana" placeholder="Masukan persentase ketidaktersediaan sarana proteksi kebakaran">
                    </div>
                   </div>
                    <div class="row">
                        <div class="col mt-2">
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </div>
                    
                    
                   
                </form>
            </div>
        </div>
    </div>
@endsection