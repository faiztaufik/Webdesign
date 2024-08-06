    <nav class="navbar navbar-expand-lg fixed-top" style="background-color: #007BFF;">
        <div class="container-fluid">
            <img src="{{ asset('images/logo.png') }}" alt="">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo02"
                aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0" style=" width: 70%;justify-content: space-between;">
                    <li class="nav-item">
                        <a class="nav-link poter" href="/">Beranda</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle poter" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            Fasilitas & Pelayanan
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="{{ url('/rawat_inap')}}">Rawat Inap</a></li>
                            <li><a class="dropdown-item" href="{{ url('/rawat_jalan ')}}">Rawat Jalan</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle poter" href="#" data-bs-toggle="dropdown"
                            aria-expanded="false">Jadwal</a>
                        <ul class="dropdown-menu" style="overflow: hidden;">
                            <li><a href="{{ url('/dokter_umum')}}" class="dropdown-item">Dokter Umum</a></li>
                            <li><a href="{{ url('/dokter_spesialis')}}" class="dropdown-item">Dokter Spesialis</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link poter" href="{{ url('/mitrakami') }}">Mitra Kami</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link poter" href="{{ url('/reservasi') }}">Reservasi</a>
                    </li>
                </ul>
                <form class="d-flex mt-2" role="search">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-light" type="submit">Search</button>
                </form>
            </div>
        </div>
    </nav>                     