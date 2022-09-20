@extends('layout.app')

@section('title')
Home
@endsection

@section('content')
<div class="row g-2 text-center">
    <div class="col-3 text-dark">
      <div class="p-3 border bg-warning mt-3"> Siswa <i class="fa-sharp fa-solid fa-user-graduate"></i>  </div>
    </div>

    <div class="col-3 text-dark">
      <div class="p-3 border bg-warning mt-3"> Kelas <i class="fa-sharp fa-solid fa-chalkboard"></i>  </div>
    </div>

    <div class="col-3 text-dark">
      <div class="p-3 border bg-warning mt-3"> Guru <i class="fa-sharp fa-solid fa-person-chalkboard"></i>  </div>
    </div>

    <div class="col-3 text-dark">
      <div class="p-3 border bg-warning mt-3"> Mapel <i class="fa-sharp fa-solid fa-book-bible"></i>  </div>
    </div>
      @endsection