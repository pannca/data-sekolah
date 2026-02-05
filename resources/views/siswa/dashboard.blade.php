<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            👨🎓 Dashboard Siswa
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-4xl mx-auto sm:px-6 lg:px-8">
            <!-- Welcome Card -->
            <div class="bg-gradient-to-r from-blue-500 to-purple-600 overflow-hidden shadow-lg sm:rounded-lg mb-6">
                <div class="p-6 text-white">
                    <div class="flex items-center">
                        <div class="text-4xl mr-4">👋</div>
                        <div>
                            <h3 class="text-xl font-bold">Selamat Datang, {{ Auth::user()->name }}!</h3>
                            <p class="text-blue-100 mt-1">Anda login sebagai siswa di sistem manajemen sekolah</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Profile Info Card -->
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg mb-6">
                <div class="p-6">
                    <div class="flex items-center mb-4">
                        <div class="text-2xl text-blue-600 mr-3">📝</div>
                        <h3 class="text-lg font-semibold text-gray-900">Informasi Profil</h3>
                    </div>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div class="flex items-center p-3 bg-gray-50 rounded-lg">
                            <div class="text-xl text-gray-600 mr-3">👤</div>
                            <div>
                                <p class="text-sm text-gray-600">Nama Lengkap</p>
                                <p class="font-semibold text-gray-900">{{ Auth::user()->name }}</p>
                            </div>
                        </div>
                        <div class="flex items-center p-3 bg-gray-50 rounded-lg">
                            <div class="text-xl text-gray-600 mr-3">✉️</div>
                            <div>
                                <p class="text-sm text-gray-600">Email</p>
                                <p class="font-semibold text-gray-900">{{ Auth::user()->email }}</p>
                            </div>
                        </div>
                        <div class="flex items-center p-3 bg-gray-50 rounded-lg">
                            <div class="text-xl text-gray-600 mr-3">🏆</div>
                            <div>
                                <p class="text-sm text-gray-600">Status</p>
                                <p class="font-semibold text-green-600 capitalize">{{ Auth::user()->role }}</p>
                            </div>
                        </div>
                        <div class="flex items-center p-3 bg-gray-50 rounded-lg">
                            <div class="text-xl text-gray-600 mr-3">📅</div>
                            <div>
                                <p class="text-sm text-gray-600">Bergabung</p>
                                <p class="font-semibold text-gray-900">{{ Auth::user()->created_at->format('d M Y') }}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Menu Siswa -->
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6">
                    <div class="flex items-center mb-4">
                        <div class="text-2xl text-purple-600 mr-3">📚</div>
                        <h3 class="text-lg font-semibold text-gray-900">Menu Siswa</h3>
                    </div>
                    <div class="text-center py-8">
                        <div class="text-6xl text-gray-300 mb-4">🚀</div>
                        <h4 class="text-lg font-semibold text-gray-700 mb-2">Fitur Segera Hadir!</h4>
                        <p class="text-gray-500">Sistem sedang dalam pengembangan untuk memberikan pengalaman terbaik bagi siswa.</p>
                        <div class="mt-6 grid grid-cols-1 md:grid-cols-3 gap-4 text-sm">
                            <div class="p-3 bg-blue-50 rounded-lg">
                                <div class="text-2xl text-blue-500 mb-2">📊</div>
                                <p class="font-medium text-blue-900">Lihat Nilai</p>
                            </div>
                            <div class="p-3 bg-green-50 rounded-lg">
                                <div class="text-2xl text-green-500 mb-2">📅</div>
                                <p class="font-medium text-green-900">Jadwal Pelajaran</p>
                            </div>
                            <div class="p-3 bg-purple-50 rounded-lg">
                                <div class="text-2xl text-purple-500 mb-2">📝</div>
                                <p class="font-medium text-purple-900">Tugas & PR</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>