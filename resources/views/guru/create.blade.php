@extends('layouts.layout')

@section('content')
    <form action="{{ route('gurus.store') }}" method="POST" class="card p-4 shadow-sm rounded border-0 bg-light">
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

        <h4 class="text-center mb-3">Tambah guru</h4>

        <div class="mb-3">
            <label for="name" class="form-label">Nama:</label>
            <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" value="{{ old('name') }}" placeholder="Nama Lengkap">
            @error('name')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="umur" class="form-label">Umur:</label>
            <input type="number" class="form-control @error('umur') is-invalid @enderror" id="umur" name="umur" value="{{ old('umur') }}" placeholder="Masukan Umur Anda..">
            @error('umur')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="nuptk" class="form-label">Nuptk:</label>
            <input type="number" class="form-control @error('nuptk') is-invalid @enderror" id="nuptk" name="nuptk" value="{{ old('nuptk') }}" placeholder="Nomor Unik Pendidik dan Tenaga Kependidikan">
            @error('nuptk')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="mapel" class="form-label">Mapel:</label>
            <input type="text" class="form-control @error('mapel') is-invalid @enderror" id="mapel" name="mapel" value="{{ old('mapel') }}" placeholder="Mata Pelajaran">
            @error('mapel')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3 row">
            <label for="jenis_kelamin" class="col-sm-1.5 col-form-label">Jenis Kelamin: </label>
            <div class="col-sm-10">
                <select class="form-select" name="jenis_kelamin" id="jenis_kelamin">
                    <option selected disabled hidden>Pilih</option>
                    <option value="L" {{ old('jenis_kelamin') == 'L' ? 'selected' : '' }}>Laki-Laki</option>
                    <option value="p" {{ old('jenis_kelamin') == 'P' ? 'selected' : '' }}>Perempuan</option>
                </select>
            </div>
        </div>

        <button type="submit" class="btn btn-primary w-100">Simpan</button>
    </form>
@endsection
