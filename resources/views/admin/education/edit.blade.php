@extends('admin.layout')
@section('content')
<div class="pb-3"><a href="{{ route('education.index') }}" class="btn btn-secondary">Kembali</a>
</div>

<form action="{{ route('education.update', $data->id) }}" method="POST">
    @csrf
    @method('PUT')
    <div class="mb-3">
      <label for="judul" class="form-label">Perguruan Tinggi</label>
      <input type="text"
        class="form-control form-control-sm" name="judul" id="judul" aria-describedby="helpId" value="{{ $data->judul }}" placeholder="Pergurua Tinggi">
      {{-- <small id="helpId" class="form-text text-muted">Help text</small> --}}
    </div>
    <div class="mb-3">
      <label for="info1" class="form-label">Fakultas</label>
      <input type="text"
        class="form-control form-control-sm" name="info1" id="info1" aria-describedby="helpId" value="{{ $data->info1 }}" placeholder="Fakultas">
      {{-- <small id="helpId" class="form-text text-muted">Help text</small> --}}
    </div>
    <div class="mb-3">
      <label for="info2" class="form-label">Program Studi</label>
      <input type="text"
        class="form-control form-control-sm" name="info2" id="info2" aria-describedby="helpId" value="{{$data->info2 }}" placeholder="Program Studi">
      {{-- <small id="helpId" class="form-text text-muted">Help text</small> --}}
    </div>
    <div class="mb-3">
      <label for="info3" class="form-label">IPK</label>
      <input type="text"
        class="form-control form-control-sm" name="info3" id="info3" aria-describedby="helpId" value="{{ $data->info3 }}" placeholder="IPK">
      {{-- <small id="helpId" class="form-text text-muted">Help text</small> --}}
    </div>
    <div class="mb-3">
     <div class="row">
        <div class="col-auto">Tanggal Mulai</div>
        <div class="col-auto"><input type="date" class="form-control form-control-sm" name="tgl_mulai" placeholder="dd/mm/yyyy" value="{{ $data->tgl_mulai }}"></div>
        <div class="col-auto">Tanggal Akhir</div>
        <div class="col-auto"><input type="date" class="form-control form-control-sm" name="tgl_akhir" placeholder="dd/mm/yyyy" value="{{ $data->tgl_akhir }}"></div>
     </div>
    </div>
    {{-- <div class="mb-3">
      <label for="isi" class="form-label">Isi</label>
      <textarea class="form-control " id="isi" name="isi">{{ Session::get('isi') }}</textarea>
    </div> --}}
    <button class="btn btn-primary" name="simpan" type="submit"> Simpan</button>

</form>
@endsection
