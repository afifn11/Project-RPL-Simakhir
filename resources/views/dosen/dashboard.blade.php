@include('dosen.header')
@include('dosen.sidebar')

<div class="content-wrapper">
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Dashboard Dosen</h1>
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
                    <p>Di sini Anda dapat mengelola jadwal mahasiswa, menyetujui bimbingan dan seminar, dan memberikan nilai dengan mudah.</p>
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
                    <!-- Jumlah Jadwal Bimbingan -->
                    <div class="col-lg-3 col-6">
                        <div class="small-box bg-warning">
                            <div class="inner">
                                <h3>{{ $jumlahJadwalBimbingan }}</h3>
                                <p>Jumlah Jadwal Bimbingan</p>
                            </div>
                            <div class="icon">
                                <i class="ion ion-person"></i>
                            </div>
                            <a href="" class="small-box-footer">Lihat Jadwal Bimbingan <i class="fas fa-arrow-circle-right"></i></a>
                        </div>
                    </div>
                    <!-- ./col -->

                    <!-- Jumlah Seminar -->
                    <div class="col-lg-3 col-6">
                        <div class="small-box bg-success">
                            <div class="inner">
                                <h3>{{ $jumlahSeminar }}</h3>
                                <p>Jumlah Pendaftaran Seminar</p>
                            </div>
                            <div class="icon">
                                <i class="ion ion-calendar"></i>
                            </div>
                            <a href="" class="small-box-footer">Lihat Pendaftaran Seminar <i class="fas fa-arrow-circle-right"></i></a>
                        </div>
                    </div>
                    <!-- ./col -->

                    <!-- Jumlah Penilaian -->
                    <div class="col-lg-3 col-6">
                        <div class="small-box bg-danger">
                            <div class="inner">
                                <h3>{{ $jumlahPenilaian }}</h3>
                                <p>Selesai di Nilai</p>
                            </div>
                            <div class="icon">
                                <i class="ion ion-archive"></i>
                            </div>
                            <a href="#" class="small-box-footer">Lihat Penilaian <i class="fas fa-arrow-circle-right"></i></a>
                        </div>
                    </div>
                    <!-- ./col -->

                    <!-- Jumlah Berikan Tugas -->
                    <div class="col-lg-3 col-6">
                        <div class="small-box bg-info">
                            <div class="inner">
                                <h3>{{ $jumlahBerikanTugas }}</h3>
                                <p>Jumlah Berikan Tugas</p>
                            </div>
                            <div class="icon">
                                <i class="ion ion-archive"></i>
                            </div>
                            <a href="#" class="small-box-footer">Lihat Berikan Tugas <i class="fas fa-arrow-circle-right"></i></a>
                        </div>
                    </div>
                    <!-- ./col -->
                </div>
            </div>
        </div>
    </section>
</div>

@include('dosen.footer')
