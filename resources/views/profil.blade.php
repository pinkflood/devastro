@extends('layouts.app')

@section('title','profil')

@section('content')
@if ($status == "admin")
    <h1>Hello admin {{$nama}}</h1>
@else
    <h1>Selamat datang {{$nama}}</h1>
@endif

@endsection