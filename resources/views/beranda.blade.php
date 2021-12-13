@extends('layouts.main')
@section('container')
    

<main class="px-3">
  <h2 class="mb-5 text-center">{{ $title }}</h2>

  @if ($posts->count())
    <div class="card mb-3"> 
      @if ($posts[0]->image)
        <div style="max-height: 400px; overflow:hidden;">   
          <img src="{{ asset('storage/' . $posts[0]->image) }}" alt="{{ $posts[0]->category->name }}" class="img-fluid">
        </div>
      @else
        <img src="https://source.unsplash.com/1200x400/?{{ $posts[0]->category->name }}" alt="{{ $posts[0]->category->name }}" class="img-fluid">
      @endif
      <div class="card-body text-center">
        <h3 class="card-title"><a href="/posts/{{ $posts[0]->slug }}" class="text-decoration-none text-dark">{{ $posts[0]->title }}</a></h3>
        <p>
          <small>
            By: <a href="/?author={{ $posts[0]->author->username }}" class="text-decoration-none">{{ $posts[0]->author->name }}</a> in <a href="/?category={{ $posts[0]->category->slug }}" class="text-decoration-none">{{ $posts[0]->category->name }}</a> {{ $posts[0]->created_at->diffForHumans() }}
          </small>
        </p>
        <p class="card-text">{{ $posts[0]->excerpt }}</p>
        <a href="/posts/{{ $posts[0]->slug }}" class="text-decoration-none btn btn-primary">Baca selengkapnya</a>
      </div>
    </div>

    
    <div class="container">
      <div class="row">
        @foreach ($posts->skip(1) as $post)
          <div class="col-md-4 mb-3">
            <div class="card">
              <div class="position-absolute px-3 py-2 text-white" style="background-color: rgba(0,0,0,0.7)"><a href="/?category={{ $post->category->slug }}" class="text-decoration-none text-light">{{ $post->category->name }}</a></div>
              @if ($post->image)
                <img src="{{ asset('storage/' . $post->image) }}" alt="{{ $post->category->name }}" class="img-fluid">
              @else    
                <img src="https://source.unsplash.com/500x400/?{{ $post->category->name }}" class="card-img-top" alt="{{ $post->category->name }}">
              @endif
              <div class="card-body">
                <h5 class="card-title">{{ $post->title }}</h5>
                <p>
                  <small>
                    By: <a href="/?author={{ $posts[0]->author->username }}" class="text-decoration-none">{{ $post->author->name }} </a> {{ $post->created_at->diffForHumans() }}
                  </small>
                </p>
                <p class="card-text">{{ $post->excerpt }}</p>
                <a href="/posts/{{ $post->slug }}" class="btn btn-primary">Read more</a>
              </div>
            </div>
          </div>
        @endforeach
      </div>
    </div>

  </main>
      
  @else
    <p class="text-center fs-4">No post found.</p>
  @endif
  <div class="d-flex justify-content-end">
  
  {{ $posts->links() }}

</div>
  <footer class="mt-auto d-flex justify-content-center text-50">
    <p>Ini footer</p>
  </footer>
@endsection



