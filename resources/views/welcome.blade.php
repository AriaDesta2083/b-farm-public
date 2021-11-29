@extends('layouts.template')
@section('content')


@if (auth()->user() != null)

<div style="position: fixed; bottom:5%; right:5%; z-index: 1;">
<a href="https://wa.me/{{ $profile->link_wa }}" class="btn btn-lg mb-2 text-light text-nowrap blockquote" style="background-color: #8ccc5b; cursor: pointer;">
      <i class="fa fa-whatsapp"></i>
      Order Whatsapp
    </a>
    <br>
    <a data-toggle="modal" data-target="#loginModal" class="btn btn-lg text-light text-nowrap blockquote" style="background-color: #ee7c5a; cursor: pointer;">
      <i class="fa fa-instagram"></i>
      Order Instagram
    </a>
  </div>
    @else
    <div style="position: fixed; bottom:5%; right:5%; z-index: 1;">
    <a data-toggle="modal" data-target="#loginModal" class="btn btn-lg mb-2 text-light text-nowrap blockquote" style="background-color: #8ccc5b; cursor: pointer;">
      <i class="fa fa-whatsapp"></i>
      Order Whatsapp
    </a>
    <br>
    <a data-toggle="modal" data-target="#loginModal" class="btn btn-lg text-light text-nowrap blockquote" style="background-color: #ee7c5a; cursor: pointer;">
      <i class="fa fa-instagram"></i>
      Order Instagram
    </a>

  </div>
@endif

@include('partials.about')
@include('partials.projects')
@include('partials.services')
@include('partials.latest-news')
@include('partials.counter')
@include('partials.team')
@include('partials.contact-us')
@endsection