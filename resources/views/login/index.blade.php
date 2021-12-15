@extends('layouts.main')
@section('container')

<div class="container col-xl-10 col-xxl-8 px-4 py-5">
    <div class="row align-items-center g-lg-5 py-5">

      <div class="col-lg-5 text-center text-lg-start">
        <h1 class="display-4 fw-bold lh-1 mb-3">Masuk</h1>
        <p class="col-lg-10 fs-4">untuk akses SIA dengan akun anda</p>
      </div>
      <div class="col-md-10 mx-auto col-lg-7">
        @if (session()->has('success'))
          <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>
        @endif
        @if (session()->has('loginError'))
          <div class="alert alert-danger alert-dismissible fade show" role="alert">
            {{ session('loginError') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>
        @endif
        <form action="/login" method="post" class="p-4 p-md-5 border rounded-3 bg-light">
        @csrf
          <div class="form-floating">
            <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" id="email" placeholder="name@example.com" autofocus required value="{{ old('email') }}">
            <label for="email">Alamat email</label>
            @error('email')    
            <div class="invalid-feedback">
              {{ $message }}
            </div>
            @enderror
          </div>
          <div class="form-floating">
            <input type="password" class="form-control" name="password" id="password" placeholder="Password" required>
            <label for="password">Kata Sandi</label>
          </div>
          <button class="w-100 btn btn-lg btn-primary mt-10" type="submit">Masuk</button>
        </form>
      </div>
    </div>
  </div>
  
@endsection 