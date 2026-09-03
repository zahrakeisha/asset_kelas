@extends('admin.template.app')

@section('title', 'Masa Ekonomis')

@section('page-title', 'Masa Ekonomis')

@section('content')

<!DOCTYPE html>

<html>
<head>
    <title>Data Masa Ekonomis</title>

    <!-- Bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

</head>

<body>

<div class="container mt-5">

    <div class="d-flex justify-content-between align-items-center mb-4">

        <h2>Data Masa Ekonomis</h2>

        <a href="{{ route('admin.masa_ekonomis.create') }}"
           class="btn btn-primary">
            + Tambah Masa Ekonomis
        </a>

    </div>


    @if(session('success'))

        <div class="alert alert-success">
            {{ session('success') }}
        </div>

    @endif


    <div class="card shadow-sm">

        <div class="card-body">

            <div class="table-responsive">

                <table class="table table-bordered table-hover align-middle">

                    <thead class="table-dark">

                        <tr>
                            <th>No</th>
                            <th>Kategori</th>
                            <th>Lama Ekonomis</th>
                            <th>Satuan</th>
                            <th>Keterangan</th>
                            <th width="180">Aksi</th>
                        </tr>

                    </thead>


                    <tbody>

                        @forelse ($masaEkonomis as $item)

                        <tr>

                            <td>
                                {{ $loop->iteration }}
                            </td>

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

                                <a href="{{ route('admin.masa_ekonomis.edit', $item->masa_ekonomis_id) }}"
                                   class="btn btn-sm btn-warning">
                                    Edit
                                </a>


                                <form
                                    action="{{ route('admin.masa_ekonomis.destroy', $item->masa_ekonomis_id) }}"
                                    method="POST"
                                    class="d-inline"
                                >

                                    @csrf
                                    @method('DELETE')

                                    <button type="submit"
                                            class="btn btn-sm btn-danger"
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

</div>


<!-- Bootstrap JS -->

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>

@endsection