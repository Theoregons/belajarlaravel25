@extends('template')
@section('main')
    <h1>Upload File</h1>

    <form action="{{ route('upload.store') }}" method="POST" enctype="multipart/form-data" class="flex items-center">
        @csrf
        <div class="custom-file w-50">
            <input type="file" class="custom-file-input" name="image">
            <label class="custom-file-label">Pilih Gambar</label>
        </div>
        <button class="btn btn-success mt-1" type="submit">Simpan</button>
    </form>

    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Gambar</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($data as $item)
            <tr>
                <th scope="row">{{ $loop->iteration }}</th>
                <td><img src="{{ asset('storage/'.$item->image) }}" width="300" alt=""></td>
            </tr>
            @endforeach
        </tbody>
    </table>
@endsection
