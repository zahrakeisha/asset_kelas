<!DOCTYPE html>

<html>
<head>
    <title>Tambah Pengajuan Barang</title>

    <!-- Bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

</head>

<body>

<div class="container mt-5">

    <div class="card shadow-sm">

        <div class="card-header bg-primary text-white">
            <h4 class="mb-0">Tambah Pengajuan Barang</h4>
        </div>

        <div class="card-body">

            <form action="{{ route('siswa.pengajuan_barang.store') }}" method="POST">

                @csrf

                <div class="mb-3">
                    <label class="form-label">
                        Tanggal Pengajuan
                    </label>

                    <input type="date"
                           name="tanggal_pengajuan"
                           class="form-control"
                           value="{{ old('tanggal_pengajuan') }}">
                </div>


                <div class="mb-3">
                    <label class="form-label">
                        Jenis Pengajuan
                    </label>

                    <select name="jenis_pengajuan" class="form-select">

                        <option value="">
                            Pilih Jenis Pengajuan
                        </option>

                        <option value="Peminjaman"
                            {{ old('jenis_pengajuan') == 'Peminjaman' ? 'selected' : '' }}>
                            Peminjaman
                        </option>

                        <option value="Pengadaan"
                            {{ old('jenis_pengajuan') == 'Pengadaan' ? 'selected' : '' }}>
                            Pengadaan
                        </option>

                        <option value="Perbaikan"
                            {{ old('jenis_pengajuan') == 'Perbaikan' ? 'selected' : '' }}>
                            Perbaikan
                        </option>

                    </select>
                </div>


                <div class="mb-3">
                    <label class="form-label">
                        Alasan Pengajuan
                    </label>

                    <textarea name="alasan"
                              class="form-control"
                              rows="4"
                              placeholder="Masukkan alasan pengajuan">{{ old('alasan') }}</textarea>
                </div>


                <div class="d-flex gap-2">

                    <button type="submit" class="btn btn-primary">
                        Simpan
                    </button>

                    <a href="{{ route('siswa.pengajuan_barang.index') }}"
                       class="btn btn-secondary">
                        Kembali
                    </a>

                </div>

            </form>

        </div>

    </div>

</div>

</body>
</html>