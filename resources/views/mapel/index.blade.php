@extends('layout.app')

@section('title')
    Mapel
@endsection

@section('content')
<div class="card mt-3">
    <div class="card-header">
        <div class="card-title">
            <h5>Data Mapel</h5>

            <button type"button" class="btn btn-success btn-sm float-end" data-bs-toggle="modal"
            data-bs-target="#modalTambah"><i class="fa fa-plus"></i></button>
        </div>
    </div>

    <div class="card-body">
      <table class="table table-striped mt-5">
            <thead>
                <tr>
                    <th style="width: 5%">No.</th>
                    <th>Nama</th>
                    <th style="width: 10%">Aksi</th>
                </tr>
            </thead>
            <tbody>

             @foreach($mapel as $item)
              <tr>
                  <td>{{$loop->iteration}}</td>
                  <td>{{$item->nama}}</td>
                  <td>
                      <a href="/mapel/{{$item->id}}/edit" class="btn btn-warning btn-sm"> <i class="fa fa-edit"></i></a>
                      <a href="/mapel/{{$item->id}}/hapus" class="btn btn-danger btn-sm"> <i class="fa fa-trash"></i></a>
                      
                  </td>
              </tr>
              @endforeach
            </tbody>
      </table>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="modalTambah" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Tambahkan Mapel</h5>
        <button type="button" class="btn-batal" data-bs-dismiss="modal" aria-label="Batal"></button>
      </div>
      
      <div class="modal-body">
        <form action="{{route('mapel.store')}}" method="POST">
          @csrf
            <div class="form-gorup">
              <label for="nama">Nama</label>
              <input type="text" name="nama" id="nama" class="form-control @error('nama') is-invalid @enderror">
            </div>
          
      </div>

          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
            <button type="submit" class="btn btn-primary">Simpan</button>
          </div>
      </form>
      </div>
    </div>
  </div>
  @endsection