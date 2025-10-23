@extends('layouts.app')

@section('title','contact')

@section('content')
<h1>nama : {{ $student->nama_lengkap }}</h1>
<table>
    <tr>
        <th>nama project</th>
        <th>tahun</th>
        <th>deskripsi</th>
    </tr>
@foreach ($student->projects as $project)
    <tr>
        <td>{{$project->nama_project}}</td>
        <td>{{$project->tahun}}</td>
        <td>{{$project->deskripsi}}</td>
    </tr>
@endforeach
</table>
@endsection