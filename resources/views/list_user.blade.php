@extends('layouts.app')

@section('content')

<div class="container mt-5">
    @if(session('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif
    <h1 class="text-center mb-4">LIST USER</h1>
    <hr>
    <a href="{{ route('user.create') }}" class="btn btn-primary mb-3">Tambah Pengguna Baru</a>

    <div class="table-responsive">
        <table class="table table-bordered table-striped table-hover w-100">
            <thead class="text-center" style="background-color: #55679C; color:white;">
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Nama</th>
                    <th scope="col">NPM</th>
                    <th scope="col">Kelas</th>
                    <th scope="col">Aksi</th>
                </tr>
            </thead>
            <tbody class="text-center" style="background-color: #F2F4F7;">
                @foreach($users as $user)
                <tr>
                    <td><?=$user['id'] ?></td>
                    <td><?=$user['nama'] ?></td>
                    <td><?=$user['npm'] ?></td>
                    <td><?=$user['nama_kelas'] ?></td>
                    <td>
                        <a href="{{route('user.show',$user->id)}}" class="btn btn-custom-action mb-3">
                             Detail
                        </a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

@endsection