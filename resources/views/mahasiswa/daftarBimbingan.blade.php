@include('mahasiswa.header')
@include('mahasiswa.sidebar')

<div class="content-wrapper">
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-lg-6 col-md-8 col-sm-12">
                    <h1>Daftar Bimbingan Anda</h1>
                </div>
            </div>
        </div>
    </section>

    <section class="content">
        <div class="card">
            <div class="card-header" style="background-color: #E1FFBB">
                <h3 class="card-title">Bimbingan</h3>
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
                                <th>Judul Bimbingan</th>
                                <th>Tanggal</th>
                                <th>Waktu</th>
                                <th>Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($bimbingans as $key => $bimbingan)
                            <tr>
                                <td>{{ $key + 1 }}</td>
                                <td>{{ $bimbingan->title }}</td>
                                <!-- Format tanggal -->
                                <td>{{ \Carbon\Carbon::parse($bimbingan->date)->translatedFormat('d F Y') }}</td>
                                <!-- Format waktu -->
                                <td>{{ \Carbon\Carbon::parse($bimbingan->time)->format('H:i') }}</td>
                                <td>
                                    <!-- Badge status berdasarkan status bimbingan -->
                                    @if($bimbingan->status == 'pending')
                                        <span class="badge badge-warning">Menunggu</span>
                                    @elseif($bimbingan->status == 'approved')
                                        <span class="badge badge-success">Disetujui</span>
                                    @elseif($bimbingan->status == 'rejected')
                                        <span class="badge badge-danger">Ditolak</span>
                                    @else
                                        <span class="badge badge-secondary">Unknown</span>
                                    @endif
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>
</div>

@include('mahasiswa.footer')
