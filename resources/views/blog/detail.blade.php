@extends('layouts.main')
@section('content')
    <header class="intro-header" style="background-image: url('/img/post-bg.jpg')">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                    <div class="post-heading">
                        <h1>{{ $blog->title }}</h1>
                        <!-- <h2 class="subheading">{{ $blog->excerpt }}</h2> -->
                        <span class="meta"><p>Ditulis pada {{ $blog->created_at }}</p></span>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <article>
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                    <p>{{ $blog->content }}</p>
                </div>
            </div>
        </div>
    </article>
@endsection
