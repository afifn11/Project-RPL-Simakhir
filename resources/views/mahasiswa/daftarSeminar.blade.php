@include('mahasiswa.header')
@include('mahasiswa.sidebar')

<div class="content-wrapper">
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
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
                        @foreach($seminars as $key => $seminar)
                        <tr>
                            <td>{{ $key + 1 }}</td>
                            <td>{{ $seminar->title }}</td>
                            <td>{{ $seminar->date }}</td>
                            <td>{{ $seminar->time }}</td>
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
                    </tbody>
                </table>
            </div>
        </div>
    </section>
</div>

@include('mahasiswa.footer')
