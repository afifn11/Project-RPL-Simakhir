@include('mahasiswa.header')
@include('mahasiswa.sidebar')

<div class="content-wrapper">
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Dashboard Mahasiswa</h1>
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
                <div class="row">
                    <!-- Jumlah Daftar Seminar -->
                    <div class="col-lg-4 col-6">
                        <div class="small-box bg-warning">
                            <div class="inner">
                                <h3>{{ $jumlahSeminar }}</h3>
                                <p>Jumlah Daftar Seminar</p>
                            </div>
                            <div class="icon">
                                <i class="ion ion-person"></i>
                            </div>
                            <a href="#" class="small-box-footer">Lihat Daftar Seminar <i class="fas fa-arrow-circle-right"></i></a>
                        </div>
                    </div>

                    <!-- Jumlah Jadwal Bimbingan -->
                    <div class="col-lg-4 col-6">
                        <div class="small-box bg-success">
                            <div class="inner">
                                <h3>{{ $jumlahJadwalBimbingan }}</h3>
                                <p>Jumlah Jadwal Bimbingan</p>
                            </div>
                            <div class="icon">
                                <i class="ion ion-calendar"></i>
                            </div>
                            <a href="#" class="small-box-footer">Lihat Jadwal Bimbingan <i class="fas fa-arrow-circle-right"></i></a>
                        </div>
                    </div>

                    <!-- Jumlah Hasil Penilaian -->
                    <div class="col-lg-4 col-6">
                        <div class="small-box bg-info">
                            <div class="inner">
                                <h3>{{ $jumlahHasilPenilaian }}</h3>
                                <p>Hasil Penilaian</p>
                            </div>
                            <div class="icon">
                                <i class="ion ion-archive"></i>
                            </div>
                            <a href="#" class="small-box-footer">Lihat Hasil Penilaian <i class="fas fa-arrow-circle-right"></i></a>
                        </div>
                    </div>

                    <!-- Jumlah Tugas -->
                    <div class="col-lg-4 col-6">
                        <div class="small-box bg-primary">
                            <div class="inner">
                                <h3>{{ $jumlahTugas }}</h3>
                                <p>Jumlah Tugas</p>
                            </div>
                            <div class="icon">
                                <i class="ion ion-archive"></i>
                            </div>
                            <a href="#" class="small-box-footer">Lihat Tugas <i class="fas fa-arrow-circle-right"></i></a>
                        </div>
                    </div>

                    <!-- Jumlah Unggah Dokumen -->
                    <div class="col-lg-4 col-6">
                        <div class="small-box bg-secondary">
                            <div class="inner">
                                <h3>{{ $jumlahDokumen }}</h3>
                                <p>Jumlah Unggah Dokumen</p>
                            </div>
                            <div class="icon">
                                <i class="ion ion-archive"></i>
                            </div>
                            <a href="#" class="small-box-footer">Lihat Unggah Dokumen <i class="fas fa-arrow-circle-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

@include('mahasiswa.footer')
