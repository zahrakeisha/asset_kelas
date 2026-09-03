@extends('layouts.app')

@section('content')
<div class="container">

    <div class="d-flex justify-content-between align-items-center mb-3">
        <h3>Data Masa Ekonomis</h3>

        <a href="{{ route('masa-ekonomis.create') }}" class="btn btn-primary">
            + Tambah Masa Ekonomis
        </a>
    </div>

    @if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
    @endif

    <div class="card">
        <div class="card-body">

            <table class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Kategori</th>
                        <th>Lama Ekonomis</th>
                        <th>Satuan</th>
                        <th>Keterangan</th>
                        <th>Aksi</th>
                    </tr>
                </thead>

                <tbody>
                    @forelse($masaEkonomis as $item)
                    <tr>
                        <td>{{ $loop->iteration }}</td>

                        <td>
                            {{ $item->kategori->nama_kategori ?? '-' }}
                        </td>

                        <td>
                            {{ $item->lama_ekonomis }}
                        </td>

                        <td>
                            {{ $item->satuan }}
                        </td>

                        <td>
                            {{ $item->keterangan ?? '-' }}
                        </td>

                        <td>
                            <a href="{{ route('masa-ekonomis.show', $item->masa_ekonomis_id) }}"
                                class="btn btn-info btn-sm">
                                Detail
                            </a>

                            <a href="{{ route('masa-ekonomis.edit', $item->masa_ekonomis_id) }}"
                                class="btn btn-warning btn-sm">
                                Edit
                            </a>

                            <form action="{{ route('masa-ekonomis.destroy', $item->masa_ekonomis_id) }}"
                                method="POST"
                                style="display:inline;">

                                @csrf
                                @method('DELETE')

                                <button type="submit"
                                    class="btn btn-danger btn-sm"
                                    onclick="return confirm('Yakin ingin menghapus data ini?')">
                                    Hapus
                                </button>

                            </form>
                        </td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="6" class="text-center">
                            Belum ada data masa ekonomis.
                        </td>
                    </tr>
                    @endforelse
                </tbody>
            </table>

        </div>
    </div>

</div>
@endsection