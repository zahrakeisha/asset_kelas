<!DOCTYPE html>
<html>
<head>
    <title>Tambah Barang</title>
</head>
<body>

<h1>Tambah Barang</h1>

@if ($errors->any())
    <ul>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
@endif

<form action="{{ route('admin.barang.store') }}" method="POST">
    @csrf

    <label>Kode Barang</label><br>
    <input type="text" name="kode_barang" value="{{ old('kode_barang') }}">
    <br><br>

    <label>Nama Barang</label><br>
    <input type="text" name="nama_barang" value="{{ old('nama_barang') }}">
    <br><br>

    <label>Kategori</label><br>
    <select name="kategori_id">
        <option value="">-- Pilih Kategori --</option>

        @foreach ($kategori as $item)
            <option value="{{ $item->kategori_id }}"
                {{ old('kategori_id') == $item->kategori_id ? 'selected' : '' }}>
                {{ $item->nama_kategori }}
            </option>
        @endforeach
    </select>
    <br><br>

    <label>Ruangan</label><br>
    <select name="ruangan_id">
        <option value="">-- Pilih Ruangan --</option>

        @foreach ($ruangan as $item)
            <option value="{{ $item->ruangan_id }}"
                {{ old('ruangan_id') == $item->ruangan_id ? 'selected' : '' }}>
                {{ $item->nama_ruangan }}
            </option>
        @endforeach
    </select>
    <br><br>

    <label>Masa Ekonomis</label><br>
    <select name="masa_ekonomis_id">
        <option value="">-- Pilih Masa Ekonomis --</option>

        @foreach ($masa_ekonomis as $item)
            <option value="{{ $item->masa_ekonomis_id }}"
                {{ old('masa_ekonomis_id') == $item->masa_ekonomis_id ? 'selected' : '' }}>
                {{ $item->lama_ekonomis }} {{ $item->satuan }}
            </option>
        @endforeach
    </select>
    <br><br>

    <label>Merek</label><br>
    <input type="text" name="merek" value="{{ old('merek') }}">
    <br><br>

    <label>Model</label><br>
    <input type="text" name="model" value="{{ old('model') }}">
    <br><br>

    <label>Serial Number</label><br>
    <input type="text" name="serial_number" value="{{ old('serial_number') }}">
    <br><br>

    <label>Jumlah</label><br>
    <input type="number" name="jumlah" min="1" value="{{ old('jumlah', 1) }}">
    <br><br>

    <label>Kondisi</label><br>
    <select name="kondisi">
        <option value="">-- Pilih Kondisi --</option>
        <option value="Baik" {{ old('kondisi') == 'Baik' ? 'selected' : '' }}>
            Baik
        </option>
        <option value="Rusak Ringan" {{ old('kondisi') == 'Rusak Ringan' ? 'selected' : '' }}>
            Rusak Ringan
        </option>
        <option value="Rusak Berat" {{ old('kondisi') == 'Rusak Berat' ? 'selected' : '' }}>
            Rusak Berat
        </option>
    </select>
    <br><br>

    <label>Tanggal Perolehan</label><br>
    <input type="date" name="tanggal_perolehan"
           value="{{ old('tanggal_perolehan') }}">
    <br><br>

    <label>Keterangan</label><br>
    <textarea name="keterangan">{{ old('keterangan') }}</textarea>
    <br><br>

    <button type="submit">Simpan</button>
    <a href="{{ route('admin.barang.index') }}">Kembali</a>

</form>

</body>
</html>