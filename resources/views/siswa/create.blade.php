@extends('layouts.layout')

@section('content')
    <form action="{{ route('siswas.store') }}" method="POST" class="card p-4 shadow-sm rounded border-0 bg-light">
        @csrf
        @if(Session::get('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ Session::get('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif  
        @if ($errors->any())
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                <ul class="mb-0">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif

        <h4 class="text-center mb-3">Tambah Siswa</h4>

        <div class="mb-3">
            <label for="name" class="form-label">Nama:</label>
            <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" value="{{ old('name') }}" placeholder="Nama Lengkap">
            @error('name')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="nis" class="form-label">NIS:</label>
            <input type="number" class="form-control @error('nis') is-invalid @enderror" id="nis" name="nis" value="{{ old('nis') }}" placeholder="Nomor Induk Siswa">
            @error('nis')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="rombel" class="form-label">Rombel:</label>
            <input type="text" class="form-control @error('rombel') is-invalid @enderror" id="rombel" name="rombel" value="{{ old('rombel') }}" placeholder="Rombel">
            @error('rombel')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="rayon" class="form-label">Rayon:</label>
            <input type="text" class="form-control @error('rayon') is-invalid @enderror" id="rayon" name="rayon" value="{{ old('rayon') }}" placeholder="Rayon">
            @error('rayon')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="tempat_lahir" class="form-label">Tempat Lahir:</label>
            <input type="text" class="form-control @error('tempat_lahir') is-invalid @enderror" id="tempat_lahir" name="tempat_lahir" value="{{ old('tempat_lahir') }}" placeholder="Tempat Lahir">
            @error('tempat_lahir')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <button type="submit" class="btn btn-primary w-100">Simpan</button>
    </form>
@endsection
