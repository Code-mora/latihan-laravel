<!DOCTYPE html>
<html>
<head>
     <title>Data Ruangan</title>
</head>
<body>
     <h1>Tambah Ruangan</h1>
     <form method="POST" action="/Kelas">
     @csrf
        <input type="text" name="ruangan" placeholder="Nama Ruangan"><br>
        <input type="number" name="jumlah" placeholder="Jumlah Ruangan"><br>
        <button type="submit">Simpan</button>
 </form>

 <h2>List Ruangan</h2>
    <ul>
        @foreach($data as $rgn)
            <li>{{ $rgn->ruangan }} - {{ $rgn->jumlah }}</li>
        @endforeach
    </ul>
</body>
</html>