@extends('layouts.app')

@section('title','projects')

@section('content')
<h1>list project</h1>
<table>
    <tr>
        <th>nama project</th>
        <th>tahun</th>
        <th>deskripsi</th>
        <th>nama siswa</th>
    </tr>
@forelse ( $projects as $project )
    <tr>
        <td>{{$project->nama_project}}</td>
        <td>{{$project->tahun}}</td>
        <td>{{$project->deskripsi}}</td>
        <td>{{$project->student->nama_lengkap}}</td>
    </tr>
@empty
    <h1>tidak ada project di tahun itu</h1>
@endforelse 
    
\
</table>
@endsection