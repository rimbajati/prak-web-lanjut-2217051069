<!DOCTYPE html>
<html lang="en">

@extends('layouts.app')

@section('content')

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create User</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body style="background-color: #d4edda;">
    <div class="container mt-5">
        <div class="card shadow-lg col-md-6 mx-auto">
            <div class="card-body">
                <h3 class="text-center mb-4">Create User</h3>

                <form action="{{ route('user.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label for="nama" class="form-label">Nama:</label>
                        <input type="text" id="nama" name="nama" class="form-control" placeholder="Masukkan nama">
                    </div>

                    <div class="mb-3">
                        <label for="npm" class="form-label">NPM:</label>
                        <input type="text" id="npm" name="npm" class="form-control" placeholder="Masukkan NPM">
                    </div>

                    <div class="mb-3">
                        <label for="kelas" class="form-label">Kelas:</label>
                        <select name="kelas_id" id="kelas_id" class="form-select">
                            @foreach ($kelas as $kelasItem)
                            <option value="{{ $kelasItem->id }}">{{ $kelasItem->nama_kelas }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="mb-3">
                        <label for="foto" class="form-label">foto:</label>
                        <input type="file" id="foto" name="foto" class="form-control" placeholder="Masukan Foto">
                    </div>

                    <button type="submit" class="btn btn-success w-100">Submit</button>
                </form>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

@endsection
</html>
