<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <title>Data</title>
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@300&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Cormorant+SC:wght@300&family=Raleway:wght@300&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>

<body>
    <nav>
        <img src="https://kotaku.pu.go.id/content/upload/Media/Pustaka/Material%20Printing%20dan%20Sosialisasi/Logo%20KOTAKU/logo_kotaku_png.png" alt="">
        <ul>
            <li><a href="#">Beranda</a></li>
            <li><a href="#">Tentang</a></li>
            <li><a href="#">Contact</a></li>
        </ul>
        <button>Masuk</button>
    </nav>
    <header>
        <div class="container">
            <div class="row">
                <div class="col">
                    <form action="{{url('/data')}}" method="post">
                        @csrf
                        <div class="mb-3">
                            <label for="RT" class="form-label">RT</label>
                            <input type="text" class="form-control" id="RT" name="RT" placeholder="Masukan RT">
                        </div>
                        <div class="mb-3">
                            <label for="ketidakteraturan" class="form-label">Ketidakteraturan Bangunan</label>
                            <input type="number" min="0" max="100" class="form-control" id="ketidakteraturan" name="ketidakteraturan" placeholder="Masukan persentase ketidakteraturan bangunan">
                        </div>
                        <div class="mb-3">
                            <label for="luaskawasan" class="form-label">luas kawasan tidak sesuai ketentuan</label>
                            <input type="number" min="0" max="100" class="form-control" id="luaskawasan" name="luaskawasan" placeholder="Masukan persentase luas kawasan yang memiliki kepadatan tidak sesuai ketentuan">
                        </div>
                        <div class="mb-3">
                            <label for="persyaratanteknis" class="form-label">bangunan tidak memenuhi persyaratan teknis</label>
                            <input type="number" min="0" max="100" class="form-control" id="persyaratanteknis" name="persyaratanteknis" placeholder="Masukan persentase bangunan yang tidak memenuhi persyaratan teknis">
                        </div>
                        <div class="mb-3">
                            <label for="keterjangkauan" class="form-label">Keterjangkauan jaringan jalan</label>
                            <input type="number" min="0" max="100" class="form-control" id="keterjangkauan" name="keterjangkauan" placeholder="Masukan persentase keterjangkauan jaringan jalan">
                        </div>
                        <div class="mb-3">
                            <label for="kualitaspermukaan" class="form-label">Kualitas permukaan jalan lingkungan</label>
                            <input type="number" min="0" max="100" class="form-control" id="kualitaspermukaan" name="kualitaspermukaan" placeholder="Masukan persentase kualitas permukaan jalan lingkungan">
                        </div>
                        <div class="mb-3">
                            <label for="ketersediaanaksesair" class="form-label">Ketersediaan akses aman air minum</label>
                            <input type="number" min="0" max="100" class="form-control" id="ketersediaanaksesair" name="ketersediaanaksesair" placeholder="Masukan persentase ketersediaan akses aman air minum">
                        </div>
                        <div class="mb-3">
                            <label for="tidakterpenuhinyaair" class="form-label">tidak terpenuhinya akses air minum</label>
                            <input type="number" min="0" max="100" class="form-control" id="tidakterpenuhinyaair" name="tidakterpenuhinyaair" placeholder="Masukan persentase tidak terpenuhinya akses air minum">
                        </div>
                        <div class="mb-3">
                            <label for="ketidakmampuan" class="form-label">Ketidakmampuan mengalirkan limpasan air</label>
                            <input type="number" min="0" max="100" class="form-control" id="ketidakmampuan" name="ketidakmampuan" placeholder="Masukan persentase ketidakmampuan mengalirkan limpasan air">
                        </div>
                        <div class="mb-3">
                            <label for="ketidaktersediaandrainase" class="form-label">Ketidaktersediaan drainase</label>
                            <input type="number" min="0" max="100" class="form-control" id="ketidaktersediaandrainase" name="ketidaktersediaandrainase" placeholder="Masukan persentase ketidaktersediaan drainase">
                        </div>
                        <div class="mb-3">
                            <label for="kualitaskonstruksi" class="form-label">Kualitas konstruksi drainase</label>
                            <input type="number" min="0" max="100" class="form-control" id="kualitaskonstruksi" name="kualitaskonstruksi" placeholder="Masukan persentase kualitas konstruksi drainase">
                        </div>
                        <div class="mb-3">
                            <label for="sistempengolahanair" class="form-label">Sistem pengolahan air tidak sesuai standar teknis</label>
                            <input type="number" min="0" max="100" class="form-control" id="sistempengolahanair" name="sistempengolahanair" placeholder="Masukan persentase Sistem pengolahan air yang tidak sesuai standar teknis">
                        </div>
                        <div class="mb-3">
                            <label for="sapraspengolahanair" class="form-label">Sapras pengolahan air tidak sesuai standar teknis</label>
                            <input type="number" min="0" max="100" class="form-control" id="sapraspengolahanair" name="sapraspengolahanair" placeholder="Masukan persentase Sapras pengolahan air yang tidak sesuai standar teknis">
                        </div>
                        <div class="mb-3">
                            <label for="sapraspersampahan" class="form-label">sapras persampahan yang tidak sesuai persyaratan teknis</label>
                            <input type="number" min="0" max="100" class="form-control" id="sapraspersampahan" name="sapraspersampahan" placeholder="Masukan persentase sapras persampahan yang tidak sesuai persyaratan teknis">
                        </div>
                        <div class="mb-3">
                            <label for="sistempengelolaan" class="form-label">sistem pengelolaan persampahan yang tidak sesuai persyaratan teknis</label>
                            <input type="number" min="0" max="100" class="form-control" id="sistempengelolaan" name="sistempengelolaan" placeholder="Masukan persentase sistem pengelolaan persampahan yang tidak sesuai persyaratan teknis">
                        </div>
                        <div class="mb-3">
                            <label for="ketidaktersediaanprasarana" class="form-label">ketidaktersediaan prasarana proteksi kebakaran</label>
                            <input type="number" min="0" max="100" class="form-control" id="ketidaktersediaanprasarana" name="ketidaktersediaanprasarana" placeholder="Masukan persentase ketidaktersediaan prasarana proteksi kebakaran">
                        </div>
                        <div class="mb-3">
                            <label for="ketidaktersediaansarana" class="form-label">ketidaktersediaan sarana proteksi kebakaran</label>
                            <input type="number" min="0" max="100" class="form-control" id="ketidaktersediaansarana" name="ketidaktersediaansarana" placeholder="Masukan persentase ketidaktersediaan sarana proteksi kebakaran">
                        </div>
                        
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </header>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>

</html>