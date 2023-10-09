@extends('admin.layout')
@section('content')
<p class="card-title">Experience</p>
<div class="pb-3"> <a href="{{ route('experience.create') }}" class="btn btn-primary">+ Tambah Experience </a> </div>
<div class="table-responsive">
    <table class="table table-stripped">
        <thead>
            <tr>
                <th class="col-1">No</th>
                <th>Posisi</th>
                <th>Nama Perusahaan</th>
                <th>Tanggal Mulai</th>
                <th>Tanggal Akhir</th>
                <th class="col-2">Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php $i =1; ?>
            @foreach ($data as $d)
            <tr>
                <td>{{ $i }}</td>
                <td>{{ $d->judul }}</td>
                <td>{{ $d->info1 }}</td>
                <td>{{ $d->tgl_mulai_indo }}</td>
                <td>{{ $d->tgl_akhir_indo }}</td>
                <td>
                    <a href="{{ route('experience.edit', $d->id) }}" class="btn btn-sm btn-warning">Edit</a>
                    <form onsubmit="return confirm('Yakin menghapus data ini?')" action="{{ route('experience.destroy', $d->id) }}"
                        class="d-inline" method="POST">
                        @csrf
                        @method('DELETE')
                    <button class="btn btn-sm btn-danger" type="submit" name="submit">Hapus</button></form>
                </td>
            </tr>
            <?php $i++; ?>
            @endforeach
        </tbody>
    </table>

</div>
@endsection
