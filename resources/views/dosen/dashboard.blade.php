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
    
    <section class="content">
        <div class="card">
            <div class="card-header" style="background-color: #E1FFBB">
                <h3 class="card-title">Statistik</h3>
            </div>

            <div class="container mt-3">
                <!-- Small boxes (Stat box) -->
                <div class="row">
                    <!-- Jumlah Jadwal Bimbingan -->
                    <div class="col-lg-4 col-6">
                        <div class="small-box bg-warning">
                            <div class="inner">
                                <h3>coba</h3>
                                <p>Jumlah Jadwal Bimbingan</p>
                            </div>
                            <div class="icon">
                                <i class="ion ion-person"></i>
                            </div>
                            <a href="" class="small-box-footer">Lihat Jadwal Bimbingan <i class="fas fa-arrow-circle-right"></i></a>
                        </div>
                    </div>
                    <!-- ./col -->

                    <!-- Jumlah daftar seminar -->
                    <div class="col-lg-4 col-6">
                        <div class="small-box bg-success">
                            <div class="inner">
                                <h3>coba</h3>
                                <p>Jumlah Pendaftaran Seminar</p>
                            </div>
                            <div class="icon">
                                <i class="ion ion-calendar"></i>
                            </div>
                            <a href="" class="small-box-footer">Lihat Pendaftaran Seminar <i class="fas fa-arrow-circle-right"></i></a>
                        </div>
                    </div>
                    <!-- ./col -->

                    <!-- Penilaian -->
                    <div class="col-lg-4 col-6">
                        <div class="small-box bg-danger">
                            <div class="inner">
                                <h3>0</h3>
                                <p>Selesai di Nilai</p>
                            </div>
                            <div class="icon">
                                <i class="ion ion-archive"></i>
                            </div>
                            <a href="#" class="small-box-footer">Lihat Penilaian <i class="fas fa-arrow-circle-right"></i></a>
                        </div>
                    </div>
                    <!-- ./col -->

                    <!-- Penilaian -->
                    <div class="col-lg-4 col-6">
                        <div class="small-box bg-info">
                            <div class="inner">
                                <h3>0</h3>
                                <p>Jumlah Pendaftaran Bimbingan</p>
                            </div>
                            <div class="icon">
                                <i class="ion ion-archive"></i>
                            </div>
                            <a href="#" class="small-box-footer">Lihat Penilaian <i class="fas fa-arrow-circle-right"></i></a>
                        </div>
                    </div>
                    <!-- ./col -->
                </div>
            </div>
        </div>
    </section>
</div>

@include('dosen.footer')