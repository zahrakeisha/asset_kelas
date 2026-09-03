<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Ruangan</title>

    {{-- Bootstrap CSS --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
          rel="stylesheet">
</head>

<body>

<div class="container mt-5">

    <div class="d-flex justify-content-between align-items-center mb-4">
        <h1 class="h3 mb-0">Edit Ruangan</h1>

        <a href="{{ route('admin.ruangan.index') }}"
           class="btn btn-secondary">
            Kembali
        </a>
    </div>

    <div class="card shadow-sm">

        <div class="card-header bg-primary text-white">
            <h5 class="mb-0">Form Edit Ruangan</h5>
        </div>

        <div class="card-body">

            <form action="{{ route('admin.ruangan.update', $ruangan->ruangan_id) }}"
                  method="POST">

                @csrf

                <div class="mb-3">
                    <label class="form-label">
                        Nama Ruangan
                    </label>

                    <input type="text"
                           name="nama_ruangan"
                           class="form-control"
                           value="{{ old('nama_ruangan', $ruangan->nama_ruangan) }}"
                           placeholder="Masukkan nama ruangan">

                    @error('nama_ruangan')
                        <div class="text-danger mt-1">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label class="form-label">
                        Keterangan
                    </label>

                    <textarea name="keterangan"
                              class="form-control"
                              rows="4"
                              placeholder="Masukkan keterangan">{{ old('keterangan', $ruangan->keterangan) }}</textarea>

                    @error('keterangan')
                        <div class="text-danger mt-1">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <button type="submit" class="btn btn-primary">
                    Update
                </button>

                <a href="{{ route('admin.ruangan.index') }}"
                   class="btn btn-secondary">
                    Batal
                </a>

            </form>

        </div>
    </div>

</div>

{{-- Bootstrap JS --}}
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>