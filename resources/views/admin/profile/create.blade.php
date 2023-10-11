@extends('admin.layout')
@section('content')

<form action="{{ route('profile.update') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="row justify-content-between">
        <div class="col-5">
            <h3>Profile</h3>
            @if (get_meta_value('foto'))
            <img style="max-width: 100px; max-height:100px" class="border border-dark" src="{{ asset('foto').'/'.get_meta_value('foto')}}" alt="">
            @endif
            <div class="mb-3">
                <label for="kota" class="form-label">Foto</label>
                <input type="file"
                  class="form-control form-control-sm skill" name="foto" id="foto" aria-describedby="helpId" value="" placeholder="">
              </div>
            <div class="mb-3">
                <label for="kota" class="form-label">Kota</label>
                <input type="text"
                  class="form-control form-control-sm skill" name="kota" id="kota" aria-describedby="helpId" value="{{ get_meta_value('kota') }}" placeholder="Kota">
              </div>
            <div class="mb-3">
                <label for="provinsi" class="form-label">Provinsi</label>
                <input type="text"
                  class="form-control form-control-sm skill" name="provinsi" id="provinsi" aria-describedby="helpId" value="{{ get_meta_value('provinsi') }}" placeholder="Provinsi">
              </div>
            <div class="mb-3">
                <label for="facebook" class="form-label">Nomor Telepon</label>
                <input type="text"
                  class="form-control form-control-sm skill" name="nohp" id="nohp" aria-describedby="helpId" value="{{ get_meta_value('nohp') }}" placeholder="Nomor Telepon">
              </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email"
                  class="form-control form-control-sm skill" name="email" id="email" aria-describedby="helpId" value="{{ get_meta_value('email') }}" placeholder="Email">
              </div>
        </div>
        <div class="col-5">
            <h3>Akun Media Sosial</h3>
            <div class="mb-3">
                <label for="facebook" class="form-label">Facebook</label>
                <input type="text"
                  class="form-control form-control-sm skill" name="facebook" id="facebook" aria-describedby="helpId" value="{{ get_meta_value('facebook') }}" placeholder="Facebook">
              </div>
            <div class="mb-3">
                <label for="twitter" class="form-label">Twitter</label>
                <input type="text"
                  class="form-control form-control-sm skill" name="twitter" id="twitter" aria-describedby="helpId" value="{{ get_meta_value('twitter') }}" placeholder="Twitter">
              </div>
            <div class="mb-3">
                <label for="linkedin" class="form-label">Linkedin</label>
                <input type="text"
                  class="form-control form-control-sm skill" name="linkedin" id="linkedin" aria-describedby="helpId" value="{{ get_meta_value('linkedin') }}" placeholder="Linkedin">
              </div>
            <div class="mb-3">
                <label for="github" class="form-label">Github</label>
                <input type="text"
                  class="form-control form-control-sm skill" name="github" id="github" aria-describedby="helpId" value="{{ get_meta_value('github') }}" placeholder="Github">
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
