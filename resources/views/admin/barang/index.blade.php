@extends('admin.template.app')

@section('title', 'Data Barang')

@section('page-title', 'Data Barang')

@section('content')

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Barang</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
        rel="stylesheet">
</head>

<body>

    <div class="container-fluid mt-5">

        <div class="d-flex justify-content-between align-items-center mb-4">
            <h1 class="h3 mb-0">Data Barang</h1>

            <a href="{{ route('admin.barang.create') }}"
                class="btn btn-primary">
                + Tambah Barang
            </a>
        </div>

        @if(session('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('success') }}

            <button type="button"
                class="btn-close"
                data-bs-dismiss="alert"
                aria-label="Close"></button>
        </div>
        @endif

        <div class="card shadow-sm">

            <div class="card-header bg-primary text-white">
                <h5 class="mb-0">Daftar Barang</h5>
            </div>

            <div class="card-body">

                <div class="table-responsive">
                    <table class="table table-bordered table-hover align-middle mb-0">

                        <thead class="table-light">
                            <tr>
                                <th width="60">No</th>
                                <th>Kode Barang</th>
                                <th>Nama Barang</th>
                                <th>Kategori</th>
                                <th>Masa Ekonomis</th>
                                <th>Jumlah</th>
                                <th width="250">Aksi</th>
                            </tr>
                        </thead>

                        <tbody>

                            @forelse($barangs as $barang)

                            <tr>
                                <td>{{ $loop->iteration }}</td>

                                <td>
                                    {{ $barang->kode_barang }}
                                </td>

                                <td>
                                    {{ $barang->nama_barang }}
                                </td>

                                <td>
                                    {{ $barang->kategori->nama_kategori ?? '-' }}
                                </td>

                                <td>
                                    @if($barang->masaEkonomis)
                                    {{ $barang->masaEkonomis->lama_ekonomis }}
                                    {{ $barang->masaEkonomis->satuan }}
                                    @else
                                    -
                                    @endif
                                </td>

                                <td>
                                    {{ $barang->jumlah }}
                                </td>

                                <td>

                                    <a href="{{ route('admin.barang.edit', $barang->barang_id) }}"
                                        class="btn btn-warning btn-sm">
                                        Edit
                                    </a>

                                    <form action="{{ route('admin.barang.destroy', $barang->barang_id) }}"
                                        method="POST"
                                        class="d-inline">

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
                                <td colspan="7" class="text-center text-muted py-4">
                                    Belum ada data barang.
                                </td>
                            </tr>

                            @endforelse

                        </tbody>

                    </table>
                </div>

            </div>

        </div>

    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>

@endsection