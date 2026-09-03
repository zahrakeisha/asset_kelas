<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Kategori</title>

    {{-- Bootstrap CSS --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
          rel="stylesheet">
</head>

<body>

<div class="container mt-5">

    <div class="d-flex justify-content-between align-items-center mb-4">
        <h1 class="h3 mb-0">Data Kategori</h1>

        <a href="{{ route('admin.kategori.create') }}"
           class="btn btn-primary">
            + Tambah Kategori
        </a>
    </div>

    <div class="card shadow-sm">
        <div class="card-header bg-primary text-white">
            <h5 class="mb-0">Daftar Kategori</h5>
        </div>

        <div class="card-body">

            <div class="table-responsive">
                <table class="table table-bordered table-hover align-middle mb-0">

                    <thead class="table-light">
                        <tr>
                            <th width="80">No</th>
                            <th>Nama Kategori</th>
                            <th width="200">Aksi</th>
                        </tr>
                    </thead>

                    <tbody>
                        @forelse ($kategoris as $kategori)
                        <tr>
                            <td>{{ $loop->iteration }}</td>

                            <td>
                                {{ $kategori->nama_kategori }}
                            </td>

                            <td>
                                <a href="{{ route('admin.kategori.edit', $kategori->kategori_id) }}"
                                   class="btn btn-warning btn-sm">
                                    Edit
                                </a>

                                <form action="{{ route('admin.kategori.destroy', $kategori->kategori_id) }}"
                                      method="POST"
                                      class="d-inline">

                                    @csrf
                                    @method('DELETE')

                                    <button type="submit"
                                            class="btn btn-danger btn-sm"
                                            onclick="return confirm('Yakin ingin menghapus kategori ini?')">
                                        Hapus
                                    </button>

                                </form>
                            </td>
                        </tr>

                        @empty
                        <tr>
                            <td colspan="3" class="text-center text-muted py-4">
                                Belum ada data kategori.
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