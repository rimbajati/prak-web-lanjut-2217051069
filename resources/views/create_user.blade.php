@extends('layouts.app')

@section('content')

<style>
    body {
        background-color: #f8f9fa;
        font-family: 'Roboto', sans-serif;
    }

    .container {
        background-color: #ffffff;
        border-radius: 15px;
        box-shadow: 0 10px 25px rgba(0, 0, 0, 0.1);
        padding: 30px;
    }

    .card {
        border: none;
    }

    h2 {
        font-size: 1.75rem;
        color: #007bff;
        font-weight: 700;
        margin-bottom: 1.5rem;
    }

    .form-label {
        font-weight: 500;
        color: #343a40;
    }

    .form-control, .form-select {
        border: 2px solid #ced4da;
        border-radius: 8px;
        padding: 10px;
        transition: border-color 0.3s ease, box-shadow 0.3s ease;
    }

    .form-control:focus, .form-select:focus {
        border-color: #007bff;
        box-shadow: 0 0 5px rgba(0, 123, 255, 0.2);
    }

    .mb-3 {
        margin-bottom: 1.5rem !important;
    }

    .text-danger {
        font-size: 0.875rem;
        margin-top: 0.5rem;
    }

    .btn-custom {
        background-color: #007bff;
        color: #ffffff;
        border-radius: 8px;
        padding: 10px 20px;
        font-size: 1rem;
        transition: background-color 0.3s ease, box-shadow 0.3s ease;
        border: none;
    }

    .btn-custom:hover {
        background-color: #0056b3;
        box-shadow: 0 5px 15px rgba(0, 123, 255, 0.3);
    }

    .btn-custom:focus {
        outline: none;
        box-shadow: 0 0 5px rgba(0, 123, 255, 0.5);
    }

    .text-center {
        margin-top: 20px;
    }

    input[type="file"] {
        border: none;
    }

    a.btn-custom {
        background-color: #6c757d;
    }

    a.btn-custom:hover {
        background-color: #5a6268;
    }

    a.btn-custom:focus {
        box-shadow: 0 0 5px rgba(108, 117, 125, 0.5);
    }

</style>
    <div class="container d-flex justify-content-center align-items-center vh-100">
        <div class="card p-4" style="width: 30rem;">
            <h2 class="text-center mb-4">Form Create User</h2>
            <form action="{{ route('user.store') }}" method="POST" enctype="multipart/form-data"> 
                @csrf
                <div class="mb-3">
                    <label for="nama" class="form-label">Nama:</label>
                    <input type="text" id="nama" name="nama" class="form-control" placeholder="Masukkan Nama">
                    @foreach($errors->get('nama') as $msg)
                        <p class="text-danger">Nama Harus Diisi</p>
                    @endforeach     
                </div>
                <div class="mb-3">
                    <label for="npm" class="form-label">NPM:</label>
                    <input type="text" id="npm" name="npm" class="form-control" placeholder="Masukkan NPM">
                    @foreach($errors->get('npm') as $msg)
                        <p class="text-danger">NPM Harus Diisi</p>
                    @endforeach 
                </div>
                <div class="mb-3">
                    <label for="kelas" class="form-label">Kelas:</label>
                    <select name="kelas_id" id="kelas_id" class="form-select" >
                        <option value="" disabled selected>Pilih Kelas</option>
                        @foreach($kelas as $kelasItem)
                        <option value="{{$kelasItem->id}}">{{$kelasItem->nama_kelas}}</option>
                        @endforeach
                    </select>
                    @foreach($errors->get('kelas_id') as $msg)
                        <p class="text-danger">Kelas Harus Dipilih</p>
                    @endforeach                 
                </div>
                <div class="mb-3">
                    <label for="foto" class="form-label">Foto:</label>
                    <input type="file" id="foto" name="foto" class="form-control" placeholder="Upload File"> 
                </div>
                <div class="text-center">
                    <input type="submit" class="btn btn-custom" value="Submit">
                    <a href="{{ url('/user') }}" class="btn btn-custom">Back</a>
                </div>
            </form>
        </div>
    </div>
@endsection