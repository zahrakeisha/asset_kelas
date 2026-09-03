<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Ruangan</title>

    {{-- Bootstrap CSS --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
          rel="stylesheet">
</head>

<body>

<div class="container mt-5">

    <div class="d-flex justify-content-between align-items-center mb-4">
        <h1 class="h3 mb-0">Detail Ruangan</h1>

        <a href="{{ route('admin.ruangan.index') }}"
           class="btn btn-secondary">
            Kembali
        </a>
    </div>

    <div class="card shadow-sm mb-4">

        <div class="card-header bg-primary text-white">
            <h5 class="mb-0">Informasi Ruangan</h5>
        </div>

        <div class="card-body">

            <div class="mb-3">
                <strong>Nama Ruangan</strong>
                <p class="mb-0">
                    {{ $ruangan->nama_ruangan }}
                </p>
            </div>

            <div class="mb-3">
                <strong>Keterangan</strong>
                <p class="mb-0">
                    {{ $ruangan->keterangan ?? '-' }}
                </p>
            </div>

        </div>
    </div>

    <div class="card shadow-sm">

        <div class="card-header bg-primary text-white">
            <h5 class="mb-0">Daftar Barang</h5>
        </div>

        <div class="card-body">

            <div class="table-responsive">

                <table class="table table-bordered table-hover align-middle mb-0">

                    <thead class="table-light">
                        <tr>
                            <th width="80">No</th>
                            <th>Nama Barang</th>
                        </tr>
                    </thead>

                    <tbody>

                        @forelse ($ruangan->barang as $barang)

                        <tr>
                            <td>{{ $loop->iteration }}</td>

                            <td>
                                {{ $barang->nama_barang }}
                            </td>
                        </tr>

                        @empty

                        <tr>
                            <td colspan="2"
                                class="text-center text-muted py-4">
                                Belum ada barang di ruangan ini.
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