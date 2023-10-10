@extends('admin.layout')
@section('content')

<form action="{{ route('profile.update') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="row justify-content-between">
        <div class="col-5">
            <h3>Profile</h3>
            <div class="mb-3">
                <label for="kota" class="form-label">Foto</label>
                <input type="file"
                  class="form-control form-control-sm skill" name="foto" id="foto" aria-describedby="helpId" value="{{ get_meta_value('_language') }}" placeholder="">
              </div>
            <div class="mb-3">
                <label for="kota" class="form-label">Kota</label>
                <input type="text"
                  class="form-control form-control-sm skill" name="kota" id="kota" aria-describedby="helpId" value="" placeholder="Kota">
              </div>
            <div class="mb-3">
                <label for="provinsi" class="form-label">Provinsi</label>
                <input type="text"
                  class="form-control form-control-sm skill" name="provinsi" id="provinsi" aria-describedby="helpId" value="" placeholder="Provinsi">
              </div>
            <div class="mb-3">
                <label for="facebook" class="form-label">Nomor Telepon</label>
                <input type="text"
                  class="form-control form-control-sm skill" name="nohp" id="nohp" aria-describedby="helpId" value="" placeholder="Nomor Telepon">
              </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email"
                  class="form-control form-control-sm skill" name="email" id="email" aria-describedby="helpId" value="" placeholder="Email">
              </div>
        </div>
        <div class="col-5">
            <h3>Akun Media Sosial</h3>
            <div class="mb-3">
                <label for="facebook" class="form-label">Facebook</label>
                <input type="text"
                  class="form-control form-control-sm skill" name="facebook" id="facebook" aria-describedby="helpId" value="" placeholder="Facebook">
              </div>
            <div class="mb-3">
                <label for="twitter" class="form-label">Twitter</label>
                <input type="text"
                  class="form-control form-control-sm skill" name="twitter" id="twitter" aria-describedby="helpId" value="" placeholder="Twitter">
              </div>
            <div class="mb-3">
                <label for="linkedin" class="form-label">Linkedin</label>
                <input type="text"
                  class="form-control form-control-sm skill" name="linkedin" id="linkedin" aria-describedby="helpId" value="" placeholder="Linkedin">
              </div>
            <div class="mb-3">
                <label for="github" class="form-label">Github</label>
                <input type="text"
                  class="form-control form-control-sm skill" name="github" id="github" aria-describedby="helpId" value="" placeholder="Github">
              </div>
        </div>
    </div>

    <button class="btn btn-primary" name="simpan" type="submit"> Simpan</button>

</form>
@endsection

{{-- @push('programlanguage')
<script>
    $(document).ready(function() {
        $('.skill').tokenfield({
            autocomplete: {
                source: [{!! $skill !!}],
                delay: 100
            },
            showAutocompleteOnFocus: true
        });
    });
</script>
@endpush --}}
