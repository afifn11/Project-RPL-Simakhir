@include('mahasiswa.header')
@include('mahasiswa.sidebar')

<div class="content-wrapper">
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Unggah Dokumen</h1>
                </div>
            </div>
        </div>
    </section>

    <section class="content">
        <div class="card">
            <div class="card-header" style="background-color: #E1FFBB">
                <h3 class="card-title">Dokumen Anda</h3>
                <button class="btn btn-primary btn-sm float-right" data-toggle="modal" data-target="#uploadModal">
                    Unggah Dokumen
                </button>
            </div>

            <div class="card-body">
                @if (session('success'))
                    <div class="alert alert-success">{{ session('success') }}</div>
                @endif

                <div class="table-responsive">
                    <table class="table table-bordered table-hover">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama Dokumen</th>
                                <th>Tanggal Unggah</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @if ($documents->isEmpty())
                                <tr>
                                    <td colspan="4" class="text-center">Belum ada dokumen yang diunggah.</td>
                                </tr>
                            @else
                                @foreach($documents as $key => $document)
                                    <tr>
                                        <td>{{ $key + 1 }}</td>
                                        <td>{{ $document->title }}</td>
                                        <td>{{ \Carbon\Carbon::parse($document->created_at)->translatedFormat('d F Y') }}</td>
                                        <td>
                                            <a href="{{ route('documents.download', $document->id) }}" class="btn btn-success btn-sm">Unduh</a>
                                            <button type="button" class="btn btn-warning btn-sm" data-toggle="modal" data-target="#editModal-{{ $document->id }}">Edit</button>
                                            <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#deleteModal-{{ $document->id }}">Hapus</button>
                                        </td>
                                    </tr>

                                    <!-- Modal Edit -->
                                    <div class="modal fade" id="editModal-{{ $document->id }}" tabindex="-1" role="dialog" aria-labelledby="editModalLabel-{{ $document->id }}" aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                            <form action="{{ route('mahasiswa.unggahDokumen.update', $document->id) }}" method="POST" enctype="multipart/form-data">
                                                @csrf
                                                @method('PUT')
                                                <div class="modal-content">
                                                    <div class="modal-header" style="background-color: #FFE4B5">
                                                        <h5 class="modal-title" id="editModalLabel-{{ $document->id }}">Edit Dokumen</h5>
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <div class="form-group">
                                                            <label for="title-{{ $document->id }}">Nama Dokumen</label>
                                                            <input type="text" name="title" id="title-{{ $document->id }}" class="form-control" value="{{ $document->title }}" required>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="file-{{ $document->id }}">Ganti File (opsional)</label>
                                                            <input type="file" name="file" id="file-{{ $document->id }}" class="form-control">
                                                            <small class="form-text text-muted">Format file: PDF, DOC, DOCX (max: 2MB)</small>
                                                        </div>
                                                    </div>
                                                    <div class="modal-footer" style="background-color: #FFE4B5">
                                                        <button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">Batal</button>
                                                        <button type="submit" class="btn btn-primary btn-sm">Simpan Perubahan</button>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>

                                    <!-- Modal Hapus -->
                                    <div class="modal fade" id="deleteModal-{{ $document->id }}" tabindex="-1" role="dialog" aria-labelledby="deleteModalLabel-{{ $document->id }}" aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                            <form action="{{ route('mahasiswa.unggahDokumen.destroy', $document->id) }}" method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <div class="modal-content">
                                                    <div class="modal-header" style="background-color: #FFC7C7">
                                                        <h5 class="modal-title" id="deleteModalLabel-{{ $document->id }}">Konfirmasi Hapus</h5>
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body">
                                                        Apakah Anda yakin ingin menghapus dokumen "<strong>{{ $document->title }}</strong>"?
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">Batal</button>
                                                        <button type="submit" class="btn btn-danger btn-sm">Hapus</button>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                @endforeach
                            @endif
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>
</div>

<!-- Modal Unggah Dokumen -->
<div class="modal fade" id="uploadModal" tabindex="-1" role="dialog" aria-labelledby="uploadModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <form action="{{ route('mahasiswa.unggahDokumen.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="modal-content">
                <div class="modal-header" style="background-color: #E1FFBB">
                    <h5 class="modal-title" id="uploadModalLabel">Unggah Dokumen</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label for="title">Nama Dokumen</label>
                        <input type="text" name="title" id="title" class="form-control" placeholder="Masukkan nama dokumen" required>
                    </div>
                    <div class="form-group">
                        <label for="file">Pilih File</label>
                        <input type="file" name="file" id="file" class="form-control" required>
                        <small class="form-text text-muted">Format file: PDF, DOC, DOCX (max: 2MB)</small>
                    </div>
                </div>
                <div class="modal-footer" style="background-color: #074799">
                    <button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">Batal</button>
                    <button type="submit" class="btn btn-primary btn-sm">Unggah</button>
                </div>
            </div>
        </form>
    </div>
</div>

@include('mahasiswa.footer')
