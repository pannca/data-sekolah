@extends('layouts.layout')

@section('content')
<div class="container mt-5">
    <div class="card border-0">
        <div class="card-header bg-light text-dark">
            <h3 class="mb-0">Edit Data Siswa</h3>
        </div>
        <div class="card-body">
            <form action="{{ route('siswas.update', $siswa['id']) }}" method="POST">
                @csrf
                @method('PATCH')

                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul class="mb-0">
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <div class="mb-3">
                    <label for="name" class="form-label">Nama:</label>
                    <input type="text" class="form-control" id="name" name="name" 
                           placeholder="Masukkan Nama Siswa" value="{{ $siswa['name'] }}">
                </div>

                <div class="mb-3">
                    <label for="nis" class="form-label">NIS:</label>
                    <input type="number" class="form-control" id="nis" name="nis" 
                           placeholder="Masukkan NIS Siswa" value="{{ $siswa['nis'] }}">
                </div>

                <div class="mb-3">
                    <label for="rombel" class="form-label">Rombel:</label>
                    <input type="text" class="form-control" id="rombel" name="rombel" 
                           placeholder="Masukkan Rombel" value="{{ $siswa['rombel'] }}">
                </div>

                <div class="mb-3">
                    <label for="rayon" class="form-label">Rayon:</label>
                    <input type="text" class="form-control" id="rayon" name="rayon" 
                           placeholder="Masukkan Rayon" value="{{ $siswa['rayon'] }}">
                </div>

                <div class="mb-3">
                    <label for="tempat_lahir" class="form-label">Tempat Lahir:</label>
                    <input type="text" class="form-control" id="tempat_lahir" name="tempat_lahir" 
                           placeholder="Masukkan Tempat Lahir" value="{{ $siswa['tempat_lahir'] }}">
                </div>

                <div class="text-end">
                    <button type="submit" class="btn btn-primary">
                        Ubah Data
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
