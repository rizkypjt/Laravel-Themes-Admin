@extends('layouts.main')
@section('content')
    <header class="intro-header" style="background-image: url('/img/home-bg.jpg')">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                    <div class="site-heading">
                        <span class="subheading">Hai, {{ Auth::user()->name }}</span>
                        <br><br>
                        <a href="/dashboard/add" class="btn btn-primary">+</a>
                        <a href="/dashboard" class="btn btn-primary">Daftar Post</a>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- Main Content -->
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
               @yield('content-blog')
            </div>
        </div>
    </div>
@endsection
