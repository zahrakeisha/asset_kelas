<h3>Tambah Masa Ekonomis</h3>

<form action="{{ route('admin.masa_ekonomis.store') }}" method="POST">
    @csrf

    <div>
        <label>Kategori</label>
        <select name="kategori_id" required>
            <option value="">-- Pilih Kategori --</option>

            @foreach ($kategori as $kategori)
            <option value="{{ $kategori->kategori_id }}">
                {{ $kategori->nama_kategori }}
            </option>
            @endforeach
        </select>
    </div>

    <br>

    <div>
        <label>Lama Ekonomis</label>
        <input
            type="number"
            name="lama_ekonomis"
            value="{{ old('lama_ekonomis') }}"
            min="1"
            required>
    </div>

    <br>

    <div>
        <label>Satuan</label>
        <select name="satuan" required>
            <option value="Tahun">Tahun</option>
            <option value="Bulan">Bulan</option>
        </select>
    </div>

    <br>

    <div>
        <label>Keterangan</label>
        <textarea name="keterangan" rows="3">{{ old('keterangan') }}</textarea>
    </div>

    <br>

    <button type="submit">Simpan</button>

    <a href="{{ route('admin.masa_ekonomis.index') }}">
        Kembali
    </a>
</form>