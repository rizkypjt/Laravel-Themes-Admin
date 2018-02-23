@extends('layouts.main')
@section('content')
    <header class="intro-header" style="background-image: url('img/about-bg.jpg')">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                    <div class="page-heading">
                        <h1>About Us</h1>
                        <hr class="small">
                        <span class="subheading">Tentang WeBlog</span>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- Main Content -->
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                <p>WeBlog adalah sebuah platform blog sederhana yang dibangun dengan penuh cinta dan kasih sayang.</p>
                <p>Dibangun menggunakan laravel 5.4 dan open-source! Kamu bisa klik link github dibawah footer.</p>
                <p>Pengembang:</p>
                <ul>
                   <li>Alfian Rahmatullah as Frontend</li>
                   <li>Muh Isfhani Ghiath as Backend</li>
                </ul>
            </div>
        </div>
    </div>
    @endsection
