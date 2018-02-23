@extends('layouts.main')
@section('content')
    <header class="intro-header" style="background-image: url('/img/home-bg.jpg')">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                    <div class="site-heading">
                        <h1>WeBlog</h1>
                        <span class="subheading">Blog Kelompok 3</span>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- Main Content -->
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
               @foreach($posts as $post)
                  <div class="post-preview">
                      <a href="/detail/{{ $post->id }}">
                          <h2 class="post-title">{{ $post->title }}</h2>
                          <h5>{{ $post->created_at }}</h5>
                          <h4 class="post-subtitle">{{ $post->excerpt }}</h4>
                      </a>
                      <!-- <p class="post-meta">Posted by <a href="#">Start Bootstrap</a> on September 24, 2014</p> -->
                  </div>
                  <hr>
               @endforeach
                <!-- Pager -->
                <!-- <ul class="pager">
                    <li class="next">
                        <a href="#">Older Posts &rarr;</a>
                    </li>
                </ul> -->
            </div>
        </div>
    </div>
@endsection
