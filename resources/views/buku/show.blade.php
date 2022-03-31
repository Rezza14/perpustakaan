@extends('dashboard.layouts.main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Detail Buku</h1>
</div>

    <table class="table table-bordered">
    <tr>
        <th width="100px">Cover</th>
        <th width="30px">:</th>
        <th>
            <img src="{{ asset('coverbuku/'.$buku->cover) }}" alt="" style="width: 150px;">
        </th>
    </tr>
    <tr>
        <th width="150px">Judul</th>
        <th width="40px">:</th>
        <th>{{ $buku->judul }}</th>
    </tr>
    <tr>
        <th width="150px">Penerbit</th>
        <th width="40px">:</th>
        <th>{{ $buku->nama_penerbit }}</th>
    </tr>
    <tr>
        <th width="150px">Tahun terbit</th>
        <th width="40px">:</th>
        <th>{{ $buku->tahun_terbit }}</th>
    </tr>
    <tr>
        <th width="150px">Pengarang</th>
        <th width="40px">:</th>
        <th>{{ $buku->pengarang }}</th>
    </tr>
    <tr>
        <th width="150px">Bahasa</th>
        <th width="40px">:</th>
        <th>{{ $buku->bahasa }}</th>
    </tr>
    <tr>
        <th width="150px">Jumlah halaman</th>
        <th width="40px">:</th>
        <th>{{ $buku->jumlah_halaman }}</th>
    </tr>
    <tr>
        <th width="150px">Stok buku</th>
        <th width="40px">:</th>
        <th>{{ $buku->stok_buku }}</th>
    </tr>
    </table>
    <th><a href="{{ route('buku.index') }}" class="btn btn-sm btn-primary">Back</a></th><br>
    <br>
    </body>
@endsection
