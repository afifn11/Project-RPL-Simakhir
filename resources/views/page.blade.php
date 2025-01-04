<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <title>Simakhir - Sistem Informasi Mahasiswa Akhir</title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta content="" name="keywords">
        <meta content="" name="description">

        <!-- Favicon -->
        <link rel="icon" href="{{ asset('assets/dist/img/logo_simakhir.jpeg') }}" type="image/x-icon">

        <!-- Google Web Fonts -->
        <link rel="preconnect" href="{{ ('https://fonts.googleapis.com') }}">
        <link rel="preconnect" href="{{ ('https://fonts.gstatic.com') }}" crossorigin>
        <link href="{{ ('https://fonts.googleapis.com/css2?family=Jost:wght@500;600&family=Roboto&display=swap') }}" rel="stylesheet"> 

        <!-- Icon Font Stylesheet -->
        <link rel="stylesheet" href="{{ ('https://use.fontawesome.com/releases/v5.15.4/css/all.css') }}">
        <link href="{{ ('https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css') }}" rel="stylesheet">

        <!-- Libraries Stylesheet -->
        <link href="{{ asset('landing-page/lib/owlcarousel/assets/owl.carousel.min.css') }}" rel="stylesheet">
        <link href="{{ asset('landing-page/lib/lightbox/css/lightbox.min.css') }}" rel="stylesheet">


        <!-- Customized Bootstrap Stylesheet -->
        <link href="{{ asset('landing-page/css/bootstrap.min.css') }}" rel="stylesheet">

        <!-- Template Stylesheet -->
        <link href="{{ asset('landing-page/css/style.css') }}" rel="stylesheet">
    </head>

    <body>

        <!-- Spinner Start -->
        <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <!-- Spinner End -->

        <!-- Topbar Start -->
        <div class="container-fluid bg-primary px-5 d-none d-lg-block">
            <div class="row gx-0">
                <div class="col-lg-8 text-center text-lg-start mb-2 mb-lg-0">
                    <div class="d-inline-flex align-items-center" style="height: 45px;">
                        <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle me-2" href=""><i class="fab fa-twitter fw-normal"></i></a>
                        <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle me-2" href=""><i class="fab fa-facebook-f fw-normal"></i></a>
                        <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle me-2" href=""><i class="fab fa-linkedin-in fw-normal"></i></a>
                        <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle me-2" href=""><i class="fab fa-instagram fw-normal"></i></a>
                        <a class="btn btn-sm btn-outline-light btn-sm-square" href=""><i class="fab fa-youtube fw-normal"></i></a>
                    </div>
                </div>
                <div class="col-lg-4 text-center text-lg-end">
                    <div class="d-inline-flex align-items-center" style="height: 45px;">
                        <a href="{{ route('register') }}"><small class="me-3 text-light"><i class="fa fa-user me-2"></i>Register</small></a>
                        <a href="{{ route('login') }}"><small class="me-3 text-light"><i class="fa fa-sign-in-alt me-2"></i>Login</small></a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Topbar End -->

<!-- Navbar & Hero Start -->
<div class="container-fluid position-relative p-0">
    <nav class="navbar navbar-expand-lg navbar-light px-4 px-lg-5 py-3 py-lg-0">
        <a href="" class="navbar-brand p-0">
            <h1 class="m-0"><i class="fa fa-graduation-cap me-3"></i>Simakhir</h1>
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="fa fa-bars"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto py-0">
                <a href="#" class="nav-item nav-link active">Home</a>
                <a href="#about" class="nav-item nav-link">About</a>
                <a href="#layanan" class="nav-item nav-link">Services</a>
                <a href="#features" class="nav-item nav-link">Features</a>
                <a href="#testimoni" class="nav-item nav-link">Testimonials</a>
                <a href="#contact" class="nav-item nav-link">Contact</a>
            </div>
        </div>
    </nav>

    <!-- Carousel Start -->
    <div class="carousel-header">
        <div id="carouselId" class="carousel slide" data-bs-ride="carousel">
            <ol class="carousel-indicators">
                <li data-bs-target="#carouselId" data-bs-slide-to="0" class="active"></li>
                <li data-bs-target="#carouselId" data-bs-slide-to="1"></li>
                <li data-bs-target="#carouselId" data-bs-slide-to="2"></li>
            </ol>
            <div class="carousel-inner" role="listbox">
                <div class="carousel-item active">
                    <img src="https://media.istockphoto.com/id/947295034/photo/a-group-of-graduates-throwing-graduation-caps-in-the-air.jpg?b=1&s=612x612&w=0&k=20&c=Sp8ur-sEe0z769IDviHDzbu0YIGtDTslOfkoHGdLgaM=" class="img-fluid" alt="Sistem Informasi Mahasiswa Akhir">
                    <div class="carousel-caption">
                        <div class="p-3" style="max-width: 900px;">
                            <h4 class="text-white text-uppercase fw-bold mb-4" style="letter-spacing: 3px;">Sistem Informasi Mahasiswa Akhir</h4>
                            <h1 class="display-2 text-capitalize text-white mb-4">Solusi Manajemen Skripsi Anda!</h1>
                            <p class="mb-5 fs-5">SIMAKHIR membantu mahasiswa akhir, dosen, dan admin mengelola tugas akhir secara efisien.</p>
                            <div class="d-flex align-items-center justify-content-center">
                                <a class="btn-hover-bg btn btn-primary rounded-pill text-white py-3 px-5" href="{{ route('register') }}">LOGIN</a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Tambahan slide carousel lain jika diperlukan -->
                <!-- Slide 2 -->
                <div class="carousel-item">
                    <img src="https://img.freepik.com/free-photo/three-fellow-students-reading-textbook-preparing-exam_1262-15289.jpg?ga=GA1.1.26545174.1701183139&semt=ais_hybrid" class="img-fluid" alt="Progres Skripsi">
                    <div class="carousel-caption">
                        <div class="p-3" style="max-width: 900px;">
                            <h4 class="text-white text-uppercase fw-bold mb-4" style="letter-spacing: 3px;">Kelola Progres Skripsi Anda</h4>
                            <h1 class="display-2 text-capitalize text-white mb-4">Pantau Tugas Skripsi dengan Mudah</h1>
                            <p class="mb-5 fs-5">Dengan SIMAKHIR, mahasiswa bisa memonitor progres skripsi mereka dalam satu platform yang terintegrasi.</p>
                            <div class="d-flex align-items-center justify-content-center">
                                <a class="btn-hover-bg btn btn-primary rounded-pill text-white py-3 px-5" href="{{ route('register') }}">LOGIN</a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Slide 3 -->
                <div class="carousel-item">
                    <img src="https://img.freepik.com/free-photo/student-female-hands-performing-written-task-copybook_1163-2552.jpg?ga=GA1.1.26545174.1701183139&semt=ais_hybrid" class="img-fluid" alt="Jadwal Seminar dan Ujian">
                    <div class="carousel-caption">
                        <div class="p-3" style="max-width: 900px;">
                            <h4 class="text-white text-uppercase fw-bold mb-4" style="letter-spacing: 3px;">Jadwal Seminar dan Ujian</h4>
                            <h1 class="display-2 text-capitalize text-white mb-4">Jadwalkan Seminar dan Ujian Skripsi Anda</h1>
                            <p class="mb-5 fs-5">SIMAKHIR memungkinkan admin untuk menjadwalkan seminar dan ujian dengan mudah, serta memberikan notifikasi pengingat.</p>
                            <div class="d-flex align-items-center justify-content-center">
                                <a class="btn-hover-bg btn btn-primary rounded-pill text-white py-3 px-5" href="{{ route('register') }}">LOGIN</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselId" data-bs-slide="prev">
                <span class="carousel-control-prev-icon btn bg-primary" aria-hidden="false"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselId" data-bs-slide="next">
                <span class="carousel-control-next-icon btn bg-primary" aria-hidden="false"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
    <!-- Carousel End -->

</div>


        <!-- About Start -->
        <div id="about" class="container-fluid about py-5">
            <div class="container py-5">
                <div class="row g-5 align-items-center">
                    <div class="col-lg-5">
                        <div class="h-100" style="border: 50px solid; border-color: transparent #13357B transparent #13357B;">
                            <img src="{{ asset('assets/dist/img/logo_simakhir.jpeg') }}" class="img-fluid w-100 h-100" alt="Logo SIMAKHIR">
                        </div>
                    </div>
                    <div class="col-lg-7" style="background: linear-gradient(rgba(255, 255, 255, .8), rgba(255, 255, 255, .8)), url(img/about-img-1.png);">
                        <h5 class="section-about-title pe-3">Tentang SIMAKHIR</h5>
                        <h1 class="mb-4">Selamat datang di <span class="text-primary">SIMAKHIR</span></h1>
                        <p class="mb-4">SIMAKHIR adalah sistem yang dirancang untuk mengelola jadwal bimbingan, pendaftaran seminar, ujian, serta penilaian hasil ujian bagi mahasiswa. Platform ini bertujuan untuk mempermudah komunikasi antara mahasiswa, dosen, dan admin, serta memastikan proses akademik berjalan dengan efisien dan lancar.</p>
                        <p class="mb-4">Mahasiswa dapat mengelola tugas skripsi, seperti proposal, laporan, dan bimbingan, serta mengunggah dokumen terkait. Dosen dapat menyetujui pendaftaran seminar, memberikan umpan balik langsung pada dokumen mahasiswa, dan menilai ujian/semester. Admin bertanggung jawab dalam penjadwalan ujian/seminar, mengelola data pengguna, serta mengirimkan notifikasi terkait deadline tugas dan jadwal bimbingan.</p>
                        <div class="row gy-2 gx-4 mb-4">
                            <div class="col-sm-6">
                                <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>Mengunggah dokumen skripsi (proposal, draft, dll.)</p>
                            </div>
                            <div class="col-sm-6">
                                <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>Melihat dan mengelola progres skripsi</p>
                            </div>
                            <div class="col-sm-6">
                                <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>Menjadwalkan dan mengelola seminar/ujian</p>
                            </div>
                            <div class="col-sm-6">
                                <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>Umpan balik langsung dari dosen</p>
                            </div>
                            <div class="col-sm-6">
                                <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>Menerima pengingat otomatis untuk deadline</p>
                            </div>
                            <div class="col-sm-6">
                                <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>Dukungan multi-bahasa (Bahasa Indonesia dan Inggris)</p>
                            </div>
                        </div>
                        <a class="btn btn-primary rounded-pill py-3 px-5 mt-2" href="">Pelajari Lebih Lanjut</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- About End -->


        <!-- Services Start -->
        <div id="layanan" class="container-fluid bg-light service py-5">
            <div class="container py-5">
                <div class="mx-auto text-center mb-5" style="max-width: 900px;">
                    <h5 class="section-title px-3">Services</h5>
                    <h1 class="mb-0">Our Services</h1>
                </div>
                <div class="row g-4">
                    <!-- Layanan Kiri -->
                    <div class="col-lg-6">
                        <div class="row g-4">
                            <!-- Layanan 1 -->
                            <div class="col-12">
                                <div class="service-content-inner d-flex align-items-center bg-white border border-primary rounded p-4 pe-0">
                                    <div class="service-content text-end">
                                        <h5 class="mb-4">Manajemen Tugas Akhir</h5>
                                        <p class="mb-0">SIMAKHIR membantu mahasiswa dan dosen untuk mengelola tugas akhir dengan mudah dan efisien, termasuk pengaturan jadwal, bimbingan, dan ujian.</p>
                                    </div>
                                    <div class="service-icon p-4">
                                        <i class="fa fa-graduation-cap fa-4x text-primary"></i>
                                    </div>
                                </div>
                            </div>
                            <!-- Layanan 2 -->
                            <div class="col-12">
                                <div class="service-content-inner d-flex align-items-center bg-white border border-primary rounded p-4 pe-0">
                                    <div class="service-content text-end">
                                        <h5 class="mb-4">Jadwal Bimbingan</h5>
                                        <p class="mb-0">Memudahkan mahasiswa dan dosen dalam mengatur jadwal bimbingan skripsi serta mengingatkan jadwal penting yang harus dihadiri.</p>
                                    </div>
                                    <div class="service-icon p-4">
                                        <i class="fa fa-calendar fa-4x text-primary"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Layanan Kanan -->
                    <div class="col-lg-6">
                        <div class="row g-4">
                            <!-- Layanan 3 -->
                            <div class="col-12">
                                <div class="service-content-inner d-flex align-items-center bg-white border border-primary rounded p-4 ps-0">
                                    <div class="service-icon p-4">
                                        <i class="fa fa-check-circle fa-4x text-primary"></i>
                                    </div>
                                    <div class="service-content">
                                        <h5 class="mb-4">Pengajuan Ujian</h5>
                                        <p class="mb-0">Mahasiswa dapat mengajukan ujian skripsi mereka dengan mudah melalui platform ini, serta memantau status pengajuan mereka secara langsung.</p>
                                    </div>
                                </div>
                            </div>
                            <!-- Layanan 4 -->
                            <div class="col-12">
                                <div class="service-content-inner d-flex align-items-center bg-white border border-primary rounded p-4 ps-0">
                                    <div class="service-icon p-4">
                                        <i class="fa fa-chart-bar fa-4x text-primary"></i>
                                    </div>
                                    <div class="service-content">
                                        <h5 class="mb-4">Laporan dan Statistik</h5>
                                        <p class="mb-0">Fitur laporan dan statistik untuk memantau progres mahasiswa dan memudahkan admin dalam mengelola data tugas akhir.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Tombol untuk melihat lebih banyak layanan -->
                <div class="col-12">
                    <div class="text-center">
                        <a class="btn btn-primary rounded-pill py-3 px-5 mt-2" href="#">Lihat Layanan Lainnya</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Services End -->

        <!-- Fitur Start -->
        <div id="features" class="container-fluid fitur py-5">
            <div class="container py-5">
                <div class="mx-auto text-center mb-5" style="max-width: 900px;">
                    <h5 class="section-title px-3">Fitur</h5>
                    <h1 class="mb-0">Fitur Unggulan</h1>
                </div>
                <div class="row g-4">
                    <!-- Fitur 1 -->
                    <div class="col-md-4">
                        <div class="fitur-item bg-light border rounded p-4 text-center">
                            <div class="fitur-icon mb-4">
                                <i class="fa fa-calendar-check fa-4x text-primary"></i>
                            </div>
                            <h5 class="mb-3">Manajemen Tugas</h5>
                            <p class="mb-0">Mengelola tugas dengan tenggat waktu dan pengingat untuk mahasiswa dan dosen, memastikan tidak ada tugas yang terlewat.</p>
                        </div>
                    </div>
                    <!-- Fitur 2 -->
                    <div class="col-md-4">
                        <div class="fitur-item bg-light border rounded p-4 text-center">
                            <div class="fitur-icon mb-4">
                                <i class="fa fa-users fa-4x text-primary"></i>
                            </div>
                            <h5 class="mb-3">Kolaborasi</h5>
                            <p class="mb-0">Memfasilitasi kolaborasi yang mudah antara mahasiswa dan dosen untuk berbagi file, umpan balik, dan kemajuan tugas.</p>
                        </div>
                    </div>
                    <!-- Fitur 3 -->
                    <div class="col-md-4">
                        <div class="fitur-item bg-light border rounded p-4 text-center">
                            <div class="fitur-icon mb-4">
                                <i class="fa fa-tasks fa-4x text-primary"></i>
                            </div>
                            <h5 class="mb-3">Pelacakan Progres</h5>
                            <p class="mb-0">Melacak kemajuan tugas dengan alat visual yang mudah dipahami, memberikan gambaran yang jelas mengenai status tugas mahasiswa.</p>
                        </div>
                    </div>
                </div>
                <div class="row g-4 mt-4">
                    <!-- Fitur 4 -->
                    <div class="col-md-4">
                        <div class="fitur-item bg-light border rounded p-4 text-center">
                            <div class="fitur-icon mb-4">
                                <i class="fa fa-bell fa-4x text-primary"></i>
                            </div>
                            <h5 class="mb-3">Pemberitahuan</h5>
                            <p class="mb-0">Mendapatkan pemberitahuan dan pengingat tepat waktu tentang rapat, tenggat waktu, dan tugas, memastikan tidak ada yang terlupakan.</p>
                        </div>
                    </div>
                    <!-- Fitur 5 -->
                    <div class="col-md-4">
                        <div class="fitur-item bg-light border rounded p-4 text-center">
                            <div class="fitur-icon mb-4">
                                <i class="fa fa-chart-line fa-4x text-primary"></i>
                            </div>
                            <h5 class="mb-3">Analitik</h5>
                            <p class="mb-0">Memantau kinerja dan pencapaian melalui analitik yang terperinci, memberikan wawasan yang jelas tentang perkembangan mahasiswa.</p>
                        </div>
                    </div>
                    <!-- Fitur 6 -->
                    <div class="col-md-4">
                        <div class="fitur-item bg-light border rounded p-4 text-center">
                            <div class="fitur-icon mb-4">
                                <i class="fa fa-cogs fa-4x text-primary"></i>
                            </div>
                            <h5 class="mb-3">Kustomisasi</h5>
                            <p class="mb-0">Menyesuaikan platform sesuai dengan kebutuhan unik program studi, termasuk struktur tugas dan pencapaian.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Fitur End -->

        <!-- Testimonial Start -->
        <div id="testimoni" class="container-fluid testimonial py-5">
            <div class="container py-5">
                <div class="mx-auto text-center mb-5" style="max-width: 900px;">
                    <h5 class="section-title px-3">Testimonial</h5>
                    <h1 class="mb-0">Apa Kata Mahasiswa Tentang SIMAKHIR!</h1>
                </div>
                <div class="testimonial-carousel owl-carousel">
                    <div class="testimonial-item text-center rounded pb-4">
                        <div class="testimonial-comment bg-light rounded p-4">
                            <p class="text-center mb-5">“SIMAKHIR sangat membantu saya dalam mengatur jadwal bimbingan dengan dosen pembimbing. Sekarang saya tidak perlu khawatir lagi terlambat atau lupa jadwal penting!”</p>
                        </div>
                        <div class="testimonial-img p-1">
                            <img src="https://img.freepik.com/free-photo/university-study-abroad-lifestyle-concept-smiling-cheerful-asian-guy-glasses-standing-with-backpack-laptop-student-his-way-classes-posing-white-background_1258-55845.jpg?ga=GA1.1.26545174.1701183139&semt=ais_hybrid" class="img-fluid rounded-circle" alt="Mahasiswa 1" style="object-fit: cover; width: 100px; height: 100px;">
                        </div>
                        <div style="margin-top: -35px;">
                            <h5 class="mb-0">Ahmad Firdaus</h5>
                            <p class="mb-0">Mahasiswa Teknik Informatika</p>
                            <div class="d-flex justify-content-center">
                                <i class="fas fa-star text-primary"></i>
                                <i class="fas fa-star text-primary"></i>
                                <i class="fas fa-star text-primary"></i>
                                <i class="fas fa-star text-primary"></i>
                                <i class="fas fa-star text-primary"></i>
                            </div>
                        </div>
                    </div>
                    <div class="testimonial-item text-center rounded pb-4">
                        <div class="testimonial-comment bg-light rounded p-4">
                            <p class="text-center mb-5">“Saya merasa lebih terorganisir berkat SIMAKHIR. Semua informasi tentang jadwal bimbingan, pengingat, dan notifikasi selalu tersedia di satu tempat.”</p>
                        </div>
                        <div class="testimonial-img p-1">
                            <img src="https://img.freepik.com/free-photo/happy-young-student-asian-woman-warm-hat-holds-backpack-shows-thumbs-up-smiles-blue-backgroun_1258-169341.jpg?ga=GA1.1.26545174.1701183139&semt=ais_hybrid" class="img-fluid rounded-circle" alt="Mahasiswa 2" style="object-fit: cover; width: 100px; height: 100px;">
                        </div>
                        <div style="margin-top: -35px;">
                            <h5 class="mb-0">Rina Puspita</h5>
                            <p class="mb-0">Mahasiswa Sistem Informasi</p>
                            <div class="d-flex justify-content-center">
                                <i class="fas fa-star text-primary"></i>
                                <i class="fas fa-star text-primary"></i>
                                <i class="fas fa-star text-primary"></i>
                                <i class="fas fa-star text-primary"></i>
                                <i class="fas fa-star text-primary"></i>
                            </div>
                        </div>
                    </div>
                    <div class="testimonial-item text-center rounded pb-4">
                        <div class="testimonial-comment bg-light rounded p-4">
                            <p class="text-center mb-5">“Dengan SIMAKHIR, saya bisa mengatur jadwal bimbingan dengan dosen saya tanpa kesulitan. Notifikasi tepat waktu sangat membantu agar tidak ada yang terlewat.”</p>
                        </div>
                        <div class="testimonial-img p-1">
                            <img src="https://img.freepik.com/free-psd/portrait-man-teenager-isolated_23-2151745759.jpg?ga=GA1.1.26545174.1701183139&semt=ais_hybrid" class="img-fluid rounded-circle" alt="Mahasiswa 3" style="object-fit: cover; width: 100px; height: 100px;">
                        </div>
                        <div style="margin-top: -35px;">
                            <h5 class="mb-0">Budi Santoso</h5>
                            <p class="mb-0">Mahasiswa Teknik Informatika</p>
                            <div class="d-flex justify-content-center">
                                <i class="fas fa-star text-primary"></i>
                                <i class="fas fa-star text-primary"></i>
                                <i class="fas fa-star text-primary"></i>
                                <i class="fas fa-star text-primary"></i>
                                <i class="fas fa-star text-primary"></i>
                            </div>
                        </div>
                    </div>
                    <div class="testimonial-item text-center rounded pb-4">
                        <div class="testimonial-comment bg-light rounded p-4">
                            <p class="text-center mb-5">“Saya bisa mengingat dengan mudah jadwal bimbingan saya setiap minggu. SIMAKHIR benar-benar mempermudah saya dalam menyelesaikan tugas-tugas akhir.”</p>
                        </div>
                        <div class="testimonial-img p-1">
                            <img src="https://img.freepik.com/free-photo/front-view-young-female-student-red-shirt-with-backpack-holding-yellow-files-light-blue-background_140725-40988.jpg?ga=GA1.1.26545174.1701183139&semt=ais_hybrid" class="img-fluid rounded-circle" alt="Mahasiswa 4" style="object-fit: cover; width: 100px; height: 100px;">
                        </div>
                        <div style="margin-top: -35px;">
                            <h5 class="mb-0">Indah Pratiwi</h5>
                            <p class="mb-0">Mahasiswa Binis Digital</p>
                            <div class="d-flex justify-content-center">
                                <i class="fas fa-star text-primary"></i>
                                <i class="fas fa-star text-primary"></i>
                                <i class="fas fa-star text-primary"></i>
                                <i class="fas fa-star text-primary"></i>
                                <i class="fas fa-star text-primary"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Testimonial End -->


        <!-- Footer Start -->
        <div class="container-fluid footer py-5">
            <div class="container py-5">
                <div class="row g-5">
                    <div class="col-md-6 col-lg-6 col-xl-3">
                        <div class="footer-item d-flex flex-column">
                            <h4 class="mb-4 text-white">Contact Information</h4>
                            <a href=""><i class="fas fa-home me-2"></i> Bersama Street, Indonesia</a>
                            <a href=""><i class="fas fa-envelope me-2"></i> Simakhir@example.com</a>
                            <a href=""><i class="fas fa-phone me-2"></i> +012 345 67890</a>
                            <a href="" class="mb-3"><i class="fas fa-print me-2"></i> +012 345 67890</a>
                            <div class="d-flex align-items-center">
                                <i class="fas fa-share fa-2x text-white me-2"></i>
                                <a class="btn-square btn btn-primary rounded-circle mx-1" href=""><i class="fab fa-facebook-f"></i></a>
                                <a class="btn-square btn btn-primary rounded-circle mx-1" href=""><i class="fab fa-twitter"></i></a>
                                <a class="btn-square btn btn-primary rounded-circle mx-1" href=""><i class="fab fa-instagram"></i></a>
                                <a class="btn-square btn btn-primary rounded-circle mx-1" href=""><i class="fab fa-linkedin-in"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6 col-xl-3">
                        <div class="footer-item d-flex flex-column">
                            <h4 class="mb-4 text-white">Company</h4>
                            <a href=""><i class="fas fa-angle-right me-2"></i> About SIMAKHIR</a>
                            <a href=""><i class="fas fa-angle-right me-2"></i> Student Resources</a>
                            <a href=""><i class="fas fa-angle-right me-2"></i> Schedule Management</a>
                            <a href=""><i class="fas fa-angle-right me-2"></i> FAQ</a>

                        </div>
                    </div>
                    <div id="contact" class="col-md-6 col-lg-6 col-xl-3">
                        <div class="footer-item d-flex flex-column">
                            <h4 class="mb-4 text-white">Support</h4>
                            <a href=""><i class="fas fa-angle-right me-2"></i> Contact Support</a>
                            <a href=""><i class="fas fa-angle-right me-2"></i> Technical Assistance</a>
                            <a href=""><i class="fas fa-angle-right me-2"></i> Student FAQ</a>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6 col-xl-3">
                        <div class="footer-item">
                            <div class="row gy-3 gx-2 mb-4">
                                <div class="col-xl-6">
                                    <form>
                                        <div class="form-floating">
                                            <select class="form-select bg-dark border" id="select1">
                                                <option value="1">Arabic</option>
                                                <option value="2">German</option>
                                                <option value="3">Greek</option>
                                                <option value="3">New York</option>
                                            </select>
                                            <label for="select1">English</label>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer End -->
        
        <!-- Copyright Start -->
        <div class="container-fluid copyright text-body py-4">
            <div class="container">
                <div class="row g-4 align-items-center">
                    <div class="col-md-6 text-center text-md-end mb-md-0">
                        <i class="fas fa-copyright me-2"></i><a class="text-white" href="#">SIMAKHIR</a>, All right reserved.
                    </div>
                    <div class="col-md-6 text-center text-md-start">
                        <!--/*** This template is free as long as you keep the below author’s credit link/attribution link/backlink. ***/-->
                        <!--/*** If you'd like to use the template without the below author’s credit link/attribution link/backlink, ***/-->
                        <!--/*** you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". ***/-->
                        Develop By <a class="text-white" href="https://htmlcodex.com">Kelompok Banteng RPL - 2024</a>
                    </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Copyright End -->

        <!-- Back to Top -->
        <a href="#" class="btn btn-primary btn-primary-outline-0 btn-md-square back-to-top"><i class="fa fa-arrow-up"></i></a>   

        
        <!-- JavaScript Libraries -->
        <script src="{{ ('https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js') }}"></script>
        <script src="{{ ('https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js') }}"></script>
        <script src="{{ asset('landing-page/lib/easing/easing.min.js') }}"></script>
        <script src="{{ asset('landing-page/lib/waypoints/waypoints.min.js') }}"></script>
        <script src="{{ asset('landing-page/lib/owlcarousel/owl.carousel.min.js') }}"></script>
        <script src="{{ asset('landing-page/lib/lightbox/js/lightbox.min.js') }}"></script>
        

        <!-- Template Javascript -->
        <script src="{{ asset('landing-page/js/main.js') }}"></script>
    </body>

</html>