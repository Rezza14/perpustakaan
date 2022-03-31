@extends('dashboard.layouts.main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Data Buku</h1>
</div>

<title>Data Buku</title>


    <a href="{{ route('buku.create') }}" class="btn btn-sm btn-primary"><span data-feather="plus-circle"></span> Tambah data buku</a><br>
    <br>

    <div class="table-responsive col-lg-10">
    <table class="table table-bordered">
    <thead>
        <tr>
            <th>No</th>
            <th>Judul</th>
            <th>Penerbit</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        @forelse ($buku as $b)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $b->judul }}</td>
                <td>{{ $b->nama_penerbit }}</td>
                <td>
                    <a href="{{ route('buku.show', $b->id) }}"class="badge bg-success"><span data-feather="eye"></span></a>
                    <a href="{{ route('buku.edit', $b->id) }}"class="badge bg-warning"><span data-feather="edit"></span></a>
                    <form action="{{ route('buku.destroy', $b->id) }}" method="post" class="d-inline">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="badge bg-danger border-0" onclick="return confirm('Apakah anda yakin?')"><span data-feather="x-circle" fill="none"></span></button>
                    </form>
                </td>
            </tr>
        @empty
            <tr>
                <td colspan="5">Data not found</td>
            </tr>
        @endforelse

        @include('sweetalert::alert')
    </tbody>
    </table>
    </div>
@endsection
