<!DOCTYPE html>

<html>
<head>
    <title>Edit Pengajuan Barang</title>

<!-- Bootstrap CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

</head>

<body>

<div class="container mt-5">

<div class="card shadow">

    <div class="card-header bg-warning">
        <h4 class="mb-0">Edit Pengajuan Barang</h4>
    </div>

    <div class="card-body">

        {{-- Tampilkan Error Validasi --}}
        @if ($errors->any())
            <div class="alert alert-danger">
                <strong>Terjadi kesalahan!</strong>
                <ul class="mb-0 mt-2">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        {{-- Form Edit Pengajuan Barang --}}
        <form action="{{ route('admin.pengajuan_barang.update', $pengajuan->pengajuan_id) }}" method="POST">

            @csrf
            @method('PUT')

            {{-- Pilih Barang --}}
            <div class="mb-3">
                <label for="barang_id" class="form-label">
                    Barang
                </label>

                <select name="barang_id" id="barang_id" class="form-select" required>
                    <option value="">-- Pilih Barang --</option>

                    @foreach($barang as $b)
                        <option
                            value="{{ $b->barang_id }}"
                            {{ $pengajuan->barang_id == $b->barang_id ? 'selected' : '' }}
                        >
                            {{ $b->nama_barang }}
                        </option>
                    @endforeach

                </select>
            </div>

            {{-- Tanggal Pengajuan --}}
            <div class="mb-3">
                <label for="tanggal_pengajuan" class="form-label">
                    Tanggal Pengajuan
                </label>

                <input
                    type="date"
                    name="tanggal_pengajuan"
                    id="tanggal_pengajuan"
                    class="form-control"
                    value="{{ $pengajuan->tanggal_pengajuan }}"
                    required
                >
            </div>

            {{-- Jenis Pengajuan --}}
            <div class="mb-3">
                <label for="jenis_pengajuan" class="form-label">
                    Jenis Pengajuan
                </label>

                <select
                    name="jenis_pengajuan"
                    id="jenis_pengajuan"
                    class="form-select"
                    required
                >
                    <option
                        value="Perbaikan"
                        {{ $pengajuan->jenis_pengajuan == 'Perbaikan' ? 'selected' : '' }}
                    >
                        Perbaikan
                    </option>

                    <option
                        value="Penggantian"
                        {{ $pengajuan->jenis_pengajuan == 'Penggantian' ? 'selected' : '' }}
                    >
                        Penggantian
                    </option>

                    <option
                        value="Penambahan"
                        {{ $pengajuan->jenis_pengajuan == 'Penambahan' ? 'selected' : '' }}
                    >
                        Penambahan
                    </option>
                </select>
            </div>

            {{-- Alasan --}}
            <div class="mb-3">
                <label for="alasan" class="form-label">
                    Alasan Pengajuan
                </label>

                <textarea
                    name="alasan"
                    id="alasan"
                    class="form-control"
                    rows="4"
                    required
                >{{ $pengajuan->alasan }}</textarea>
            </div>

            {{-- Status Pengajuan --}}
            <div class="mb-3">
                <label for="status" class="form-label">
                    Status Pengajuan
                </label>

                <select
                    name="status"
                    id="status"
                    class="form-select"
                    required
                >
                    <option
                        value="Menunggu"
                        {{ $pengajuan->status == 'Menunggu' ? 'selected' : '' }}
                    >
                        Menunggu
                    </option>

                    <option
                        value="Disetujui"
                        {{ $pengajuan->status == 'Disetujui' ? 'selected' : '' }}
                    >
                        Disetujui
                    </option>

                    <option
                        value="Ditolak"
                        {{ $pengajuan->status == 'Ditolak' ? 'selected' : '' }}
                    >
                        Ditolak
                    </option>
                </select>
            </div>

            {{-- Catatan --}}
            <div class="mb-3">
                <label for="catatan" class="form-label">
                    Catatan Admin
                </label>

                <textarea
                    name="catatan"
                    id="catatan"
                    class="form-control"
                    rows="3"
                >{{ $pengajuan->catatan }}</textarea>
            </div>

            {{-- Tombol --}}
            <div class="d-flex gap-2">

                <button type="submit" class="btn btn-primary">
                    Update Pengajuan
                </button>

                <a
                    href="{{ route('admin.pengajuan_barang.index') }}"
                    class="btn btn-secondary"
                >
                    Batal
                </a>

            </div>

        </form>

    </div>
</div>

</div>

<!-- Bootstrap JS -->

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
