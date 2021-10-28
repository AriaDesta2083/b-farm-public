@extends('layouts.template')
@section('content')
@foreach ($rekomendasi as $item)
<div class="hero">
    <div class="row border border-success rounded bg-primary">
        <div class="col">
        </div>
        <div class="col-5 align-self-center text-start">
            <h4 class="text-light"> {{ $item->judul_menu }} </h4>
        </div>
        <div class="col-4  align-self-center">
            <img src="{{ asset($item->gambar) }}" alt="{{ $item->Judul_menu }}" class="rounded img-fluid" width="200px" height="100px">
        </div>
    </div>
</div>    
@endforeach
@endsection
