@extends('layouts.app')

@section("title", 'Murid')

@section("content")
<table>
    <tr>
        <th>nama</th>
        <th>kelas</th>
        <th>nis</th>
        <th>alamat</th>
    </tr>
@foreach ($students as $student )
    <tr>
        <td>{{$student->nama_lengkap}}</td>
        <td>{{$student->kelas}}</td>
        <td>{{$student->nis}}</td>
        <td>{{$student->alamat}}</td>
    </tr>
@endforeach
</table>
@endsection