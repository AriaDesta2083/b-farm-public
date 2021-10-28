@extends('layouts.template')
@section('content')
<div class="hero" style="background-image: url({{ asset('assets/images/bg_selada.jpg') }});"></div>
<div>
    <center class="my-4">
        <h2>Detail Rekomendasi Menu</h2>
    </center>
    <br>
    <div class="row mx-4">
        <div class="col-2"></div>
        <div class="col-4">
            <img src="{{ 'http://127.0.0.1:8000/'.$response->data->gambar }}" alt="{{ $response->data->judul_menu }}" class="rounded img-fluid" width="300px" height="200px">
            <br><br>
            <h2>{{ $response->data->judul_menu }}</h2>
            <p class="text-dark">Bahan-bahan :</p>
            {{ $response->data->bahan }}
        </div>
        <div class="col-4 border border-success rounded">
            Bahan-bahan :
            <br>    
            {{ $response->data->langkah }}
        </div>
        <div class="col-2"></div>
    </div>
</div>    
@endsection
