@extends('admin.layout')
@section('content')
<div class="pb-3"><a href="{{ route('halaman.index') }}" class="btn btn-secondary">Kembali</a>
</div>

<form action="{{ route('halaman.store') }}" method="POST">
    @csrf
    <div class="mb-3">
      <label for="judul" class="form-label">Judul</label>
      <input type="text"
        class="form-control form-control-sm" name="judul" id="judul" aria-describedby="helpId" value="{{ Session::get('judul') }}" placeholder="Judul">
      {{-- <small id="helpId" class="form-text text-muted">Help text</small> --}}
    </div>
    <div class="mb-3">
      <label for="isi" class="form-label">Isi</label>
      <textarea class="form-control" id="isi" name="isi" >{{ Session::get('isi') }}</textarea>
    </div>
    <button class="btn btn-primary" name="simpan" type="submit"> Simpan</button>

</form>
@endsection
