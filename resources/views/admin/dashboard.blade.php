<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            📊 Dashboard Admin
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <!-- Welcome Card -->
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg mb-6">
                <div class="p-6 border-l-4 border-blue-500">
                    <h3 class="text-lg font-semibold text-gray-900">Selamat Datang, {{ Auth::user()->name }}!</h3>
                    <p class="text-gray-600 mt-1">Anda login sebagai Administrator. Kelola data sekolah dengan mudah.</p>
                </div>
            </div>

            <!-- Stats Cards -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-6">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6">
                        <div class="flex items-center">
                            <div class="p-3 rounded-full bg-blue-100">
                                <div class="text-2xl text-blue-600">👨‍🎓</div>
                            </div>
                            <div class="ml-4">
                                <p class="text-sm font-medium text-gray-600">Total Siswa</p>
                                <p class="text-2xl font-bold text-gray-900">{{ \App\Models\Siswa::count() ?? 0 }}</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6">
                        <div class="flex items-center">
                            <div class="p-3 rounded-full bg-green-100">
                                <div class="text-2xl text-green-600">👨‍🏫</div>
                            </div>
                            <div class="ml-4">
                                <p class="text-sm font-medium text-gray-600">Total Guru</p>
                                <p class="text-2xl font-bold text-gray-900">{{ \App\Models\Guru::count() ?? 0 }}</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6">
                        <div class="flex items-center">
                            <div class="p-3 rounded-full bg-purple-100">
                                <div class="text-2xl text-purple-600">👥</div>
                            </div>
                            <div class="ml-4">
                                <p class="text-sm font-medium text-gray-600">Total User</p>
                                <p class="text-2xl font-bold text-gray-900">{{ \App\Models\User::count() }}</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6">
                        <div class="flex items-center">
                            <div class="p-3 rounded-full bg-orange-100">
                                <div class="text-2xl text-orange-600">🏫</div>
                            </div>
                            <div class="ml-4">
                                <p class="text-sm font-medium text-gray-600">Status</p>
                                <p class="text-lg font-bold text-gray-900">Aktif</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Quick Actions -->
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6">
                    <h3 class="text-lg font-semibold text-gray-900 mb-4">⚡ Aksi Cepat</h3>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                        <a href="{{ route('siswas.create') }}" class="flex items-center p-4 bg-blue-50 hover:bg-blue-100 rounded-lg transition duration-200">
                            <div class="text-2xl text-blue-600 mr-3">➕</div>
                            <div>
                                <h4 class="font-semibold text-blue-900">Tambah Siswa</h4>
                                <p class="text-sm text-blue-700">Daftarkan siswa baru</p>
                            </div>
                        </a>
                        <a href="{{ route('gurus.create') }}" class="flex items-center p-4 bg-green-50 hover:bg-green-100 rounded-lg transition duration-200">
                            <div class="text-2xl text-green-600 mr-3">➕</div>
                            <div>
                                <h4 class="font-semibold text-green-900">Tambah Guru</h4>
                                <p class="text-sm text-green-700">Daftarkan guru baru</p>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>