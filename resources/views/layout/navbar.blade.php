<nav>
        <img src="https://img.icons8.com/external-photo3ideastudio-flat-photo3ideastudio/2x/external-building-public-service-photo3ideastudio-flat-photo3ideastudio.png" alt="">
        <ul>
            <li><a href="{{ url('beranda') }}">Beranda</a></li>
            <li><a href="{{ url('data') }}">Data</a></li>
            <li><a href="{{ url('kontak')}}">Kontak</a></li>
            <li><a href="{{ url('tentang')}}">Tentang</a></li>
            @if (Auth::user())
                <a type="button" href="{{ url('/logout') }}" class="btn btn-warning">Keluar</a>
            @endif
        </ul>
            
            
    </nav>