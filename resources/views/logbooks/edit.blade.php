@extends('layouts.admin')

@section('kontenku')
<h1> Form Edit Logbook</h1>

@include('pesan_error')

<form action="{{ route('logbooks.update', $logbook->id) }}" method="POST" enctype="multipart/form-data">
    @method('PATCH')

    Judul: <input type="text" name="judul" value="{{ $logbook->judul }}">  <br><br>
    NIM Ketua: <input type="text" name="nim_ketua" value="{{ $logbook->judul }}"> <br><br>
    Topik: <input type="text" name="topik" value="{{ $logbook->topik }}"> <br><br>
    Deksripsi Progress: 
    <textarea name="deskripsi_progress"> {{ $logbook->deskripsi_progress }} 
    </textarea> <br><br>
    Upload File (kosongkan jika tidak ingin diubah): <br> <br>
    <input type="file" name="file_laporan"> 
    File saat ini: 
    @if ($logbook->file_laporan == NULL) 
    <span> </span>Tidak ada file laporan
    @else
       <a href="{{ asset("storage/fileku/$logbook->file_laporan") }}"> Download Laporan</a>
    @endif
    <br><br><br>
    <button type="submit">Simpan</button>
    <button type="reset">Reset</button>

    <br><br>
</form>

@endsection