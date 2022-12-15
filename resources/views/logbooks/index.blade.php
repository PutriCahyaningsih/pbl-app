@extends('layouts.admin')

@section('kontenku')
<div class="d-flex justify-content-around mt-4">
    <div class="col-6"><h3 class="fw-bolder display-5 mb-3">List Order</h3></div>
    <div class="col-2 d-flex align-items-end"><a class="btn btn-dark" href="{{ route('logbooks.create') }}"> Add Order </a></div>
</div>

@include('pesan_error')

<div class="container">
   <table class="table table-striped table-hover">
    <thead class="table-Light">
      <tr>
        <td scope="col">Print</td>
        <td scope="col">Bahan</td>
        <td scope="col">Qty</td>
        <td scope="col">ukuran</td>
        <td scope="col">Deskripsi</td>
        <td scope="col">Doc</td>
      </tr>
      @forelse ($logbooks as $log)
      <tr>
         <td>{{ $log->judul }}</td>
         <td>{{ $log->topik }}</td>
         <td>{{ $log->deskripsi_progress }}</td>
         <td>
         @if ($log->file_laporan == NULL) 
         <span> Tidak ada file laporan </span>
         @else
            <a href="{{ asset("storage/fileku/$log->file_laporan") }}"> Download Laporan</a>
         @endif
         
         </td>
         <td></td>
         <td class="d-flex">
               <a type="button" class="btn btn-light me-2" href="{{ route('logbooks.edit', $log->id) }}" class="me-2 ">Edit</a> 
               
               <form action="{{ route('logbooks.destroy', $log->id) }}" method="POST" onclick="confirm('yakin')">
                  @method('DELETE')
                  <button class="btn btn-danger" type="submit">Delete</button>
               </form>
         </td>
      </tr>
      @empty
         <td colspan="5"> Belum ada data. </td>
      @endforelse
   </thead>
</div>

@endsection