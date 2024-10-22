@extends('layout')

@section('content')
    <h1>Tambah Kegiatan</h1>
    <form action="{{ route('kegiatan.store') }}" method="POST">
        @csrf
        <label for="nama_kegiatan">Nama Kegiatan:</label>
        <input type="text" name="nama_kegiatan" id="nama_kegiatan">

        <label for="deskripsi">Deskripsi:</label>
        <textarea name="deskripsi" id="deskripsi"></textarea>

        <label for="tanggal">Tanggal:</label>
        <input type="date" name="tanggal" id="tanggal">

        <button type="submit">Simpan</button>
    </form>
@endsection
