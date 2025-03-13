<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function index()
    {
        $profile = [
            'name' => 'Dania Alika Agis Al Zahra',
            'email' => 'daniawiuwiu@gmail.com',
            'bio' => 'We have hope but the world has reality',
            'profile_picture' => 'pp.jpg',
            'location' => 'Jakarta, Indonesia', // Menambahkan lokasi
            'birthdate' => '2007-01-01', // Menambahkan tanggal lahir
            'hobbies' => 'Membaca, Menulis, dan Menggambar', // Menambahkan hobi
            'skills' => ['Komunikasi', 'Desain Grafis', 'Manajemen Waktu']
        ];
        
        return view('profile', compact('profile'));
    }
}