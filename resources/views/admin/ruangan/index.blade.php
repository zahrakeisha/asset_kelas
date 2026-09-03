@extends('admin.template.app')

@section('title', 'Data Ruangan')

@section('page-title', 'Ruangan')

@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Ruangan</title>

    {{-- Bootstrap CSS --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
          rel="stylesheet">
</head>

<body>

<div class="container mt-5">

    <div class="d-flex justify-content-between align-items-center mb-4">
        <h1 class="h3 mb-0">Data Ruangan</h1>

        <a href="{{ route('admin.ruangan.create') }}"
           class="btn btn-primary">
            + Tambah Ruangan
        </a>
    </div>

    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <div class="card shadow-sm">
        <div class="card-header bg-primary text-white">
            <h5 class="mb-0">Daftar Ruangan</h5>
        </div>

        <div class="card-body">

            <div class="table-responsive">
                <table class="table table-bordered table-hover align-middle mb-0">

                    <thead class="table-light">
                        <tr>
                            <th width="80">No</th>
                            <th>Nama Ruangan</th>
                            <th>Keterangan</th>
                            <th width="250">Aksi</th>
                        </tr>
                    </thead>

                    <tbody>

                        @forelse ($ruangan as $item)

                        <tr>
                            <td>{{ $loop->iteration }}</td>

                            <td>
                                {{ $item->nama_ruangan }}
                            </td>

                            <td>
                                {{ $item->keterangan ?? '-' }}
                            </td>

                            <td>

                                <a href="{{ route('admin.ruangan.show', $item->ruangan_id) }}"
                                   class="btn btn-info btn-sm">
                                    Detail
                                </a>

                                <a href="{{ route('admin.ruangan.edit', $item->ruangan_id) }}"
                                   class="btn btn-warning btn-sm">
                                    Edit
                                </a>

                                <form action="{{ route('admin.ruangan.destroy', $item->ruangan_id) }}"
                                      method="GET"
                                      class="d-inline">

                                    @csrf

                                    <button type="submit"
                                            class="btn btn-danger btn-sm"
                                            onclick="return confirm('Yakin ingin menghapus ruangan ini?')">
                                        Hapus
                                    </button>

                                </form>

                            </td>
                        </tr>

                        @empty

                        <tr>
                            <td colspan="4"
                                class="text-center text-muted py-4">
                                Belum ada data ruangan.
                            </td>
                        </tr>

                        @endforelse

                    </tbody>

                </table>
            </div>

        </div>
    </div>

</div>

{{-- Bootstrap JS --}}
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
@endsection