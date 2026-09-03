<div class="row">
    <div class="col-md-8">

        <div class="card">
            <div class="card-header">
                Tambah Pengajuan Barang
            </div>

            <div class="card-body">

                <form action="{{ route('siswa.pengajuan_barang.store') }}" method="POST">
                    @csrf

                    <div class="mb-3">
                        <label class="form-label">Tanggal Pengajuan</label>
                        <input type="date"
                               name="tanggal_pengajuan"
                               class="form-control">
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Jenis Pengajuan</label>
                        <select name="jenis_pengajuan" class="form-select">
                            <option value="">-- Pilih Jenis Pengajuan --</option>
                            <option value="Peminjaman">Peminjaman</option>
                            <option value="Pengadaan">Pengadaan</option>
                            <option value="Perbaikan">Perbaikan</option>
                        </select>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Alasan</label>
                        <textarea name="alasan"
                                  class="form-control"
                                  rows="4"
                                  placeholder="Masukkan alasan pengajuan"></textarea>
                    </div>

                    <button type="submit" class="btn btn-primary">
                        Simpan
                    </button>

                    <a href="{{ route('siswa.pengajuan_barang.index') }}"
                       class="btn btn-secondary">
                        Kembali
                    </a>

                </form>

            </div>
        </div>

    </div>
</div>