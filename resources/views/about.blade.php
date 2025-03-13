@extends('layouts.app')

@section('title','Home - MyApp')

@section('content')
    <div class="container my-5">
        <h1 class="text-center mb-4">Tentang Saya</h1>

        <div class="row align-items-center">
            <div class="col-md-6">
                <!-- Kotak Visi dan Misi -->
                <div class="bg-light p-4 rounded shadow">
                    <h3 class="text-primary">Visi dan Misi sebagai Pelajar</h3>
                    <p>
                        Nama saya Dania Alika Agis Al Zahra, saya berusia 16 tahun. Sebagai seorang pelajar, visi saya adalah untuk menjadi individu yang berpengetahuan luas dan berkontribusi positif bagi masyarakat. Saya percaya bahwa pendidikan adalah alat yang sangat kuat untuk mencapai tujuan ini.
                    </p>
                    
                    <h5 class="mt-4">Misi saya adalah:</h5>
                    <ul class="list-unstyled">
                        <li><i class="fas fa-check-circle text-success"></i> Belajar dengan tekun dan konsisten untuk mencapai prestasi akademik yang baik.</li>
                        <li><i class="fas fa-check-circle text-success"></i> Berpartisipasi aktif dalam kegiatan ekstrakurikuler untuk mengembangkan keterampilan sosial dan kepemimpinan.</li>
                        <li><i class="fas fa-check-circle text-success"></i> Menghargai dan memanfaatkan setiap kesempatan untuk belajar dari pengalaman, baik itu keberhasilan maupun kegagalan.</li>
                        <li><i class="fas fa-check-circle text-success"></i> Menjaga hubungan baik dengan keluarga dan teman-teman sebagai sumber dukungan dan motivasi.</li>
                        <li><i class="fas fa-check-circle text-success"></i> Berkomitmen untuk menjaga lingkungan dan berkontribusi dalam kegiatan sosial yang bermanfaat bagi masyarakat.</li>
                    </ul>

                    <p>
                        Saya percaya bahwa dengan visi dan misi yang jelas, saya dapat terus berkembang dan mencapai impian saya. Setiap langkah yang saya ambil adalah bagian dari perjalanan menuju masa depan yang lebih baik.
                    </p>
                </div>

                <!-- Kotak Hobi dan Cita-Cita -->
                <div class="bg-light p-4 mt-4 rounded shadow">
                    <h5 class="text-primary">Hobi dan Cita-Cita</h5>
                    <p><strong>Hobi:</strong> Membaca, menulis, dan menggambar. Saya juga suka berolahraga, terutama berenang dan bersepeda.</p>
                    <p><strong>Cita-Cita:</strong> Saya bercita-cita untuk menjadi seorang dokter, agar dapat membantu orang lain dan memberikan kontribusi positif bagi kesehatan masyarakat.</p>
                </div>
            </div>

            <div class="col-md-6 text-center">
                <div class="photo-container" style="position: relative; display: inline-block;">
                    <img src="{{ asset('wajah.jpeg') }}" alt="Dania Alika" class="img-fluid rounded-circle" style="width: 200px; height: 200px; object-fit: cover; border: 5px solid #007bff; box-shadow: 0 4px 15px rgba(0, 123, 255, 0.5);">
                </div>
                <h5 class="mt-3">Dania Alika Agis Al Zahra</h5>
                <p>Absen: 07</p>
                <p>Kelas: 11</p>
            </div>
        </div>
    </div>

    <div class="bg-light py-5">
        <div class="container">
            <h2 class="text-center">Hubungi Saya</h2>
            <p class="text-center">
                Jika Anda memiliki pertanyaan atau masukan, silakan hubungi saya melalui:
            </p>
            <div class="text-center">
                <a href="{{ route('contact')}}" class="btn btn-primary btn-lg"> Hubungi Saya</a>
            </div>
        </div>
    </div>
@endsection