@extends('dashboard.layouts.main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Data Siswa</h1>
</div>

<title>Data Siswa</title>

<div class="table-responsive col-lg-10">
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>No</th>
                <th>NIS</th>
                <th>Nama</th>
                <th>Action</th>
            </tr>
        </thead>

        <tbody>
            @forelse ( $siswa as $s )
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $s->nis }}</td>
                <td>{{ $s->nama }}</td>
                <td>
                    <a href="{{ route('siswa.show', $s->id) }}" class="badge bg-success"><span data-feather="eye"></span></a>
                    <form action="{{ route('siswa.destroy', $s->id) }}" method="post" class="d-inline">
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
