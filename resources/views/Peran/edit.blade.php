@extends('layout.master')

@section('judul')
Edit Cast
@endsection

@section('content')
<form  method="post" action="/film/{{ $film->id }}">
    @csrf
    @method('PUT')
    <div class="form-group">
        <label>Film</label>
        <input type="text" name="film" value="{{ $film->film }}" class="form-control">
    </div>
    @error('film')
        <div class="alert alert-danger">{{$message}}</div>
    @enderror

    <div class="form-group">
        <label>Cast</label>
        <input type="text" name="cast" value="{{ $film->cast }}" class="form-control">
    </div>
    @error('cast')
        <div class="alert alert-danger">{{$message}}</div>
    @enderror

    <div class="form-group">
        <label>Nama</label>
        <input type="text" name="nama" value="{{ $film->nama }}" class="form-control">
    </div>
    @error('nama')
        <div class="alert alert-danger">{{$message}}</div>
    @enderror

    <button type="submit" class="btn btn-primary">Simpan</button>
</form>
@endsection

