<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-x1 text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Data Ruangan') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7x1 mx-auto sm:px-6 lg:px-8">

            {{-- Form Tambah Ruangan --}}
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg mb-6">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <h3 class="font-semibold text-lg mb-4">Tambah Ruangan</h3>
                    <form method="POST" action="{{ route('kelas.store') }}" class="space-y-4">
                        @csrf 
                        <input type="text" name="ruangan" placeholder="Ruangan"
                                class="border-gray-300 rounded-md w-full">
                        <input type="text" name="jumlah" placeholder="Kapasitas Ruangan"
                                class="border-gray-300 rounded-md w-full">
                        <button type="submit"
                                class="px-4 py-2 bg-blue-600 text-white rounded hover:bg-blue-700">
                            Simpan
                        </button>
                    </form>
                </div>
            </div>

            {{-- List Mahasiswa --}}
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <h3 class="font-semibold text-lg mb-4">List Ruangan</h3>
                    <table class="table-auto w-full border">
                        <thead class="bg-gray-200 text-gray-700">
                            <tr>
                                <th class="px-4 py-2 border">Ruangan</th>
                                <th class="px-4 py-2 border">Kapasitas</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($data as $rgn)
                                <tr>
                                    <td class="border px-4 py-2">{{ $rgn->ruangan}}</td>
                                    <td class="border px-4 py-2">{{ $rgn->jumlah}}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>

        </div>
    </div>
</x-app-layout>