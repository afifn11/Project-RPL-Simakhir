@include('dosen.header')
@include('dosen.sidebar')

<div class="content-wrapper">
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-12">
                    <h1>Kelola Jadwal Bimbingan</h1>
                </div>
            </div>
        </div>
    </section>

    <section class="content">
        <div class="card">
            <div class="card-header" style="background-color: #E1FFBB">
                <h3 class="card-title">Daftar Jadwal Bimbingan</h3>
            </div>

            <div class="card-body">
                @if(session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                @endif

                @if($schedules->isEmpty())
                    <div class="alert alert-warning">
                        Tidak ada jadwal bimbingan yang tersedia.
                    </div>
                @else
                    <div class="table-responsive"> <!-- Membuat tabel responsif -->
                        <table class="table table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Mahasiswa</th>
                                    <th>Tanggal</th>
                                    <th>Waktu</th>
                                    <th>Lokasi</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($schedules as $key => $schedule)
                                <tr>
                                    <td>{{ $key + 1 }}</td>
                                    <td>{{ $schedule->user->name }}</td>
                                    <td>{{ \Carbon\Carbon::parse($schedule->date)->format('d M Y') }}</td>
                                    <td>{{ \Carbon\Carbon::parse($schedule->time)->format('H:i') }}</td>
                                    <td>{{ $schedule->location }}</td>
                                    <td>
                                        <!-- Button to Open Modal -->
                                        <button class="btn btn-primary btn-sm" data-toggle="modal" data-target="#detailScheduleModal{{ $schedule->id }}">
                                            Lihat
                                        </button>
                                        
                                        <!-- Modal -->
                                        <div class="modal fade" id="detailScheduleModal{{ $schedule->id }}" tabindex="-1" role="dialog" aria-labelledby="detailScheduleModalLabel{{ $schedule->id }}" aria-hidden="true">
                                            <div class="modal-dialog modal-lg" role="document"> <!-- Modal responsif -->
                                                <div class="modal-content">
                                                    <div class="modal-header" style="background-color: #001f3f; color: #fff;">
                                                        <h5 class="modal-title" id="detailScheduleModalLabel{{ $schedule->id }}">Detail Jadwal Bimbingan</h5>
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <p><strong>Mahasiswa:</strong> {{ $schedule->user->name }}</p>
                                                        <p><strong>Tanggal:</strong> {{ \Carbon\Carbon::parse($schedule->date)->format('d M Y') }}</p>
                                                        <p><strong>Waktu:</strong> {{ \Carbon\Carbon::parse($schedule->time)->format('H:i') }}</p>
                                                        <p><strong>Lokasi:</strong> {{ $schedule->location }}</p>
                                                        <p><strong>Catatan:</strong> {{ $schedule->note }}</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
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

@include('dosen.footer')
