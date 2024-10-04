@extends('layouts.app')

@section('content')
<style>
    .mb-3, .mt-2, .m-3 {
        margin-bottom: 1rem;
        margin-top: 1rem;
        margin-left: 1rem;
        margin-right: 1rem;
    }

    .btn-success {
        background-color: #28a745;
        border-color: #28a745;
        color: white;
        padding: 0.5rem 1rem;
        text-decoration: none;
    }

    .btn-success:hover {
        background-color: #218838;
        border-color: #1e7e34;
    }

    .table {
        width: 100%;
        margin-top: 1rem;
        border-collapse: collapse;
        font-family: Arial, sans-serif;
    }

    .table th, .table td {
        border: 1px solid #dee2e6;
        padding: 0.75rem;
        text-align: left;
        vertical-align: middle;
    }

    .table th {
        background-color: #f8f9fa;
        font-weight: bold;
    }

    .table-group-divider {
        border-top: 2px solid #dee2e6;
    }

    .table tbody tr:hover {
        background-color: #f1f1f1;
    }
</style>

<div class="mb-3 mt-2 m-3">
    <a href="{{ route('user.create') }}" class="btn btn-success">Tambah User</a>
</div>

<table class="table">
    <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Nama</th>
            <th scope="col">NPM</th>
            <th scope="col">Kelas</th>
            <th scope="col">Aksi</th>
        </tr>
    </thead>
    <tbody class="table-group-divider">
        <?php
        foreach ($users as $user) {
        ?>
        <tr>
            <td><?= $user['id'] ?></td>
            <td><?= $user['nama'] ?></td>
            <td><?= $user['npm'] ?></td>
            <td><?= $user['nama_kelas'] ?></td>
            <td></td>
        </tr>
        <?php
        }
        ?>
    </tbody>
</table>
@endsection
