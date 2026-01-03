@extends('components.head')

@section('content')
  @include('components.nav')

  <div class="text-center mt-5">
    <span class="amaranth-bold" style="color: white; font-size: 80px;">Galery<br />Perpustakan Digital UNPAK</span>
  </div>

  <div style="position: absolute; z-index: -99; top: 80px; left: 0; width: 100%; height: 100%;">
    {{-- BACKGROUND --}}
    <div style="
          filter: blur(3px); -webkit-filter: blur(3px);background-image: url('img/cover/perpus1.jpg');
          background-position: center; background-repeat: no-repeat; background-size: cover; width: 100%; height: 100%;">
    </div>

    <div style="position: relative; z-index: 1; width: 100%;top: -25%;">
      <div class="row justify-content-md-center"
        style="position: relative; width: 75%; left: 50%;transform: translate(-50%, 0%);">
        <div class="col-12 col-md-4 mb-4">
          <div class="card position-relative top-50 start-50 translate-middle"
            style="cursor: pointer; box-shadow: 0px 4px 10px #00000010">
            <div class="card-body">
              <img src="img/cover/perpus5.png"
                style="width: 100%; height: 292px; object-fit: cover;">
            </div>
          </div>
        </div>
        <div class="col-12 col-md-4 mb-4">
          <div class="card position-relative top-50 start-50 translate-middle"
            style="cursor: pointer; box-shadow: 0px 4px 10px #00000010">
            <div class="card-body">
              <img src="img/cover/perpus2.png"
                style="width: 100%; height: 292px; object-fit: cover;">
            </div>
          </div>
        </div>
        <div class="col-12 col-md-4 mb-4">
          <div class="card position-relative top-50 start-50 translate-middle"
            style="cursor: pointer; box-shadow: 0px 4px 10px #00000010">
            <div class="card-body">
              <img src="img/cover/perpus3.png"
                style="width: 100%; height: 292px; object-fit: cover;">
            </div>
          </div>
        </div>
      </div>
    </div>

    <div style="position: relative; top: -25%; padding: 90px 98px;">
      <span class="amaranth-bold" style="color: #6499E9; font-size: 32px;">Momen di Perpustakaan</span>

      <img src="img/cover/momen1.webp" class="img-fluid" style="margin-top: 32px; object-fit: cover; width: 100%; max-height: 400px;">
      <img src="img/cover/momen2.webp" class="img-fluid" style="margin-top: 32px; object-fit: cover; width: 100%; max-height: 400px;">
    </div>
  </div>
@endsection