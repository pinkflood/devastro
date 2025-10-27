@extends('layouts.app')

@section("title", 'Murid')

@section("content")
@if (session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif

@if (session('error'))
    <div class="alert alert-danger">
        {{ session('error') }}
    </div>
@endif
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