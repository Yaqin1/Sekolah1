@extends('layout.app')

@section('title')
    Kelas
@endsection

@section('content')
<div class="card mt-3">
    <div class="card-header">
        <div class="card-title">
            <h5>Edit Kelas</h5>

            <form action="{{route('kelas.update', $kelas->id)}}" method="POST">
                <div class="card-body">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <label for="nama">Nama</label>
                        <input type="text" name="nama" id="nama" value="{{$kelas->nama}}"
                        class="form-control" @error('nama') is-invalid @enderror>
                        @error('nama')
                        <div class="text-danger">
                            {{$message}}
                        </div>
                        @enderror
                    </div>

                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection

