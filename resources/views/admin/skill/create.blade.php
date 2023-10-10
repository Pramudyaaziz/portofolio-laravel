@extends('admin.layout')
@section('content')

<form action="{{ route('skill.update') }}" method="POST">
    @csrf
    <div class="mb-3">
      <label for="judul" class="form-label">Programming Language & Tools</label>
      <input type="text"
        class="form-control form-control-sm skill" name="_language" id="judul" aria-describedby="helpId" value="{{ get_meta_value('_language') }}" placeholder="Programming Language & Tools">
      {{-- <small id="helpId" class="form-text text-muted">Help text</small> --}}
    </div>
    <div class="mb-3">
      <label for="isi" class="form-label">Workflow</label>
      <textarea class="form-control" id="isi" name="_workflow" >{{ get_meta_value('_workflow') }}</textarea>
    </div>
    <button class="btn btn-primary" name="simpan" type="submit"> Simpan</button>

</form>
@endsection

@push('programlanguage')
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
@endpush
