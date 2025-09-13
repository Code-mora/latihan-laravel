<!DOCTYPE html>
<html>
<head>
     <title>Data Mata Kuliah</title>
</head>
<body>
     <h1>Tambah Mata Kuliah</h1>
     <form method="POST" action="/matkul">
     @csrf
        <input type="text" name="nama" placeholder="Nama Matkul"><br>
        <input type="text" name="deskripsi" placeholder="Deskripsi Singkat"><br>
        <button type="submit">Simpan</button>
 </form>

 <h2>List Mata Kuliah</h2>
    <ul>
        @foreach($data as $mtkl)
            <li>{{ $mtkl->nama }} - {{ $mtkl->deskripsi }}</li>
        @endforeach
    </ul>
</body>
</html>