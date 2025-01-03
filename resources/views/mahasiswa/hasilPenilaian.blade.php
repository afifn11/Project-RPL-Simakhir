@include('mahasiswa.header')
@include('mahasiswa.sidebar')

<div class="content-wrapper">
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-lg-6 col-md-8 col-sm-12">
                    <h1>Hasil Penilaian</h1>
                </div>
            </div>
        </div>
    </section>

    <section class="content">
        <div class="card">
            <div class="card-header" style="background-color: #E1FFBB">
                <h3 class="card-title">Hasil Penilaian Seminar/Ujian</h3>
            </div>

            <div class="card-body">
                @if($results->isEmpty())
                    <div class="alert alert-warning">
                        Belum ada hasil penilaian untuk ditampilkan.
                    </div>
                @else
                    <div class="table-responsive">
                        <table class="table table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Judul</th>
                                    <th>Tanggal</th>
                                    <th>Nilai</th>
                                    <th>Komentar</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($results as $key => $result)
                                    <tr>
                                        <td>{{ $key + 1 }}</td>
                                        <td>{{ $result->schedule->title ?? 'Tidak ada judul' }}</td>
                                        <!-- Format tanggal menggunakan Carbon -->
                                        <td>
                                            @if($result->schedule && $result->schedule->date)
                                                {{ \Carbon\Carbon::parse($result->schedule->date)->translatedFormat('d F Y') }}
                                            @else
                                                Belum dijadwalkan
                                            @endif
                                        </td>
                                        <td>{{ $result->score ?? 'Tidak ada nilai' }}</td>
                                        <td>{{ $result->comments ?? 'Tidak ada komentar' }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                @endif
            </div>
        </div>
    </section>
</div>

@include('mahasiswa.footer')
