@extends('layouts.admin')

@section('kontenku')
<div class="justify-content-around ms-auto">
    <div class="ms-5 mt-4"><h3 class="fw-bolder display-5 mb-3">Add Order</h3></div>
</div>
@include('pesan_error')

<form action="{{ route('logbooks.store') }}" method="POST" enctype="multipart/form-data">
    <input type="hidden" name="_token" value="{{ csrf_token() }}" />

    <div class="upload-container m-4">
        <form>
            <div class="mb-3">
            <label for="InputUser" class="form-label"> User</label>
            <select class="form-select" aria-label="Default select example">
                <option selected>Select User</option>
                <option value="1">Ahmad Johan </option>
                <option value="2">Hazza Riyandra</option>
                <option value="3">Putri Cahyaningsih</option>
                <option value="4">Satria Afif Ramdani</option>
                <option value="5">Thoriq Aljinan</option>
            </select>
            </div>
            <div class="mb-3">
            <label for="InputPrint" class="form-label">Print</label>
            <input type="text" class="form-control" id="InputPrint">
            </div>
            <div class="mb-3">
            <label for="InputBahan" class="form-label">Bahan</label>
            <input type="text" class="form-control" id="Bahan">
            </div>
            <div class="mb-3">
            <label for="InputBanyak" class="form-label">Banyak</label>
            <input type="text" class="form-control" id="InputBanyak">
            </div>
            <div class="mb-3">
            <label for="InputUkuran" class="form-label">Ukuran</label>
            <input type="text" class="form-control" id="InputUkuran">
            </div>
            <div class="mb-3">
            <label for="formFile" class="form-label">Input File Print</label>
            <input class="form-control" type="file" id="formFile" name="file_laporan">
            </div>
            <div class="mb-3">
            <label for="InputKeterangan" class="form-label">Keterangan</label>
            <textarea type="text" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
            </div>
            <div class="d-grid gap-2 d-md-block">
            <input class="btn btn-outline-primary" type="submit" value="Submit">
            <input class="btn btn-outline-primary" type="reset" value="Reset">
            </div>
        </form>
    </div>

    Judul: <input type="text" name="judul" >  <br><br>
    NIM Ketua: <input type="text" name="nim_ketua"> <br><br>
    Topik: <input type="text" name="topik"> <br><br>
    Deksripsi Progress: <textarea name="deskripsi_progress"> </textarea> <br><br>
    Upload File: 
    <input type="file" name="file_laporan"> <br><br>
    
    <br><br>
</form>

@endsection

