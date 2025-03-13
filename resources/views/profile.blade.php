@extends('layouts.app')

@section('title', 'Profil Pengguna')

@section('content')
    <div class="container my-5">

        <div class="card shadow-lg border-0 rounded bg-light"> <!-- Menambahkan warna latar belakang -->
            <div class="card-header text-center">
                <h2 class="text-pink">Selamat Datang di Profil Saya!</h2> <!-- Mengubah warna teks menjadi pink -->
            </div>
            <div class="card-body text-center">
                <img src="{{ asset($profile['profile_picture']) }}" alt="Profile Picture" class="img-fluid rounded-circle border border-primary" style="width: 150px; height: 150px; object-fit: cover;">
                <h3 class="mt-3">{{ $profile['name'] }}</h3>
                <p class="text-muted">Email: {{ $profile['email'] }}</p>
                <p class="text-muted">Bio: {{ $profile['bio'] }}</p>
                <p class="text-muted">Lokasi: {{ $profile['location'] }}</p>
                <p class="text-muted">Tanggal Lahir: {{ $profile['birthdate'] }}</p>
                <p class="text-muted">Hobi: {{ $profile['hobbies'] }}</p>

                @if(count($profile['skills']) > 0)
                    <h5 class="mt-4">✨ Skills: ✨</h5>
                    <ul class="list-unstyled">
                        @foreach($profile['skills'] as $skill)
                            <li class="badge bg-primary text-white m-1">{{ $skill }}</li>
                        @endforeach
                    </ul>
                @else 
                    <p class="text-danger">Tidak ada skill yang ditampilkan</p>
                @endif
            </div>
            <div class="card-footer text-center">
                <p class="text-muted">"Hidup adalah perjalanan, nikmati setiap langkahnya!"</p>
            </div>
        </div>
    </div>

    <style>
        .text-pink {
            color: #ff69b4; /* Warna pink */
        }
    </style>
@endsection