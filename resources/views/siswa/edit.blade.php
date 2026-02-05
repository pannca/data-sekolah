<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            ✏️ Edit Data Siswa
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-2xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6">
                    @if ($errors->any())
                        <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded mb-4">
                            <ul class="list-disc list-inside">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <form action="{{ route('siswas.update', $siswa['id']) }}" method="POST" class="space-y-6">
                        @csrf
                        @method('PATCH')
                        
                        <div>
                            <label for="name" class="block text-sm font-medium text-gray-700 mb-2">Nama Lengkap</label>
                            <input type="text" id="name" name="name" value="{{ $siswa['name'] }}" 
                                   class="w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500 @error('name') border-red-500 @enderror" 
                                   placeholder="Masukkan nama lengkap">
                            @error('name')
                                <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>

                        <div>
                            <label for="nis" class="block text-sm font-medium text-gray-700 mb-2">NIS (Nomor Induk Siswa)</label>
                            <input type="number" id="nis" name="nis" value="{{ $siswa['nis'] }}" 
                                   class="w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500 @error('nis') border-red-500 @enderror" 
                                   placeholder="Masukkan NIS">
                            @error('nis')
                                <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>

                        <div>
                            <label for="rombel" class="block text-sm font-medium text-gray-700 mb-2">Rombel</label>
                            <input type="text" id="rombel" name="rombel" value="{{ $siswa['rombel'] }}" 
                                   class="w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500 @error('rombel') border-red-500 @enderror" 
                                   placeholder="Masukkan rombel">
                            @error('rombel')
                                <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>

                        <div>
                            <label for="rayon" class="block text-sm font-medium text-gray-700 mb-2">Rayon</label>
                            <input type="text" id="rayon" name="rayon" value="{{ $siswa['rayon'] }}" 
                                   class="w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500 @error('rayon') border-red-500 @enderror" 
                                   placeholder="Masukkan rayon">
                            @error('rayon')
                                <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>

                        <div>
                            <label for="tempat_lahir" class="block text-sm font-medium text-gray-700 mb-2">Tempat Lahir</label>
                            <input type="text" id="tempat_lahir" name="tempat_lahir" value="{{ $siswa['tempat_lahir'] }}" 
                                   class="w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500 @error('tempat_lahir') border-red-500 @enderror" 
                                   placeholder="Masukkan tempat lahir">
                            @error('tempat_lahir')
                                <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="flex items-center justify-between pt-4">
                            <a href="{{ route('siswas.index') }}" class="bg-gray-500 hover:bg-gray-600 text-white px-4 py-2 rounded-md transition duration-200">
                                Kembali
                            </a>
                            <button type="submit" class="bg-blue-500 hover:bg-blue-600 text-white px-6 py-2 rounded-md transition duration-200">
                                Update Data
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
