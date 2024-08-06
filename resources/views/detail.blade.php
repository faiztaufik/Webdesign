@extends('layouts.app')
@section('content')
<div class="container" style="margin-top: 80px; margin-bottom: 80px">
    <div class="row">
        <div class="col-md-4">
            <div class="card">
                <img src="images/dokter/obg-saukani.jpg" class="card-img-top" alt="Dr. Saukani Halim">
                <div class="card-body">
                    <h5 class="card-title">Dr. Saukani Halim, Sp.OG</h5>
                    <p class="card-text">Spesialis Obgyn</p>
                    <a href="https://wa.me/+6285249922000" class="btn btn-primary">Contact</a>
                </div>
                <div class="card-footer">
                    <div class="row">
                        <div class="col-md-7">
                            <i class="fas fa-phone-alt"></i> (0561) 581818
                        </div>
                        <div class="col-md-7">
                            <i class="fas fa-envelope"></i> rsabk.ptk@gmail.com
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <h3>Jadwal Praktek</h3>
                </div>
                <div class="card-body">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>Hari</th>
                                <th>Jam Praktek</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Senin</td>
                                <td>10.00-12.00 & 19.00-21.00</td>
                            </tr>
                            <tr>
                                <td>Selasa</td>
                                <td>12.00-14.00 & 19.00-21.00</td>
                            </tr>
                            <tr>
                                <td>Rabu</td>
                                <td>10.00-12.00 & 19.00-21.00</td>
                            </tr>
                            <tr>
                                <td>Kamis</td>
                                <td>10.00-12.00 & 19.00-21.00</td>
                            </tr>
                            <tr>
                                <td>Jum'at</td>
                                <td>19.00-21.00</td>
                            </tr>
                            <tr>
                                <td>Sabtu</td>
                                <td>10.00-12.00</td>
                            </tr>
                            <tr>
                                <td>Minggu</td>
                                <td>-</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection