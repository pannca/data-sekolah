<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            ✏️ Edit Data Guru
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

                    <form action="{{ route('gurus.update', $guru['id']) }}" method="POST" class="space-y-6">
                        @csrf
                        @method('PATCH')
                        
                        <div>
                            <label for="name" class="block text-sm font-medium text-gray-700 mb-2">Nama Lengkap</label>
                            <input type="text" id="name" name="name" value="{{ $guru['name'] }}" 
                                   class="w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-green-500 focus:border-green-500 @error('name') border-red-500 @enderror" 
                                   placeholder="Masukkan nama lengkap">
                            @error('name')
                                <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>

                        <div>
                            <label for="umur" class="block text-sm font-medium text-gray-700 mb-2">Umur</label>
                            <input type="number" id="umur" name="umur" value="{{ $guru['umur'] }}" 
                                   class="w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-green-500 focus:border-green-500 @error('umur') border-red-500 @enderror" 
                                   placeholder="Masukkan umur" min="20" max="65">
                            @error('umur')
                                <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>

                        <div>
                            <label for="nuptk" class="block text-sm font-medium text-gray-700 mb-2">NUPTK</label>
                            <input type="text" id="nuptk" name="nuptk" value="{{ $guru['nuptk'] }}" 
                                   class="w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-green-500 focus:border-green-500 @error('nuptk') border-red-500 @enderror" 
                                   placeholder="Nomor Unik Pendidik dan Tenaga Kependidikan">
                            @error('nuptk')
                                <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>

                        <div>
                            <label for="mapel" class="block text-sm font-medium text-gray-700 mb-2">Mata Pelajaran</label>
                            <input type="text" id="mapel" name="mapel" value="{{ $guru['mapel'] }}" 
                                   class="w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-green-500 focus:border-green-500 @error('mapel') border-red-500 @enderror" 
                                   placeholder="Masukkan mata pelajaran">
                            @error('mapel')
                                <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>

                        <div>
                            <label for="jenis_kelamin" class="block text-sm font-medium text-gray-700 mb-2">Jenis Kelamin</label>
                            <select id="jenis_kelamin" name="jenis_kelamin" 
                                    class="w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-green-500 focus:border-green-500 @error('jenis_kelamin') border-red-500 @enderror">
                                <option value="Laki-laki" {{ $guru['jenis_kelamin'] == 'Laki-laki' ? 'selected' : '' }}>Laki-laki</option>
                                <option value="Perempuan" {{ $guru['jenis_kelamin'] == 'Perempuan' ? 'selected' : '' }}>Perempuan</option>
                            </select>
                            @error('jenis_kelamin')
                                <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="flex items-center justify-between pt-4">
                            <a href="{{ route('gurus.index') }}" class="bg-gray-500 hover:bg-gray-600 text-white px-4 py-2 rounded-md transition duration-200">
                                Kembali
                            </a>
                            <button type="submit" class="bg-green-500 hover:bg-green-600 text-white px-6 py-2 rounded-md transition duration-200">
                                Update Data
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
