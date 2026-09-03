<!DOCTYPE html>

<html>
<head>
    <title>Detail Pengajuan Barang</title>

<!-- Bootstrap CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

</head>

<body>

<div class="container mt-5">

<div class="card shadow">

    <div class="card-header bg-info text-white">
        <h4 class="mb-0">Detail Pengajuan Barang</h4>
    </div>

    <div class="card-body">

        {{-- Nama Barang --}}
        <div class="mb-3">
            <label class="fw-bold">Nama Barang</label>
            <div class="form-control bg-light">
                {{ $pengajuan->barang->nama_barang ?? '-' }}
            </div>
        </div>

        {{-- Tanggal Pengajuan --}}
        <div class="mb-3">
            <label class="fw-bold">Tanggal Pengajuan</label>
            <div class="form-control bg-light">
                {{ $pengajuan->tanggal_pengajuan }}
            </div>
        </div>

        {{-- Jenis Pengajuan --}}
        <div class="mb-3">
            <label class="fw-bold">Jenis Pengajuan</label>
            <div class="form-control bg-light">
                {{ $pengajuan->jenis_pengajuan }}
            </div>
        </div>

        {{-- Alasan --}}
        <div class="mb-3">
            <label class="fw-bold">Alasan Pengajuan</label>
            <div class="form-control bg-light">
                {{ $pengajuan->alasan }}
            </div>
        </div>

        {{-- Status --}}
        <div class="mb-3">
            <label class="fw-bold d-block">Status</label>

            @if($pengajuan->status == 'Menunggu')
                <span class="badge bg-warning text-dark fs-6">
                    Menunggu
                </span>

            @elseif($pengajuan->status == 'Disetujui')
                <span class="badge bg-success fs-6">
                    Disetujui
                </span>

            @elseif($pengajuan->status == 'Ditolak')
                <span class="badge bg-danger fs-6">
                    Ditolak
                </span>

            @else
                <span class="badge bg-secondary fs-6">
                    {{ $pengajuan->status }}
                </span>
            @endif

        </div>

        {{-- Catatan Admin --}}
        <div class="mb-4">
            <label class="fw-bold">Catatan Admin</label>
            <div class="form-control bg-light">
                {{ $pengajuan->catatan ?? '-' }}
            </div>
        </div>

        {{-- Tombol --}}
        <div class="d-flex gap-2">

            <a
                href="{{ route('admin.pengajuan_barang.edit', $pengajuan->pengajuan_id) }}"
                class="btn btn-warning"
            >
                Edit Status / Catatan
            </a>

            <a
                href="{{ route('admin.pengajuan_barang.index') }}"
                class="btn btn-secondary"
            >
                Kembali
            </a>

        </div>

    </div>
</div>

</div>

<!-- Bootstrap JS -->

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
