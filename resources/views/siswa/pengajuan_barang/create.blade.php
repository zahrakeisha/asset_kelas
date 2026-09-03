<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                Tambah Pengajuan Barang
            </div>
            
            <form action="{{ route('siswa.pengajuan_barang.store') }}" method="POST">
                {{ csrf_field() }}

                <div class="card-body">

                    {{-- Pilih Barang --}}
                    <div class="mb-3">
                        <label for="barang_id" class="form-label">Pilih Barang :</label>
                        <select class="form-control" name="barang_id" id="barang_id">
                            <option value="">-- Pilih Barang --</option>
                            @foreach($barang as $b)
                                <option value="{{ $b->barang_id }}" {{ old('barang_id') == $b->barang_id ? 'selected' : '' }}>
                                    {{ $b->nama_barang }}
                                </option>
                            @endforeach
                        </select>
                        @if ($errors->has('barang_id'))
                            <span class="text-danger">{{ $errors->first('barang_id') }}</span>
                        @endif
                    </div>

                    {{-- Tanggal Pengajuan --}}
                    <div class="mb-3">
                        <label for="tanggal_pengajuan" class="form-label">Tanggal Pengajuan :</label>
                        <input type="date" class="form-control" name="tanggal_pengajuan" id="tanggal_pengajuan" value="{{ old('tanggal_pengajuan', date('Y-m-d')) }}">
                        @if ($errors->has('tanggal_pengajuan'))
                            <span class="text-danger">{{ $errors->first('tanggal_pengajuan') }}</span>
                        @endif
                    </div>

                    {{-- Jenis Pengajuan --}}
                    <div class="mb-3">
                        <label for="jenis_pengajuan" class="form-label">Jenis Pengajuan :</label>
                        <select class="form-control" name="jenis_pengajuan" id="jenis_pengajuan">
                            <option value="">-- Pilih Jenis Pengajuan --</option>
                            <option value="Perbaikan" {{ old('jenis_pengajuan') == 'Perbaikan' ? 'selected' : '' }}>Perbaikan</option>
                            <option value="Penggantian" {{ old('jenis_pengajuan') == 'Penggantian' ? 'selected' : '' }}>Penggantian</option>
                            <option value="Penambahan" {{ old('jenis_pengajuan') == 'Penambahan' ? 'selected' : '' }}>Penambahan</option>
                        </select>
                        @if ($errors->has('jenis_pengajuan'))
                            <span class="text-danger">{{ $errors->first('jenis_pengajuan') }}</span>
                        @endif
                    </div>

                    {{-- Alasan Pengajuan --}}
                    <div class="mb-3">
                        <label for="alasan" class="form-label">Alasan Pengajuan :</label>
                        <textarea class="form-control" name="alasan" id="alasan" rows="4">{{ old('alasan') }}</textarea>
                        @if ($errors->has('alasan'))
                            <span class="text-danger">{{ $errors->first('alasan') }}</span>
                        @endif
                    </div>

                </div>

                <div class="card-footer">
                    <button type="submit" class="btn btn-primary btn-sm">Save</button>
                    <a href="{{ route('siswa.pengajuan_barang.index') }}" class="btn btn-success btn-sm">Back</a>
                </div>
            </form>
        </div>
    </div>
</div>