<h3>Edit Masa Ekonomis</h3>

<form action="{{ route('admin.masa_ekonomis.update', $masaEkonomis->masa_ekonomis_id) }}" method="POST">
    @csrf
    @method('PUT')

    <div>
        <label>Kategori</label>
        <select name="kategori_id" required>
            <option value="">-- Pilih Kategori --</option>

            @foreach ($kategori as $kategori)
            <option value="{{ $kategori->kategori_id }}"
                {{ $masaEkonomis->kategori_id == $kategori->kategori_id ? 'selected' : '' }}>
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
            value="{{ old('lama_ekonomis', $masaEkonomis->lama_ekonomis) }}"
            min="1"
            required>
    </div>

    <br>

    <div>
        <label>Satuan</label>
        <select name="satuan" required>
            <option value="Tahun"
                {{ $masaEkonomis->satuan == 'Tahun' ? 'selected' : '' }}>
                Tahun
            </option>

            <option value="Bulan"
                {{ $masaEkonomis->satuan == 'Bulan' ? 'selected' : '' }}>
                Bulan
            </option>
        </select>
    </div>

    <br>

    <div>
        <label>Keterangan</label>
        <textarea name="keterangan" rows="3">{{ old('keterangan', $masaEkonomis->keterangan) }}</textarea>
    </div>

    <br>

    <button type="submit">Update</button>

    <a href="{{ route('admin.masa_ekonomis.index') }}">
        Kembali
    </a>
</form>