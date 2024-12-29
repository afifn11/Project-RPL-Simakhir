@include('dosen.header')
@include('dosen.sidebar')

<div class="content-wrapper">
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Kelola Pendaftaran Seminar</h1>
                </div>
            </div>
        </div>
    </section>

    <section class="content">
        <div class="card">
            <div class="card-header" style="background-color: #E1FFBB">
                <h3 class="card-title">Daftar Pendaftaran Seminar</h3>
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
                            <th>Judul Seminar</th>
                            <th>Status</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($seminars as $key => $seminar)
                        <tr>
                            <td>{{ $key + 1 }}</td>
                            <td>{{ $seminar->user->name }}</td>
                            <td>{{ $seminar->document->title ?? 'Judul tidak tersedia' }}</td> <!-- Judul dari Documents -->
                            <td>{{ ucfirst($seminar->status) }}</td>
                            <td>
                            <form action="{{ route('dosen.pendaftaranSeminar.approve', $seminar->id) }}" method="POST" class="d-inline">
                                @csrf
                                <button class="btn btn-success btn-sm">Setujui</button>
                            </form>

                            <form action="{{ route('dosen.pendaftaranSeminar.reject', $seminar->id) }}" method="POST" class="d-inline">
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