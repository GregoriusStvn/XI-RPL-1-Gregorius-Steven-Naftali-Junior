@extends('layout')

@section('content')
    <h1>{{ $kegiatan->nama_kegiatan }}</h1>
    <p>{{ $kegiatan->deskripsi }}</p>
    <p>Tanggal: {{ $kegiatan->tanggal }}</p>
@endsection
