@extends('layouts.app')
@section('content')
<div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner">
      <div class="carousel-item active">
          <img src="{{ asset ('images/slide1.jpg')}}" class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item">
          <img src="{{ asset ('images/slide2.jpg')}}" class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item">
          <img src="{{ asset ('images/slide3.jpg')}}" class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item">
          <img src="{{ asset ('images/slide4.jpg')}}" class="d-block w-100" alt="...">
      </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying"
      data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying"
      data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
  </button>
</div>
<div class="cotainer mb-4" style="background-color:  rgb(217, 217, 217); border-radius: 8px;">
  <div class="row g-0 text-center mt-5">
      <div class="col-sm-6 col-md-8 mb-3 mt-3">
          <img src="{{ asset ('images/rs.jpg')}}" class="img-fluid" alt="" style="border-radius: 8px;">
      </div>
      <div class="col-sm-6 col-md-4 mt-4">
          <h1><strong>Mengapa memilih rumah sakit ini?</strong></h1>
          <h3><i>"Karena kebutuhan anda adalah prioritas kami"</i></h3>
          <p>Kami hadir memberikan pelayanan kesehatan terbaik dengan memprioritaskan kebutuhan pasien dan
              keluarga. Dengan
              layanan kesehatan berbasis Value Based Care yang didukung teknologi, edukasi dan riset sehingga
              dapat memberikan
              pengalaman terbaik bagi pasien.</p>
      </div>
  </div>
</div>
<div class="container mb-4" style="max-width: 100%; background-color: rgb(217, 217, 217); border-radius: 8px;">
  <div class="card-group" style="border-radius: 8px;">
      <div class="card mx-3 mt-2 mb-2 border border-0" style="border-radius: 8px;">
          <a href="{{ url('/detail') }}" class="text-decoration-none text-black">
              <img src="{{ asset ('images/dokter/obg-saukani.jpg')}}" class="card-img-top gambar" alt="...">
              <div class="card-body">
                  <div>
                      <h6 class="card-title">dr. Saukani Halim, Sp.OG</h6>
                  </div>
                  <div class="mt-5">
                      <p class="card-text">Spesialis Obgyn</p>
                  </div>
              </div>
          </a>
      </div>
      <div class="card mx-3 mt-2 mb-2 border border-0" style="border-radius: 8px;">
          <a href="" class="text-decoration-none text-black">
              <img src="{{ asset('images/dokter/obg-gde.jpg')}}" class="card-img-top gambar" alt="...">
              <div class="card-body">
                  <div>
                      <h6 class="card-title">dr. Gde Ananta, Sp.OG</h6>
                  </div>
                  <div class="mt-5">
                      <p class="card-text">Spesialis Obgyn</p>
                  </div>
              </div>
          </a>
      </div>
      <div class="card mx-3 mt-2 mb-2 border border-0" style="border-radius: 8px;">
          <a href="" class="text-decoration-none text-black">
              <img src="{{ asset('images/dokter/dr_SYAHNURAL.png')}}" class="card-img-top gambar" alt="...">
              <div class="card-body">
                  <div>
                      <h6 class="card-title">dr. Syahnural Lubis, Sp.OG</h6>
                  </div>
                  <div class="mt-5">
                      <p class="card-text">Spesialis Obgyn</p>
                  </div>
              </div>
          </a>
      </div>
      <div class="card mx-3 mt-2 mb-2 border border-0" style="border-radius: 8px;">
          <a href="" class="text-decoration-none text-black">
              <img src="{{ asset ('images/dokter/obg-manuel.jpg')}}" class="card-img-top gambar" alt="...">
              <div class="card-body">
                  <div>
                      <h6 class="card-title">dr. Manuel Hutapea,Sp.OG.Subsp. Onk</h6>
                  </div>
                  <div class="mt-4">
                      <p class="card-text">Spesialis Obgyn</p>
                  </div>
              </div>
          </a>
      </div>
      <div class="card mx-3 mt-2 mb-2 border border-0" style="border-radius: 8px;">
          <a href="" class="text-decoration-none text-black">
              <img src="{{ asset ('images/dokter/dr_eddy_sutrisno_spog.png')}}" class="card-img-top gambar" alt="...">
              <div class="card-body">
                  <div>
                      <h6 class="card-title">dr. Eddy Sutrisno, Sp.OG</h6>
                  </div>
                  <div class="mt-5">
                      <p class="card-text">Spesialis Obgyn</p>
                  </div>
              </div>
          </a>
      </div>
  </div>
  <div class="mt-3 pb-2" style="display: flex; justify-content: center;">
    <a href="{{url('/dokter_spesialis')}}"><button class="btn" style="background-color: rgb(224, 247, 250);">Lihat Dokter</button></a>
  </div>
</div>    
@endsection