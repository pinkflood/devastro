<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>create project</title>
</head>
<body>
    <form action="{{ route("project.store") }}" method="POST">
        @csrf
        <label for="name">Nama Project</label>
        <input type="text" id=name name="nama_project"><br>
        @error('nama_project')
            <h5>{{$message}}</h5> <br>
        @enderror

        <label for="tahun">Tahun</label>
        <input type="text" id=tahun name="tahun"><br>
        @error('tahun')
            <h5>{{$message}}</h5> <br>
        @enderror

        <label for="deskripsi">Deskripsi</label>
        <input type="text" id=deskripsi name="deskripsi"> <br>
        @error('deskripsi')
            <h5>{{$message}}</h5> <br>
        @enderror

        <label for="deskripsi">siswa yang mengerjakan</label>
        <select name="student_id" id="student_id">
            @foreach ( $students as $student )
                <option value="{{ $student->id }}"> {{ $student->nama_lengkap }}</option>
            @endforeach
        </select>

        <button type="submit">submit</button>
    </form>
</body>
</html>