@extends('layouts.layout')

@section('content')
<div class="container mt-5">
    <h3>Edit Data Guru</h3>
    <form action="{{ route('gurus.update', $guru['id']) }}" method="POST">
        @csrf
        @method('PATCH')

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <div class="mb-3">
            <label for="name" class="form-label">Nama:</label>
            <input type="text" class="form-control" id="name" name="name" 
                   placeholder="Masukkan Nama Guru" value="{{ $guru['name'] }}">
        </div>

        <div class="mb-3">
            <label for="umur" class="form-label">Umur:</label>
            <input type="number" class="form-control" id="umur" name="umur" 
                   placeholder="Masukkan Umur Guru" value="{{ $guru['umur'] }}">
        </div>

        <div class="mb-3">
            <label for="nuptk" class="form-label">NUPTK:</label>
            <input type="number" class="form-control" id="nuptk" name="nuptk" 
                   placeholder="Masukkan NUPTK" value="{{ $guru['nuptk'] }}">
        </div>

        <div class="mb-3">
            <label for="mapel" class="form-label">Mapel:</label>
            <input type="text" class="form-control" id="mapel" name="mapel" 
                   placeholder="Masukkan Mata Pelajaran" value="{{ $guru['mapel'] }}">
        </div>

        <div class="mb-3">
            <label for="jenis_kelamin" class="form-label">Jenis Kelamin:</label>
            <select name="jenis_kelamin" id="jenis_kelamin" class="form-select">
                <option value="L" {{ $guru['jenis_kelamin'] == 'L' ? 'selected' : '' }}>Laki-laki</option>
                <option value="P" {{ $guru['jenis_kelamin'] == 'P' ? 'selected' : '' }}>Perempuan</option>
            </select>
        </div>

        <div class="mt-3">
            <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
        </div>
    </form>
</div>
@endsection
