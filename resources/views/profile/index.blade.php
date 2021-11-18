@extends('layouts.template')
@section('content')
<section id="team" class="front-page-section">
    <div class="section-header">
      <div class="container">
        <div class="row">
          <div class="col-sm-12">
            <h3>Profile</h3>
          </div>
          {{-- <div class="col-sm-10 col-sm-offset-1">
            <div class="section-description">Meet the people that are going to take your business to the next level.</div>
          </div> --}}
        </div>
      </div>
    </div>
    <div class="section-content">
      <div class="container">
        <div class="row mt-4">
          <div class="col-sm-12">
            <form action="{{ route('profile.update', auth()->user()->id) }}" method="post">
              @csrf
              @method('PUT')
              <div class="form-group">
                <label for="nama">Nama</label>
                <input type="text" class="form-control" name="nama" id="nama" value="{{ old('nama', $data->name) }}" placeholder="Masukkan nama disini..." required>
              </div>
              <div class="form-group">
                <label for="email">Email</label>
                <input type="email" class="form-control" name="email" id="email" value="{{ old('email', $data->email) }}" placeholder="Masukkan email disini..." required>
              </div>
              <div class="form-group">
                <label for="alamat">Alamat</label>
                <input type="text" class="form-control" name="alamat" id="alamat" value="{{ old('alamat', $data->alamat) }}" placeholder="Masukkan alamat disini..." required>
              </div>
              <div class="form-group">
                <label for="phone">Nomor HP</label>
                <input type="text" class="form-control" name="phone" id="phone" value="{{ old('phone', $data->phone) }}" placeholder="Masukkan nomor hp disini..." required>
              </div>
              <div class="form-group">
                <label for="password">Password</label>
                <input type="password" class="form-control" name="password" id="password" placeholder="Masukkan password disini..." required>
              </div>
              <p>
                <input type="submit" value="Kirim" class="wpcf7-form-control has-spinner wpcf7-submit" />
              </p>
            </form>
          </div>
        </div>
      </div>
    </div>
</section>

@push('js')
  <script>
    /*
        Carousel
    */
    $('#carouselUlasan').on('slide.bs.carousel', function (e) {
      console.log('carousel');
      /*
          CC 2.0 License Iatek LLC 2018 - Attribution required
      */
      var $e = $(e.relatedTarget);
      var idx = $e.index();
      var itemsPerSlide = 3;
      var totalItems = $('.carousel-item').length;

      if (idx >= totalItems-(itemsPerSlide-1)) {
          var it = itemsPerSlide - (totalItems - idx);
          for (var i=0; i<it; i++) {
              // append slides to end
              if (e.direction=="left") {
                console.log('left');
                  $('.carousel-item').eq(i).appendTo('.carousel-inner');
              }
              else {
                console.log('right');
                  $('.carousel-item').eq(0).appendTo('.carousel-inner');
              }
          }
      }
    });
  </script>
@endpush
@endsection