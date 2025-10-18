<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-x1 text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Data Mata Kuliah') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7x1 mx-auto sm:px-6 lg:px-8">

            {{-- Form Tambah Mata Kuliah --}}
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg mb-6">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <h3 class="font-semibold text-lg mb-4">Tambah Mata Kuliah</h3>
                    <form method="POST" action="{{ route('matkul.store') }}" class="space-y-4">
                        @csrf 
                        <input type="text" name="nama" placeholder="Mata Kuliah"
                                class="border-gray-300 rounded-md w-full">
                        <input type="text" name="deskripsi" placeholder="Deskripsi Singkat"
                                class="border-gray-300 rounded-md w-full">
                        <button type="submit"
                                class="px-4 py-2 bg-blue-600 text-white rounded hover:bg-blue-700">
                            Simpan
                        </button>
                    </form>
                </div>
            </div>

            {{-- List Mata Kuliah --}}
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <h3 class="font-semibold text-lg mb-4">List Mata Kuliah</h3>
                    <table class="table-auto w-full border">
                        <thead class="bg-gray-200 text-gray-700">
                            <tr>
                                <th class="px-4 py-2 border">Mata Kuliah</th>
                                <th class="px-4 py-2 border">Deskripsi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($data as $mtkl)
                                <tr>
                                    <td class="border px-4 py-2">{{ $mtkl->nama}}</td>
                                    <td class="border px-4 py-2">{{ $mtkl->deskripsi}}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>

        </div>
    </div>
</x-app-layout>