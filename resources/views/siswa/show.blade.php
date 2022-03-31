@extends('dashboard.layouts.main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Detail Sswa</h1>
</div>

<title>Detail Siswa</title>

<table class="table table-bordered">
    <tr>
        <th width="100px">NIS</th>
        <th width="30px">:</th>
        <th>{{ $siswa->nis }}</th>
    </tr>
    <tr>
        <th width="100px">Nama</th>
        <th width="30px">:</th>
        <th>{{ $siswa->nama }}</th>
    </tr>
    <tr>
        <th width="100px">No HP</th>
        <th width="30px">:</th>
        <th>{{ $siswa->no_hp }}</th>
    </tr>
    <tr>
        <th width="100px">Alamat</th>
        <th width="30px">:</th>
        <th>{{ $siswa->alamat }}</th>
    </tr>
    </table>
    <th><a href="{{ route('siswa.index') }}" class="btn btn-sm btn-primary">Back</a></th>
</body>

@endsection
