@include('dosen.header')
@include('dosen.sidebar')

<div class="content-wrapper">
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Penilaian Seminar</h1>
                </div>
            </div>
        </div>
    </section>

    <section class="content">
        <div class="card">
            <div class="card-header" style="background-color: #E1FFBB">
                <h3 class="card-title">Daftar Seminar untuk Dinilai</h3>
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
                            <th>Judul</th>
                            <th>Tanggal</th>
                            <th>Nilai</th>
                            <th>Komentar</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($seminars as $key => $seminar)
                        <tr>
                            <td>{{ $key + 1 }}</td>
                            <td>{{ $seminar->user->name }}</td>
                            <td>{{ $seminar->title }}</td>
                            <td>{{ $seminar->date }}</td>
                            <td>{{ $seminar->grade ?? 'Belum Dinilai' }}</td>
                            <td>{{ $seminar->comment ?? '-' }}</td>
                            <td>
                                <button class="btn btn-warning btn-sm" data-toggle="modal" data-target="#gradeModal{{ $seminar->id }}">
                                    Berikan Nilai
                                </button>
                            </td>
                        </tr>

                        <!-- Modal Berikan Nilai -->
                        <div class="modal fade" id="gradeModal{{ $seminar->id }}" tabindex="-1" role="dialog" aria-labelledby="gradeModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header" style="background-color: #E1FFBB">
                                        <h5 class="modal-title" id="gradeModalLabel">Penilaian Seminar</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <form action="{{ route('dosen.penilaian-seminar.grade', $seminar->id) }}" method="POST">
                                    @csrf
                                    <div class="modal-body">
                                        <div class="form-group">
                                            <label for="score">Nilai</label>
                                            <input type="number" class="form-control" name="score" min="0" max="100" value="{{ $seminar->grade }}" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="comments">Komentar</label>
                                            <textarea class="form-control" name="comments" rows="3">{{ $seminar->comment }}</textarea>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">Tutup</button>
                                        <button type="submit" class="btn btn-primary btn-sm">Simpan</button>
                                    </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </tbody>

                </table>
            </div>
        </div>
    </section>
</div>

@include('dosen.footer')
