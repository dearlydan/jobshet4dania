@extends('layouts.app')

@section('title', 'Home - MyApp')

@section('content')

<div class="jumbotron text-center bg-light py -5">
    <h1 class="display-4">Selamat datang di My App</h1>
    <p class="lead">Aplikasi laravel sederhana dan Laravel Blade</p>
    <a href="{{ route('profile')}}" class="btn btn-primary btn-lg">Lihat Profile</a>
</div>
@endsection