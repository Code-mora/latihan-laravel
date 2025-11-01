<x-app-layout>
    <div class="max-w-xl mx-auto mt-8 bg-white p-6 rounded-lg shadow">
        @if (session('success'))
            <div class="mb-4 text-green-600">{{ session('success') }}</div>
        @endif

        <form method="POST" action="" enctype="multipart/form-data">
            @csrf

            {{-- Alamat Domisili --}}
            <div class="mb-4">
                <label class="block text-sm font-medium text-gray-700">Alamat Domisili Lengkap</label>
                <input type="text" name="domisili" value="{{ old('asal_sd', $data->asal_sd) }}"
                    class="mt-1 block w-full border-gray-300 rounded-md">
            </div>

            {{-- Provinsi --}}
            <div class="mb-4">
                <label class="block text-sm font-medium text-gray-700">Provinsi</label>
                <input type="text" name="provinsi" value="{{ old('asal_smp', $data->asal_smp) }}"
                    class="mt-1 block w-full border-gray-300 rounded-md">
            </div>

            {{-- Kota/Kabupaten --}}
            <div class="mb-4">
                <label class="block text-sm font-medium text-gray-700">Kota/Kabupaten</label>
                <input type="text" name="kota" value="{{ old('asal_sma', $data->asal_sma) }}"
                    class="mt-1 block w-full border-gray-300 rounded-md">
            </div>

            {{-- Kecamatan --}}
            <div class="mb-4">
                <label class="block text-sm font-medium text-gray-700">Kecamatan</label>
                <input type="file" name="kecamatan" class="mt-1 block w-full border-gray-300 rounded-md">
                @if ($data && $data->file_kk)
                    <p class="text-sm text-gray-600 mt-1">File saat ini:</p>
                    <a href="{{ asset('storage/'.$data->file_kk) }}" target="_blank"
                        class="text-blue-600 underline">Lihat KK</a>
                @endif
            </div>

            {{-- Kode Pos --}}
            <div class="mb-4">
                <label class="block text-sm font-medium text-gray-700">Kode Pos</label>
                <input type="file" name="kode_pos" class="mt-1 block w-full border-gray-300 rounded-md">
                @if ($data && $data->file_ijazah)
                    <p class="text-sm text-gray-600 mt-1">File saat ini:</p>
                    <a href="{{ asset('storage/'.$data->file_ijazah) }}" target="_blank"
                        class="text-blue-600 underline">Lihat Ijazah</a>
                @endif
            </div>

             {{-- Nama Ibu Kandung --}}
            <div class="mb-4">
                <label class="block text-sm font-medium text-gray-700">Nama Ibu Kandung</label>
                <input type="file" name="nama_ibu" class="mt-1 block w-full border-gray-300 rounded-md">
                @if ($data && $data->file_ijazah)
                    <p class="text-sm text-gray-600 mt-1">File saat ini:</p>
                    <a href="{{ asset('storage/'.$data->file_ijazah) }}" target="_blank"
                        class="text-blue-600 underline">Lihat Ijazah</a>
                @endif
            </div>

             {{-- Referensi / Sumber Informasi Pendaftaran --}}
            <div class="mb-4">
                <label class="block text-sm font-medium text-gray-700">Referensi/Sumber Informasi Pendaftaran</label>
                <input type="file" name="reference" class="mt-1 block w-full border-gray-300 rounded-md">
                @if ($data && $data->file_ijazah)
                    <p class="text-sm text-gray-600 mt-1">File saat ini:</p>
                    <a href="{{ asset('storage/'.$data->file_ijazah) }}" target="_blank"
                        class="text-blue-600 underline">Lihat Ijazah</a>
                @endif
            </div>

            <div class="flex justify-end">
                <button type="submit"
                    class="px-4 py-2 bg-blue-600 text-white rounded-md hover:bg-blue-700">
                    Simpan & Lanjut
                </button>
            </div>
        </form>
    </div>
</x-app-layout>
