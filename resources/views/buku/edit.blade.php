@extends('dashboard.layouts.main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Ubah buku</h1>
</div>

<form action="{{ route('buku.update', $buku->id) }}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT')

    <div class="col-6">
        <label>Cover</label>
        <div class="form-group">
            <img src="{{ asset('coverbuku/'.$buku->cover) }}" alt="" style="width: 150px;">
        </div>
    </div>
    <br>

    <div class="col-6">
        <div class="form-group">
            <input type="file" name="cover" class="form-control" value="{{ $buku->cover }}">
            <div class="text-danger">
                @error('cover')
                {{ $message }}
            @enderror
            </div>
        </div>
    </div>
    <br>

    <div class="col-6">
        <div class="form-group">
            <label>Judul</label>
            <input type="text" name="judul" class="form-control" placeholder="Masukkan Judul" value="{{ $buku->judul }}">
            <div class="text-danger">
                @error('judul')
                {{ $message }}
                @enderror
            </div>
        </div>
    </div>
    <br>

    <div class="col-6">
        <div class="form-group">
            <label>Penerbit</label>
            <input type="text" name="nama_penerbit" class="form-control" placeholder="Masukkan penerbit" value="{{ $buku->nama_penerbit }}">
            <div class="text-danger">
                @error('nama_penerbit')
                {{ $message }}
                @enderror
            </div>
        </div>
    </div>
    <br>

    <div class="col-6">
        <div class="form-group">
            <label>Tahun Terbit</label>
            <input type="number" name="tahun_terbit" class="form-control" placeholder="Masukkan Tahun Terbit" value="{{ $buku->tahun_terbit }}">
            <div class="text-danger">
                @error('Tahun Terbit')
                {{ $message }}
                @enderror
            </div>
        </div>
    </div>
    <br>

    <div class="col-6">
        <div class="form-group">
            <label>Pengarang</label>
            <input type="text" name="pengarang" class="form-control" placeholder="Masukkan pengarang" value="{{ $buku->pengarang }}">
            <div class="text-danger">
                @error('pengarang')
                {{ $message }}
                @enderror
            </div>
        </div>
    </div>
    <br>

    <div class="col-6">
        <div class="form-group">
            <label>Bahasa</label>
            <input type="text" name="bahasa" class="form-control" placeholder="Masukkan bahasa" value="{{ $buku->bahasa }}">
            <div class="text-danger">
                @error('bahasa')
                {{ $message }}
                @enderror
            </div>
        </div>
    </div>
    <br>

    <div class="col-6">
        <div class="form-group">
            <label>Jumlah Halaman</label>
            <input type="number" name="jumlah_halaman" class="form-control" placeholder="Masukkan jumlah halaman" value="{{ $buku->jumlah_halaman }}">
            <div class="text-danger">
                @error('jumlah_halaman')
                {{ $message }}
                @enderror
            </div>
        </div>
    </div>
    <br>

    <div class="col-6">
        <div class="form-group">
            <label>Stok Buku</label>
            <input type="number" name="stok_buku" class="form-control" placeholder="Masukkan jumlah stok" value="{{ $buku->stok_buku }}">
            <div class="text-danger">
                @error('stok_buku')
                {{ $message }}
                @enderror
            </div>
        </div>
    </div>
    <br>

            <a href="{{ route('buku.index')}}" class="btn btn-sm btn-primary">Back</a>
            <button type="submit" class="btn btn-sm btn-primary">Submit</button><br>
            <br>

        </form>
@endsection
