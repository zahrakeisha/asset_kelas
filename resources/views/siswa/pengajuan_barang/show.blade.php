<div class="row justify-content-center">
    <div class="col-md-8">

    <div class="card shadow">

        <div class="card-header bg-info text-white">
            <h5 class="mb-0">Detail Pengajuan Barang</h5>
        </div>

        <div class="card-body">

            {{-- Nama Barang --}}
            <div class="mb-3">
                <label class="form-label fw-bold">
                    Nama Barang
                </label>

                <p class="form-control-plaintext border rounded px-3">
                    {{ $pengajuan->barang->nama_barang ?? '-' }}
                </p>
            </div>


            {{-- Tanggal Pengajuan --}}
            <div class="mb-3">
                <label class="form-label fw-bold">
                    Tanggal Pengajuan
                </label>

                <p class="form-control-plaintext border rounded px-3">
                    {{ $pengajuan->tanggal_pengajuan }}
                </p>
            </div>


            {{-- Jenis Pengajuan --}}
            <div class="mb-3">
                <label class="form-label fw-bold">
                    Jenis Pengajuan
                </label>

                <p class="form-control-plaintext border rounded px-3">
                    {{ $pengajuan->jenis_pengajuan }}
                </p>
            </div>


            {{-- Alasan Pengajuan --}}
            <div class="mb-3">
                <label class="form-label fw-bold">
                    Alasan Pengajuan
                </label>

                <div class="border rounded p-3 bg-light">
                    {{ $pengajuan->alasan }}
                </div>
            </div>


            {{-- Status --}}
            <div class="mb-3">
                <label class="form-label fw-bold d-block">
                    Status
                </label>

                @if($pengajuan->status == 'Disetujui')

                    <span class="badge bg-success fs-6">
                        Disetujui
                    </span>

                @elseif($pengajuan->status == 'Ditolak')

                    <span class="badge bg-danger fs-6">
                        Ditolak
                    </span>

                @else

                    <span class="badge bg-warning text-dark fs-6">
                        Menunggu
                    </span>

                @endif
            </div>


            {{-- Catatan Admin --}}
            <div class="mb-3">
                <label class="form-label fw-bold">
                    Catatan Admin
                </label>

                <div class="border rounded p-3 bg-light">
                    {{ $pengajuan->catatan ?? '-' }}
                </div>
            </div>

        </div>


        {{-- Tombol Kembali --}}
        <div class="card-footer">

            <a
                href="{{ route(Auth::user()->role . '.pengajuan_barang.index') }}"
                class="btn btn-secondary"
            >
                Kembali
            </a>

        </div>

    </div>

</div>

</div>
