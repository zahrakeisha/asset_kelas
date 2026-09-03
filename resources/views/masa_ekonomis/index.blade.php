<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Masa Ekonomis</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>

    <div class="container mt-5">

        <div class="d-flex justify-content-between align-items-center mb-4">
            <h1>Data Masa Ekonomis</h1>

            <a href="{{ route('admin.masa_ekonomis.create') }}"
                class="btn btn-primary">
                + Tambah Masa Ekonomis
            </a>
        </div>

        <div class="card shadow-sm">

            <div class="card-header bg-primary text-white">
                <h4 class="mb-0">Daftar Masa Ekonomis</h4>
            </div>

            <div class="card-body">

                <div class="table-responsive">

                    <table class="table table-bordered align-middle">

                        <thead>
                            <tr>
                                <th width="60">No</th>
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

                                    <a href="/admin/masa_ekonomis/{{ $item->masa_ekonomis_id }}/edit"
                                        class="btn btn-warning btn-sm">
                                        Edit
                                    </a>

                                    <form
                                        action="{{ route('admin.masa_ekonomis.destroy', $item->masa_ekonomis_id) }}"
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

</body>

</html>