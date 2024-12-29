@include('mahasiswa.header')
@include('mahasiswa.sidebar')

<div class="content-wrapper">
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Daftar Seminar</h1>
                </div>
            </div>
        </div>
    </section>

    <section class="content">
        <div class="card">
            <div class="card-header" style="background-color: #E1FFBB">
                <h3 class="card-title">Seminar yang Terdaftar</h3>
                <button class="btn btn-primary btn-sm float-right" data-toggle="modal" data-target="#registerSeminarModal">
                    Daftar Seminar
                </button>
            </div>

            <div class="card-body">
                <table class="table table-bordered table-hover">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Judul</th>
                            <th>Tanggal</th>
                            <th>Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($seminars as $key => $seminar)
                        <tr>
                            <td>{{ $key + 1 }}</td>
                            <td>{{ $seminar->title }}</td>
                            <td>{{ $seminar->date }}</td>
                            <td>{{ ucfirst($seminar->status) }}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </section>
</div>

@include('mahasiswa.footer')
