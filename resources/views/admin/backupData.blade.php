@include('admin.header')
@include('admin.sidebar')

<div class="content-wrapper">
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Backup Data</h1>
                </div>
            </div>
        </div>
    </section>

    <section class="content">
        <div class="card">
            <div class="card-header" style="background-color: #E1FFBB">
                <h3 class="card-title">Backup Data Pengguna</h3>
            </div>
            <div class="card-body">
                <p class="lead">Fitur ini memungkinkan Anda untuk membuat cadangan data pengguna yang ada dalam sistem. Anda dapat mengunduh data dalam format JSON untuk keperluan backup atau pemulihan di masa depan.</p>
                
                <p>Dengan menekan tombol di bawah ini, Anda akan mengunduh file JSON yang berisi data pengguna, termasuk informasi penting seperti nama, email, peran, dan lainnya. Pastikan untuk membuat backup secara berkala untuk menjaga data sistem Anda tetap aman.</p>

                <form action="{{ route('admin.backupData') }}" method="POST">
                    @csrf
                    <button type="submit" class="btn btn-primary">Backup Data Sekarang</button>
                </form>

                <hr>

                <p class="text-muted">Catatan: Backup data hanya tersedia dalam format JSON dan akan mengunduh file yang berisi seluruh data pengguna saat ini. Pastikan Anda memiliki ruang penyimpanan yang cukup sebelum mengunduh.</p>
            </div>
        </div>
    </section>
</div>

@include('admin.footer')
