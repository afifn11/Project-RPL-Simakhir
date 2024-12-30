@include('admin.header')
@include('admin.sidebar')

<div class="content-wrapper">
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Dashboard Admin</h1>
                </div>
            </div>
        </div>
    </section>

    <!-- Kata Sambutan -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6" style="background-color: #074799; padding: 15px; border-radius: 5px; color: #fff;">
                    <h4>Hai, {{ Auth::user()->name }}</h4>
                    <p>Selamat datang di SIMAKHIR!</p>
                    <p>Di sini Anda dapat mengelola data pengguna, jadwalkan seminar/bimbingan/ujian, dan backup data dengan mudah.</p>
                </div>
            </div>
        </div>
    </section>
    
    <section class="content">
        <div class="card">
            <div class="card-header" style="background-color: #E1FFBB">
                <h3 class="card-title">Statistik</h3>
            </div>

            <div class="container mt-3">
                <!-- Small boxes (Stat box) -->
                <div class="row">
                    <!-- Jumlah Pengguna -->
                    <div class="col-lg-6 col-6">
                        <div class="small-box bg-info">
                            <div class="inner">
                                <h3>{{ $userCount }}</h3>
                                <p>Jumlah Pengguna</p>
                            </div>
                            <div class="icon">
                                <i class="ion ion-person"></i>
                            </div>
                            <a href="{{ route('admin.kelolaPengguna') }}" class="small-box-footer">Lihat Pengguna <i class="fas fa-arrow-circle-right"></i></a>
                        </div>
                    </div>
                    <!-- ./col -->

                    <!-- Jumlah Jadwal -->
                    <div class="col-lg-6 col-6">
                        <div class="small-box bg-success">
                            <div class="inner">
                                <h3>{{ $scheduleCount }}</h3>
                                <p>Jumlah Jadwal</p>
                            </div>
                            <div class="icon">
                                <i class="ion ion-calendar"></i>
                            </div>
                            <a href="{{ route('admin.jadwalkanSeminar') }}" class="small-box-footer">Lihat Jadwal <i class="fas fa-arrow-circle-right"></i></a>
                        </div>
                    </div>
                    <!-- ./col -->

                </div>
            </div>
        </div>
    </section>
</div>

@include('admin.footer')
