@include('mahasiswa.header')
@include('mahasiswa.sidebar')

<div class="content-wrapper">
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-lg-6 col-md-8 col-sm-12">
                    <h1>Daftar Seminar Anda</h1>
                </div>
            </div>
        </div>
    </section>

    <section class="content">
        <div class="card">
            <div class="card-header" style="background-color: #E1FFBB">
                <h3 class="card-title">Seminar</h3>
            </div>

            <div class="card-body">
                @if(session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                @endif
                <div class="table-responsive">
                    <table class="table table-bordered table-hover">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Judul</th>
                                <th>Tanggal</th>
                                <th>Waktu</th>
                                <th>Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            @if($seminars->isEmpty())
                                <tr>
                                    <td colspan="5" class="text-center">Belum ada data seminar tersedia.</td>
                                </tr>
                            @else
                                @foreach($seminars as $key => $seminar)
                                <tr>
                                    <td>{{ $key + 1 }}</td>
                                    <td>{{ $seminar->title }}</td>
                                    <!-- Format tanggal -->
                                    <td>{{ \Carbon\Carbon::parse($seminar->date)->translatedFormat('d F Y') }}</td>
                                    <!-- Format waktu -->
                                    <td>{{ \Carbon\Carbon::parse($seminar->time)->format('H:i') }}</td>
                                    <td>
                                        <!-- Badge status berdasarkan status seminar -->
                                        @if($seminar->status == 'pending')
                                            <span class="badge badge-warning">Menunggu</span>
                                        @elseif($seminar->status == 'approved')
                                            <span class="badge badge-success">Disetujui</span>
                                        @elseif($seminar->status == 'rejected')
                                            <span class="badge badge-danger">Ditolak</span>
                                        @else
                                            <span class="badge badge-secondary">Unknown</span>
                                        @endif
                                    </td>
                                </tr>
                                @endforeach
                            @endif
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>
</div>

@include('mahasiswa.footer')
