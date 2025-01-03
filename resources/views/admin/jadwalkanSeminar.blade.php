@include('admin.header')
@include('admin.sidebar')

<div class="content-wrapper">
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Kelola Jadwal</h1>
                </div>
            </div>
        </div>
    </section>

    <section class="content">
        <div class="card">
            <div class="card-header" style="background-color: #E1FFBB">
                <h3 class="card-title">Daftar Jadwal</h3>
                <button class="btn btn-primary btn-sm float-right" data-toggle="modal" data-target="#createScheduleModal">
                    Tambah Jadwal
                </button>
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
                                <th>Mahasiswa</th>
                                <th>Tanggal</th>
                                <th>Waktu</th>
                                <th>Lokasi</th>
                                <th>Tipe</th>
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
                                <td>{{ ucfirst($schedule->type) }}</td>
                                <td>
                                    <button class="btn btn-warning btn-sm" data-toggle="modal" data-target="#editModal{{ $schedule->id }}">
                                        Edit
                                    </button>
                                    <button type="button" class="btn btn-danger btn-sm delete-button" 
                                            data-id="{{ $schedule->id }}" 
                                            data-url="{{ route('schedules.destroy', $schedule->id) }}" 
                                            data-toggle="modal" data-target="#confirmDeleteModal">
                                        Hapus
                                    </button>
                                </td>
                            </tr>

                            <!-- Modal Edit Data -->
                            <div class="modal fade" id="editModal{{ $schedule->id }}" tabindex="-1" role="dialog" aria-labelledby="editModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-lg" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header" style="background-color: #E1FFBB">
                                            <h5 class="modal-title" id="editModalLabel">Edit Jadwal Seminar</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <form action="{{ route('schedules.update', $schedule->id) }}" method="POST">
                                            @csrf
                                            @method('PUT')

                                            <div class="modal-body">
                                                <div class="form-group">
                                                    <label for="date">Tanggal</label>
                                                    <input type="date" class="form-control" name="date" value="{{ $schedule->date }}" required>
                                                </div>
                                                <div class="form-group">
                                                    <label for="time">Waktu</label>
                                                    <input type="time" class="form-control" name="time" value="{{ $schedule->time }}" required>
                                                </div>
                                                <div class="form-group">
                                                    <label for="location">Lokasi</label>
                                                    <input type="text" class="form-control" name="location" value="{{ $schedule->location }}" required>
                                                </div>
                                                <div class="form-group">
                                                    <label for="type">Tipe</label>
                                                    <select class="form-control" name="type" required>
                                                        <option value="bimbingan" {{ $schedule->type == 'bimbingan' ? 'selected' : '' }}>Bimbingan</option>
                                                        <option value="seminar" {{ $schedule->type == 'seminar' ? 'selected' : '' }}>Seminar</option>
                                                        <option value="ujian" {{ $schedule->type == 'ujian' ? 'selected' : '' }}>Ujian</option>
                                                    </select>
                                                </div>
                                            </div>

                                            <div class="modal-footer" style="background-color: #074799">
                                                <button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">Tutup</button>
                                                <button type="submit" class="btn btn-primary btn-sm">Simpan Perubahan</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <!-- Akhir Modal -->
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>
</div>

<!-- Modal Tambah Jadwal -->
<div class="modal fade" id="createScheduleModal" tabindex="-1" role="dialog" aria-labelledby="createScheduleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header" style="background-color: #E1FFBB">
                <h5 class="modal-title" id="createScheduleModalLabel">Tambah Jadwal Baru</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="{{ route('schedules.store') }}" method="POST">
                @csrf
                <div class="modal-body">
                    <div class="form-group">
                        <label for="user_id">Mahasiswa</label>
                        <select class="form-control" name="user_id" required>
                            @foreach($users as $user)  
                                <option value="{{ $user->id }}">{{ $user->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="date">Tanggal</label>
                        <input type="date" class="form-control" name="date" required>
                    </div>
                    <div class="form-group">
                        <label for="time">Waktu</label>
                        <input type="time" class="form-control" name="time" required>
                    </div>
                    <div class="form-group">
                        <label for="location">Lokasi</label>
                        <input type="text" class="form-control" name="location" required>
                    </div>
                    <div class="form-group">
                        <label for="type">Tipe</label>
                        <select class="form-control" name="type" required>
                            <option value="bimbingan">Bimbingan</option>
                            <option value="seminar">Seminar</option>
                            <option value="ujian">Ujian</option>
                        </select>
                    </div>
                </div>

                <div class="modal-footer" style="background-color: #074799">
                    <button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">Tutup</button>
                    <button type="submit" class="btn btn-primary btn-sm">Tambah Jadwal</button>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- Modal Konfirmasi Hapus -->
<div class="modal fade" id="confirmDeleteModal" tabindex="-1" role="dialog" aria-labelledby="confirmDeleteModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-sm" role="document">
        <div class="modal-content">
            <div class="modal-header" style="background-color: #FFC7C7">
                <h5 class="modal-title" id="confirmDeleteModalLabel">Konfirmasi Hapus</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                Apakah Anda yakin ingin menghapus jadwal ini?
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">Batal</button>
                <form id="deleteForm" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger btn-sm">Hapus</button>
                </form>
            </div>
        </div>
    </div>
</div>

@include('admin.footer')
