@extends('layouts.app')

@section('title', 'Anggota')

@section('content')
    <h1>Daftar Anggota</h1>
    <a href="{{ route('admin.anggota.create') }}">Tambah Anggota</a>

    @foreach ($anggota as $item)
    <x-anggota-card :anggota="$item" />
    <a href="{{ route('admin.anggota.edit', $item->id) }}">Edit</a>
    <form action="{{ route('admin.anggota.destroy', $item->id) }}" 
    method="POST" style="display: inline;" onsubmit="return confirm('Apakah Anda yakin ingin menghapus anggota ini?')">
            @csrf
            @method('DELETE')
            <button type="submit">Hapus</button>
        </form>
    @endforeach
@endsection

@section('sidebar')
    <h3>Menu</h3>
    <p><a href="/buku">Menu Buku</a></p>
    <p><a href="/anggota">Menu Anggota</a></p>
@endsection