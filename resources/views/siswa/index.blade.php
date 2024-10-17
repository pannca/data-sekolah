@extends('layouts.layout')

@section('content')
    @if (Session::get('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif
    @if (Session::get('delete'))
        <div class="alert alert-danger">{{ Session::get('delete') }}</div>
    @endif
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
    <div class="container mt-5">
        <div class="d-flex justify-content-between align-items-center mb-4">
            <h2>Daftar Siswa</h2>
        </div>

        <div class="table-responsive">
            <table class="table table-striped table-bordered table-hover align-middle">
                <thead class="table-primary">
                    <tr>
                        <th>No</th>
                        <th><i class="bi bi-person-fill"></i> Nama</th>
                        <th><i class="bi bi-card-text"></i> NIS</th>
                        <th><i class="bi bi-people-fill"></i> Rombel</th>
                        <th><i class="bi bi-geo-alt-fill"></i> Rayon</th>
                        <th><i class="bi bi-calendar-event-fill"></i> Tempat Lahir</th>
                        <th class="text-center"><i class="bi bi-tools"></i> Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @php $no = 1; @endphp
                    @forelse ($siswas as $item)
                        <tr>
                            <td>{{ $no++ }}</td>
                            <td>{{ $item['name'] }}</td>
                            <td>{{ $item['nis'] }}</td>
                            <td>{{ $item['rombel'] }}</td>
                            <td>{{ $item['rayon'] }}</td>
                            <td>{{ $item['tempat_lahir'] }}</td>
                            <td class="text-center">
                                <div class="d-flex justify-content-center">
                                    <a href="{{ route('siswas.edit', $item['id']) }}" class="btn btn-sm btn-primary me-2" data-bs-toggle="tooltip" title="Edit Siswa">
                                        <i class="fa-solid fa-pen-to-square"></i> Edit
                                    </a>
                                    <form action="{{ route('siswas.delete' , $item['id']) }}" method="POST" style="display: inline;">
                                        @csrf
                                        @method('DELETE')
                                        <button class="btn btn-sm btn-danger" data-bs-toggle="tooltip" type="submit">
                                            <i class="fa-solid fa-trash"></i> Hapus
                                        </button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="7" class="text-center text-muted">Tidak ada data siswa yang tersedia.</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
@endsection
