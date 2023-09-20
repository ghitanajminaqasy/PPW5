@extends('layouts.master')

@section('content')
<div class="container">
    <h4>Tamabah Buku</h4>
    <form method="post" action="{{ route('buku.store') }}">
        @csrf
        <div>Judul <input type="text" name="judul"></div>
        <div>Penulis <input type="text" name="penulis"></div>
        <div>Harga <input type="text" name="harga"></div>
        <div>Tgl. Terbit <input type="text" name="tgl_terbit"></div>
        <div><buutton type="submit">Simpan</buutton></buutton>
        <a href="/buku">Batal</a></div>   
    </form>
</div>
@endsection