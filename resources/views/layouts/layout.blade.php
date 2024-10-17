<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Data Sekolah</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary shadow-sm">
        <div class="container-fluid">
            <a class="navbar-brand" href="#"><i class="fas fa-user-graduate"></i> Manajemen Sekolah</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <div class="navbar-nav ms-auto">
                    <a class="nav-link {{ Route::is('home') ? 'active' : '' }}" href="/" aria-current="page"><i class="fas fa-home"></i> Beranda</a>

                    <!-- Dropdown untuk Siswa -->
                    <div class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="siswaDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="fas fa-user"></i> Siswa
                        </a>
                        <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="siswaDropdown">
                            <li><a class="dropdown-item" href="{{ route('siswas.index') }}"><i class="fas fa-list"></i> Daftar Siswa</a></li>
                            <li><a class="dropdown-item" href="{{ route('siswas.create') }}"><i class="fas fa-plus-circle"></i> Tambah Siswa</a></li>
                        </ul>
                    </div>

                    <!-- Dropdown untuk Guru -->
                    <div class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="guruDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="fas fa-user-tie"></i> Guru
                        </a>
                        <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="guruDropdown">
                            <li><a class="dropdown-item" href="{{ route('gurus.index') }}"><i class="fas fa-list"></i> Daftar Guru</a></li>
                            <li><a class="dropdown-item" href="{{ route('gurus.create') }}"><i class="fas fa-plus-circle"></i> Tambah Guru</a></li>
                        </ul>
                    </div>

                    {{-- <!-- Dropdown untuk Akun -->
                    <div class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="accountDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="fas fa-user"></i> Akun
                        </a>
                        <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="accountDropdown">
                            <li><a class="dropdown-item" href="{{ route('gurus.index') }}"><i class="fas fa-user-cog"></i> Kelola Akun</a></li>
                            <li><hr class="dropdown-divider"></li>
                            <li><a class="dropdown-item" href="#"><i class="fas fa-sign-out-alt"></i> Log Out</a></li>
                        </ul>
                    </div> --}}
                </div>
            </div>
        </div>
    </nav>

    <div class="container mt-5">
        @yield('content')
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/js/all.min.js"></script>
</body>
</html>
