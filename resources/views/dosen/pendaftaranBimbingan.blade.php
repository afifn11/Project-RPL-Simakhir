@include('dosen.header')
@include('dosen.sidebar')

<div class="content-wrapper">
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Kelola Pendaftaran Bimbingan</h1>
                </div>
            </div>
        </div>
    </section>

    <section class="content">
        <div class="card">
            <div class="card-header" style="background-color: #E1FFBB">
                <h3 class="card-title">Daftar Pendaftaran Bimbingan</h3>
            </div>

            <div class="card-body">
                @if(session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                @endif
                <table class="table table-bordered table-hover">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Mahasiswa</th>
                            <th>Judul Dokumen</th>
                            <th>Status</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($bimbingans as $key => $bimbingan)
                        <tr>
                            <td>{{ $key + 1 }}</td>
                            <td>{{ $bimbingan->user->name }}</td>
                            <td>{{ $bimbingan->document->title ?? 'Judul tidak tersedia' }}</td>
                            <td>
                                @if($bimbingan->status === 'pending')
                                    <span class="badge badge-warning">Menunggu</span>
                                @elseif($bimbingan->status === 'approved')
                                    <span class="badge badge-success">Disetujui</span>
                                @elseif($bimbingan->status === 'rejected')
                                    <span class="badge badge-danger">Ditolak</span>
                                @else
                                    <span class="badge badge-secondary">Tidak Diketahui</span>
                                @endif
                            </td>
                            <td>
                                <form action="{{ route('dosen.pendaftaranBimbingan.approve', $bimbingan->id) }}" method="POST" class="d-inline">
                                    @csrf
                                    <button class="btn btn-success btn-sm">Setujui</button>
                                </form>

                                <form action="{{ route('dosen.pendaftaranBimbingan.reject', $bimbingan->id) }}" method="POST" class="d-inline">
                                    @csrf
                                    <button class="btn btn-danger btn-sm">Tolak</button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </section>
</div>

@include('dosen.footer')
