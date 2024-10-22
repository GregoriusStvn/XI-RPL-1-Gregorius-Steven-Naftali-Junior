@extends('layout')

@section('content')
    <h1>Daftar Kegiatan</h1>
    <a href="{{ route('kegiatan.create') }}">Tambah Kegiatan</a>

    @if ($message = Session::get('success'))
        <p>{{ $message }}</p>
    @endif

    <ul>
        @foreach ($kegiatans as $kegiatan)
            <li>
                <a href="{{ route('kegiatan.show', $kegiatan->id) }}">{{ $kegiatan->nama_kegiatan }}</a>
                <a href="{{ route('kegiatan.edit', $kegiatan->id) }}">Edit</a>
                <form action="{{ route('kegiatan.destroy', $kegiatan->id) }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Delete</button>
                </form>
            </li>
        @endforeach
    </ul>
@endsection
