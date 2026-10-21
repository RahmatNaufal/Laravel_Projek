@extends('layouts.app')

@section('title', 'Tambah Bukku')

@section('content')
    <h1>Tambah Buku</h1>
    <form action="{{ route('admin.buku.store') }}" method="POST">
        @if ($errors->any()) 
            <div style="color:red; border:1px solid red; padding:10px; 
        margin-bottom:10px;">    
            <ul> 
            @foreach ($errors->all() as $error) 
                <li>{{ $error }}</li> 
            @endforeach 
                </ul> 
            </div> 
        @endif 
        @csrf
        <label>Kode Buku:</label>
        <input type"text" name="kode_buku" value="{{ old('kode_buku') }}" ><br>
        <label>Judul Buku:</label>
        <input type"text" name="judul" value="{{ old('judul') }}" ><br>>
        <label>Penulis:</label>
        <input type"text" name="penulis" value="{{ old('penulis') }}" required><br>>
        <label>Penerbit:</label>
        <input type"text" name="penerbit" value="{{ old('penerbit') }}" required><br>>
        <label>Tahun Terbit:</label>
        <input type"text" name="tahun_terbit" value="{{ old('tahun_terbit') }}" required><br>>
        <label>Harga:</label>
        <input type"number" name="stok" value="{{ old('stok') }}" required><br>>
        <button type="submit">Simpan</button>
    </form>
@endsection