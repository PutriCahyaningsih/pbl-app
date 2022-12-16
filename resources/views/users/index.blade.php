@extends('layouts.admin')

@section('kontenku')
<div class="d-flex justify-content-around mt-4">
    <div class="col-6"><h3 class="fw-bolder display-5 mb-3">Users</h3></div>
    <div class="col-2"><a class="btn btn-dark" href="adduser.html"> Add New User </a></div>
</div>
@forelse ($users as $user)
      <tr>
         <td>{{ $log->nama }}</td>
         <td>{{ $log->email }}</td>
         <td>{{ $log->role }}</td>
         <td></td>
         <td class="d-flex">
               <a type="button" class="btn btn-light me-2" href="{{ route('users.edit', $log->id) }}" class="me-2 ">Edit</a> 
               
               <form action="{{ route('users.destroy', $log->id) }}" method="POST" onclick="confirm('yakin')">
                  @method('DELETE')
                  <button class="btn btn-danger" type="submit">Delete</button>
               </form>
         </td>
      </tr>
      @empty
         <td colspan="5"> Belum ada data. </td>
      @endforelse
@endsection