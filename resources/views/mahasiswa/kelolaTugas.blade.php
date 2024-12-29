@include('mahasiswa.header')
@include('mahasiswa.sidebar')

<div class="content-wrapper">
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Kelola Tugas</h1>
                </div>
            </div>
        </div>
    </section>

    <section class="content">
        <div class="card">
            <div class="card-header" style="background-color: #E1FFBB">
                <h3 class="card-title">Daftar Tugas</h3>
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
                            <th>Deskripsi</th>
                            <th>Deadline</th>
                            <th>Status</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($tasks as $key => $task)
                        <tr>
                            <td>{{ $key + 1 }}</td>
                            <td>{{ $task->title }}</td>
                            <td>{{ $task->description }}</td>
                            <td>{{ $task->deadline }}</td>
                            <td>{{ ucfirst($task->status) }}</td>
                            <td>
                                <button class="btn btn-warning btn-sm btn-edit" data-task="{{ $task }}">Edit</button>
                                <form action="{{ route('mahasiswa.kelolaTugas.destroy', $task) }}" method="POST" style="display:inline-block;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm">Hapus</button>
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

@include('mahasiswa.footer')

<!-- Modal Edit -->
<div class="modal fade" id="editTaskModal" tabindex="-1" role="dialog" aria-labelledby="editTaskModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <form id="editTaskForm" method="POST">
            @csrf
            @method('PUT')
            <input type="hidden" name="task_id" id="taskId">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="editTaskModalLabel">Edit Tugas</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label>Judul Tugas</label>
                        <input type="text" name="title" class="form-control" id="taskTitle" required>
                    </div>
                    <div class="form-group">
                        <label>Deskripsi Tugas</label>
                        <textarea name="description" class="form-control" id="taskDescription"></textarea>
                    </div>
                    <div class="form-group">
                        <label>Deadline</label>
                        <input type="date" name="deadline" class="form-control" id="taskDeadline" required>
                    </div>
                    <div class="form-group">
                        <label>Status</label>
                        <select name="status" class="form-control" id="taskStatus" required>
                            <option value="pending">Pending</option>
                            <option value="completed">Completed</option>
                        </select>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                </div>
            </div>
        </form>
    </div>
</div>

<script>
    $(document).on('click', '.btn-edit', function () {
        var task = $(this).data('task');
        $('#taskId').val(task.id);
        $('#taskTitle').val(task.title);
        $('#taskDescription').val(task.description);
        $('#taskDeadline').val(task.deadline);
        $('#taskStatus').val(task.status);

        // Set the action attribute of the form with the task ID
        $('#editTaskForm').attr('action', '/mahasiswa/kelolaTugas/' + task.id);

        $('#editTaskModal').modal('show');
    });
</script>
