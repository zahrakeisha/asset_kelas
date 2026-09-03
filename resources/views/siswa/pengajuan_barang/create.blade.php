<div class="row justify-content-center">
    <div class="col-md-8">

    <div class="card shadow">

        <div class="card-header bg-primary text-white">
            <h5 class="mb-0">Tambah Pengajuan Barang</h5>
        </div>

        <form action="{{ route('siswa.pengajuan_barang.store') }}" method="POST">
            {{ csrf_field() }}

            <div class="card-body">

                {{-- Pesan Error --}}
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

                {{-- Pilih Barang --}}
                <div class="mb-3">
                    <label for="barang_id" class="form-label">
                        Pilih Barang
                    </label>

                    <select
                        class="form-select"
                        name="barang_id"
                        id="barang_id"
                        required
                    >
                        <option value="">-- Pilih Barang --</option>

                        @foreach($barang as $b)
                            <option
                                value="{{ $b->barang_id }}"
                                {{ old('barang_id') == $b->barang_id ? 'selected' : '' }}
                            >
                                {{ $b->nama_barang }}
                            </option>
                        @endforeach

                    </select>

                    @if ($errors->has('barang_id'))
                        <div class="text-danger mt-1">
                            {{ $errors->first('barang_id') }}
                        </div>
                    @endif
                </div>


                {{-- Tanggal Pengajuan --}}
                <div class="mb-3">
                    <label for="tanggal_pengajuan" class="form-label">
                        Tanggal Pengajuan
                    </label>

                    <input
                        type="date"
                        class="form-control"
                        name="tanggal_pengajuan"
                        id="tanggal_pengajuan"
                        value="{{ old('tanggal_pengajuan', date('Y-m-d')) }}"
                        required
                    >

                    @if ($errors->has('tanggal_pengajuan'))
                        <div class="text-danger mt-1">
                            {{ $errors->first('tanggal_pengajuan') }}
                        </div>
                    @endif
                </div>


                {{-- Jenis Pengajuan --}}
                <div class="mb-3">
                    <label for="jenis_pengajuan" class="form-label">
                        Jenis Pengajuan
                    </label>

                    <select
                        class="form-select"
                        name="jenis_pengajuan"
                        id="jenis_pengajuan"
                        required
                    >
                        <option value="">
                            -- Pilih Jenis Pengajuan --
                        </option>

                        <option
                            value="Perbaikan"
                            {{ old('jenis_pengajuan') == 'Perbaikan' ? 'selected' : '' }}
                        >
                            Perbaikan
                        </option>

                        <option
                            value="Penggantian"
                            {{ old('jenis_pengajuan') == 'Penggantian' ? 'selected' : '' }}
                        >
                            Penggantian
                        </option>

                        <option
                            value="Penambahan"
                            {{ old('jenis_pengajuan') == 'Penambahan' ? 'selected' : '' }}
                        >
                            Penambahan
                        </option>

                    </select>

                    @if ($errors->has('jenis_pengajuan'))
                        <div class="text-danger mt-1">
                            {{ $errors->first('jenis_pengajuan') }}
                        </div>
                    @endif
                </div>


                {{-- Alasan Pengajuan --}}
                <div class="mb-3">
                    <label for="alasan" class="form-label">
                        Alasan Pengajuan
                    </label>

                    <textarea
                        class="form-control"
                        name="alasan"
                        id="alasan"
                        rows="4"
                        placeholder="Masukkan alasan pengajuan..."
                        required
                    >{{ old('alasan') }}</textarea>

                    @if ($errors->has('alasan'))
                        <div class="text-danger mt-1">
                            {{ $errors->first('alasan') }}
                        </div>
                    @endif
                </div>

            </div>


            {{-- Tombol --}}
            <div class="card-footer">

                <button
                    type="submit"
                    class="btn btn-primary"
                >
                    Simpan
                </button>

                <a
                    href="{{ route('siswa.pengajuan_barang.index') }}"
                    class="btn btn-secondary"
                >
                    Kembali
                </a>

            </div>

        </form>

    </div>

</div>

</div>
