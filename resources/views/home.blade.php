@extends('layouts.main')
@section('container')
    


<main class="px-3">
  <h2 class="mb-3 text-center">Beranda</h2>
  <div class="card mb-3"> 
    <img src="https://source.unsplash.com/1200x400/?pencil" alt="pencil" class="img-fluid">
    <div class="card-body text-center">
      <h3 class="card-title"><a href="/" class="text-decoration-none text-dark">judul</a></h3>
      <p>
        <small>
          By: <a href="/" class="text-decoration-none">nana</a> in <a href="/" class="text-decoration-none">kategori</a> dibuat 2 menit yg lalu
        </small>
      </p>
      <p class="card-text">excerpt</p>
      <a href="/" class="text-decoration-none btn btn-primary">Baca selengkapnya</a>
    </div>
  </div>
  <div class="container">
    <div class="row">
      <div class="col-md-4 mb-3">
        <div class="card"> 
            <img src="https://source.unsplash.com/500x400/?pencil" class="card-img-top" alt="pencil">
          <div class="card-body">
            <h5 class="card-title">judul</h5>
            <p>
              <small>
                Oleh: <a href="/" class="text-decoration-none">penulis.. </a> dibuat 2 menit yg lalu
              </small>
            </p>
            <p class="card-text">excerpt</p>
            <a href="/" class="btn btn-primary">Baca selengkapnya</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</main>

<footer class="mt-auto text-white-50">
  <p></p>
</footer>
@endsection



