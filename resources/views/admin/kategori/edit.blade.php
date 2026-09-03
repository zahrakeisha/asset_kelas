<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Kategori</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
        rel="stylesheet">
</head>

<body>

    <div class="container mt-5">

        <div class="row justify-content-center">
            <div class="col-md-6">

                <div class="card shadow-sm">

                    <div class="card-header bg-warning">
                        <h5 class="mb-0">Edit Kategori</h5>
                    </div>

                    <div class="card-body">

                        <form action="{{ route('admin.kategori.update', $kategoris->kategori_id) }}"
                            method="POST">

                            @csrf
                            @method('PUT')

                            <div class="mb-3">
                                <label for="nama_kategori" class="form-label">
                                    Nama Kategori
                                </label>

                                <input type="text"
                                    name="nama_kategori"
                                    id="nama_kategori"
                                    class="form-control"
                                    value="{{ old('nama_kategori', $kategoris->nama_kategori) }}"
                                    required>
                            </div>

                            <div class="d-flex justify-content-between">

                                <a href="{{ route('admin.kategori.index') }}"
                                    class="btn btn-secondary">
                                    Kembali
                                </a>

                                <button type="submit" class="btn btn-warning">
                                    Simpan Perubahan
                                </button>

                            </div>

                        </form>

                    </div>

                </div>

            </div>
        </div>

    </div>

</body>

</html>