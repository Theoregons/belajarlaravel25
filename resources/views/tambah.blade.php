@extends('template')
@section('main')
    <form action="{{ route('siswa.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label>NIS</label>
            <input type="number" class="form-control" name="nis">
            @error('nis')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">
            <label>Nama</label>
            <input type="text" class="form-control" name="nama">
            @error('nama')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">
            <label>Alamat</label>
            <input type="text" class="form-control" name="alamat">  
            @error('alamat')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection
