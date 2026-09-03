<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                Detail Pengajuan Barang
            </div>
            
            <div class="card-body">

                {{-- Nama Barang --}}
                <div class="mb-3">
                    <label class="form-label fw-bold">Nama Barang :</label>
                    <p class="form-control-plaintext">{{ $pengajuan->barang->nama_barang ?? '-' }}</p>
                </div>

                {{-- Tanggal Pengajuan --}}
                <div class="mb-3">
                    <label class="form-label fw-bold">Tanggal Pengajuan :</label>
                    <p class="form-control-plaintext">{{ $pengajuan->tanggal_pengajuan }}</p>
                </div>

                {{-- Jenis Pengajuan --}}
                <div class="mb-3">
                    <label class="form-label fw-bold">Jenis Pengajuan :</label>
                    <p class="form-control-plaintext">{{ $pengajuan->jenis_pengajuan }}</p>
                </div>

                {{-- Alasan Pengajuan --}}
                <div class="mb-3">
                    <label class="form-label fw-bold">Alasan Pengajuan :</label>
                    <p class="form-control-plaintext">{{ $pengajuan->alasan }}</p>
                </div>

                {{-- Status --}}
                <div class="mb-3">
                    <label class="form-label fw-bold">Status :</label>
                    <p class="form-control-plaintext">
                        @if($pengajuan->status == 'Disetujui')
                            <span class="badge bg-success text-white">Disetujui</span>
                        @elseif($pengajuan->status == 'Ditolak')
                            <span class="badge bg-danger text-white">Ditolak</span>
                        @else
                            <span class="badge bg-warning text-dark">Menunggu</span>
                        @endif
                    </p>
                </div>

                {{-- Catatan Admin --}}
                <div class="mb-3">
                    <label class="form-label fw-bold">Catatan :</label>
                    <p class="form-control-plaintext">{{ $pengajuan->catatan ?? '-' }}</p>
                </div>

            </div>

            <div class="card-footer">
                {{-- Tombol Kembali Otomatis Mengikuti Role yang Login --}}
                <a href="{{ route(Auth::user()->role . '.pengajuan_barang.index') }}" class="btn btn-secondary btn-sm">
                    Kembali
                </a>
            </div>
        </div>
    </div>
</div>