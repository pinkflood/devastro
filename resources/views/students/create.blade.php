<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>create student</title>
</head>
<body>
    <form action="{{ route("students.store") }}" method="POST">
        @csrf
        <label for="name">Nama Lengkap</label>
        <input type="text" id=name name="nama_lengkap"><br>
        @error('nama_lengkap')
            <h5>{{$message}}</h5> <br>
        @enderror

        <label for="nis">NIS</label>
        <input type="text" id=nis name="nis"><br>
        @error('nis')
            <h5>{{$message}}</h5> <br>
        @enderror

        <label for="kelas">Kelas</label>
        <input type="text" id=kelas name="kelas"> <br>
        @error('kelas')
            <h5>{{$message}}</h5> <br>
        @enderror

        <label for="alamat">Alamat</label>
        <input type="text" id=alamat name="alamat"> <br>
        @error('alamat')
            <h5>{{$message}}</h5> <br>
        @enderror

        <button type="submit">submit</button>
    </form>
</body>
</html>