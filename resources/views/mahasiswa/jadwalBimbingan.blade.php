@include('mahasiswa.header')
@include('mahasiswa.sidebar')

<div class="content-wrapper">
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Jadwal Bimbingan</h1>
                </div>
            </div>
        </div>
    </section>

    <section class="content">
        <div class="card">
            <div class="card-header" style="background-color: #E1FFBB">
                <h3 class="card-title">Jadwal Bimbingan Anda</h3>
                <button class="btn btn-primary btn-sm float-right" data-toggle="modal" data-target="#createModal">
                    Ajukan Jadwal Bimbingan
                </button>
            </div>

            <div class="card-body">
                @if($schedules->isEmpty())
                    <div class="alert alert-warning">
                        Tidak ada jadwal bimbingan saat ini.
                    </div>
                @else
                    <table class="table table-bordered table-hover">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Tanggal</th>
                                <th>Waktu</th>
                                <th>Lokasi</th>
                                <th>Catatan</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($schedules as $key => $schedule)
                            <tr>
                                <td>{{ $key + 1 }}</td>
                                <!-- Format tanggal menggunakan Carbon -->
                                <td>
                                    @if($schedule->date)
                                        {{ \Carbon\Carbon::parse($schedule->date)->translatedFormat('d F Y') }}
                                    @else
                                        Belum dijadwalkan
                                    @endif
                                </td>
                                <td>
                                    @if($schedule->time)
                                        {{ \Carbon\Carbon::parse($schedule->time)->format('H:i') }}
                                    @else
                                        Belum ditentukan
                                    @endif
                                </td>
                                <td>{{ $schedule->location ?? 'Tidak ada lokasi' }}</td>
                                <td>{{ $schedule->note ?? 'Tidak ada catatan' }}</td>
                                <td>
                                    <button class="btn btn-warning btn-sm" data-toggle="modal" data-target="#editModal{{ $schedule->id }}">Edit</button>
                                    <button class="btn btn-danger btn-sm" data-toggle="modal" data-target="#deleteModal{{ $schedule->id }}">Hapus</button>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                @endif
            </div>
        </div>
    </section>
</div>

<!-- Modal Tambah -->
<div class="modal fade" id="createModal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <form action="{{ route('mahasiswa.jadwalBimbingan.store', $mahasiswaId) }}" method="POST">
            @csrf
            <div class="modal-content">
                <div class="modal-header" style="background-color: #E1FFBB">
                    <h5 class="modal-title">Tambah Jadwal Bimbingan</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label for="date">Tanggal</label>
                        <input type="date" name="date" id="date" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="time">Waktu</label>
                        <input type="time" name="time" id="time" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="location">Lokasi</label>
                        <input type="text" name="location" id="location" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="note">Catatan</label>
                        <textarea name="note" id="note" class="form-control"></textarea>
                    </div>
                </div>
                <div class="modal-footer" style="background-color: #074799">
                    <button type="submit" class="btn btn-primary btn-sm">Simpan</button>
                    <button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">Batal</button>
                </div>
            </div>
        </form>
    </div>
</div>

<!-- Modal Edit -->
@foreach($schedules as $schedule)
<div class="modal fade" id="editModal{{ $schedule->id }}" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <form action="{{ route('mahasiswa.jadwalBimbingan.update', [$mahasiswaId, $schedule->id]) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="modal-content">
                <div class="modal-header" style="background-color: #FFE4B5">
                    <h5 class="modal-title">Edit Jadwal Bimbingan</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label for="date">Tanggal</label>
                        <input type="date" name="date" id="date" class="form-control" value="{{ $schedule->date }}" required>
                    </div>
                    <div class="form-group">
                        <label for="time">Waktu</label>
                        <input type="time" name="time" id="time" class="form-control" value="{{ $schedule->time }}" required>
                    </div>
                    <div class="form-group">
                        <label for="location">Lokasi</label>
                        <input type="text" name="location" id="location" class="form-control" value="{{ $schedule->location }}" required>
                    </div>
                    <div class="form-group">
                        <label for="note">Catatan</label>
                        <textarea name="note" id="note" class="form-control">{{ $schedule->note }}</textarea>
                    </div>
                </div>
                <div class="modal-footer" style="background-color: #FFE4B5">
                    <button type="submit" class="btn btn-primary btn-sm">Simpan</button>
                    <button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">Batal</button>
                </div>
            </div>
        </form>
    </div>
</div>
@endforeach

<!-- Modal Hapus -->
@foreach($schedules as $schedule)
<div class="modal fade" id="deleteModal{{ $schedule->id }}" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <form action="{{ route('mahasiswa.jadwalBimbingan.destroy', [$mahasiswaId, $schedule->id]) }}" method="POST">
            @csrf
            @method('DELETE')
            <div class="modal-content">
                <div class="modal-header" style="background-color: #FFC7C7">
                    <h5 class="modal-title">Hapus Jadwal Bimbingan</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <p>Apakah Anda yakin ingin menghapus jadwal ini?</p>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-danger btn-sm">Hapus</button>
                    <button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">Batal</button>
                </div>
            </div>
        </form>
    </div>
</div>
@endforeach

@include('mahasiswa.footer')
