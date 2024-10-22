@extends('layout')

@section('content')
    <h1>Edit Kegiatan</h1>
    <form action="{{ route('kegiatan.update', $kegiatan->id) }}" method="POST">
        @csrf
        @method('PUT')

        <label for="nama_kegiatan">Nama Kegiatan:</label>
        <input type="text" name="nama_kegiatan" id="nama_kegiatan" value="{{ $kegiatan->nama_kegiatan }}">

        <label for="deskripsi">Deskripsi:</label>
        <textarea name="deskripsi" id="deskripsi">{{ $kegiatan->deskripsi }}</textarea>

        <label for="tanggal">Tanggal:</label>
        <input type="date" name="tanggal" id="tanggal" value="{{ $kegiatan->tanggal }}">

        <button type="submit">Simpan Perubahan</button>
    </form>
@endsection
