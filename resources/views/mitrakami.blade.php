@extends('layouts.app')
@section('content')
<div class="row" style="padding-top: 80px">
    <div class="text-center" style="margin-bottom: 30px;">
        <h2 style="color: #392c92; font-family: 'Poppins', sans-serif; font-size: 40px;">
            Mitra Kerja Kami
        </h2>
        <hr style="border: 1px solid rgb(0, 4, 255); width: 10%; margin: 15px auto 0;">
    </div>
    @foreach(range(1, 44) as $number)
    <div class="col-sm-3">
        <div class="img-box">
            <img src="{{ asset("images/image copy {$number}.png") }}" class="img-responsive center" alt="">
        </div>
    </div>
    @endforeach
</div>
@endsection