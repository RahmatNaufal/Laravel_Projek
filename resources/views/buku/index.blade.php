@extends('layouts.app')

@section('content')
    <h1>Daftar Buku</h1>
    <a href="{{ route('admin.buku.create') }}">+ Tambah Buku</a>

    @foreach ($buku as $item)

        <x-buku-card :buku="$item" />
        <a href="{{ route('admin.buku.edit', $item->id) }}">Edit</a>
        <form action="{{ route('admin.buku.destroy', $item->id) }}" method="POST" style="display: inline;" onsubmit="return confirm('Apakah Anda yakin ingin menghapus buku ini?')">
            @csrf
            @method('DELETE')
            <button type="submit">Hapus</button>
        </form>
    @endforeach
@endsection

@section('sidebar')
    <h3> <a href="/">Menu</h3>
    <p> <a href="/buku">Menu Buku</a></p>
    <p><a href="/anggota">Menu Anggota</a></p>
@endsection