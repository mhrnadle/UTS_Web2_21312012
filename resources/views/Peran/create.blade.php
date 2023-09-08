@extends('layout.master')

@section('judul')
    Tambah Peran
@endsection

@section('content')
<form method="post" action="/film">
    @csrf
    <div class="form-group">
        <label>Film</label>
        <input type="text" name="film" value="{{old ('film')}}" class="form-control" >
    </div>

    @error('Film')
    <div class="alert alert-danger">{{ $message }}</div>
    @enderror

    <div class="form-group">
        <label>Cast</label>
        <input type="text" name="cast" value="{{old ('cast')}}" class="form-control" >
    </div>

    @error('cast')
    <div class="alert alert-danger">{{ $message }}</div>
    @enderror

    <div class="form-group">
        <label>Nama</label>
        <input type="text" name="nama" value="{{old ('nama')}}" class="form-control" >
    </div>
    
    @error('nama')
    <div class="alert alert-danger">{{ $message }}</div>
    @enderror

    <button type="submit" class="btn btn-primary">Simpan</button>
</form>
@endsection