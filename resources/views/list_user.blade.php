@extends('layouts.app')

@section('content')

<div class="container mt-5">
    <div class="card bg-light shadow-lg">
        <div class="card-body" style="background-color: #d4edda;">
            <h3 class="text-center mb-4">List User</h3>
            <table class="table table-bordered table-striped">
                <thead class="thead-dark">
                <a href="{{ route('user.create') }}" class="btn btn-primary mb-3">Tambah Pengguna Baru</a>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Nama</th>
                        <th scope="col">NPM</th>
                        <th scope="col">Kelas</th>
                        <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody class="table-group-divider">
                    <?php foreach ($users as $user) { ?>
                    <tr>
                        <td><?= $user['id'] ?></td>
                        <td><?= $user['nama'] ?></td>
                        <td><?= $user['npm'] ?></td>
                        <td><?= $user['nama_kelas'] ?></td>
                        <td><a href="{{ route('users.show', $user->id) }}"class="btn btn-warning mb-3">Detail</a></td>
                    </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

@endsection
