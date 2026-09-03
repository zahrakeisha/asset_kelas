<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Barang</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
        rel="stylesheet">
</head>

<body>

    <div class="container mt-5 mb-5">

        <div class="row justify-content-center">
            <div class="col-lg-8">

                <div class="card shadow-sm">

                    <div class="card-header bg-primary text-white">
                        <h5 class="mb-0">Tambah Barang</h5>
                    </div>

                    <div class="card-body">

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

                        <form action="{{ route('admin.barang.store') }}" method="POST">
                            @csrf

                            <div class="row">

                                {{-- Kode Barang --}}
                                <div class="col-md-6 mb-3">
                                    <label for="kode_barang" class="form-label">
                                        Kode Barang
                                    </label>

                                    <input type="text"
                                        name="kode_barang"
                                        id="kode_barang"
                                        class="form-control"
                                        value="{{ old('kode_barang') }}"
                                        placeholder="Contoh: BRG001"
                                        required>
                                </div>

                                {{-- Nama Barang --}}
                                <div class="col-md-6 mb-3">
                                    <label for="nama_barang" class="form-label">
                                        Nama Barang
                                    </label>

                                    <input type="text"
                                        name="nama_barang"
                                        id="nama_barang"
                                        class="form-control"
                                        value="{{ old('nama_barang') }}"
                                        placeholder="Masukkan nama barang"
                                        required>
                                </div>

                                {{-- Kategori --}}
                                <div class="col-md-6 mb-3">
                                    <label for="kategori_id" class="form-label">
                                        Kategori
                                    </label>

                                    <select name="kategori_id"
                                        id="kategori_id"
                                        class="form-select"
                                        required>

                                        <option value="">-- Pilih Kategori --</option>

                                        @foreach ($kategori as $item)
                                        <option value="{{ $item->kategori_id }}"
                                            {{ old('kategori_id') == $item->kategori_id ? 'selected' : '' }}>
                                            {{ $item->nama_kategori }}
                                        </option>
                                        @endforeach

                                    </select>
                                </div>

                                {{-- Ruangan --}}
                                <div class="col-md-6 mb-3">
                                    <label for="ruangan_id" class="form-label">
                                        Ruangan
                                    </label>

                                    <select name="ruangan_id"
                                        id="ruangan_id"
                                        class="form-select"
                                        required>

                                        <option value="">-- Pilih Ruangan --</option>

                                        @foreach ($ruangan as $item)
                                        <option value="{{ $item->ruangan_id }}"
                                            {{ old('ruangan_id') == $item->ruangan_id ? 'selected' : '' }}>
                                            {{ $item->nama_ruangan }}
                                        </option>
                                        @endforeach

                                    </select>
                                </div>

                                {{-- Masa Ekonomis --}}
                                <div class="col-md-6 mb-3">
                                    <label for="masa_ekonomis_id" class="form-label">
                                        Masa Ekonomis
                                    </label>

                                    <select name="masa_ekonomis_id"
                                        id="masa_ekonomis_id"
                                        class="form-select"
                                        required>

                                        <option value="">-- Pilih Masa Ekonomis --</option>

                                        @foreach ($masa_ekonomis as $item)
                                        <option value="{{ $item->masa_ekonomis_id }}"
                                            {{ old('masa_ekonomis_id') == $item->masa_ekonomis_id ? 'selected' : '' }}>
                                            {{ $item->lama_ekonomis }} {{ $item->satuan }}
                                        </option>
                                        @endforeach

                                    </select>
                                </div>

                                {{-- Jumlah --}}
                                <div class="col-md-6 mb-3">
                                    <label for="jumlah" class="form-label">
                                        Jumlah
                                    </label>

                                    <input type="number"
                                        name="jumlah"
                                        id="jumlah"
                                        class="form-control"
                                        min="1"
                                        value="{{ old('jumlah', 1) }}"
                                        required>
                                </div>

                                {{-- Merek --}}
                                <div class="col-md-6 mb-3">
                                    <label for="merek" class="form-label">
                                        Merek
                                    </label>

                                    <input type="text"
                                        name="merek"
                                        id="merek"
                                        class="form-control"
                                        value="{{ old('merek') }}"
                                        placeholder="Masukkan merek">
                                </div>

                                {{-- Model --}}
                                <div class="col-md-6 mb-3">
                                    <label for="model" class="form-label">
                                        Model
                                    </label>

                                    <input type="text"
                                        name="model"
                                        id="model"
                                        class="form-control"
                                        value="{{ old('model') }}"
                                        placeholder="Masukkan model">
                                </div>

                                {{-- Serial Number --}}
                                <div class="col-md-6 mb-3">
                                    <label for="serial_number" class="form-label">
                                        Serial Number
                                    </label>

                                    <input type="text"
                                        name="serial_number"
                                        id="serial_number"
                                        class="form-control"
                                        value="{{ old('serial_number') }}"
                                        placeholder="Masukkan serial number">
                                </div>

                                {{-- Kondisi --}}
                                <div class="col-md-6 mb-3">
                                    <label for="kondisi" class="form-label">
                                        Kondisi
                                    </label>

                                    <select name="kondisi"
                                        id="kondisi"
                                        class="form-select"
                                        required>

                                        <option value="">-- Pilih Kondisi --</option>

                                        <option value="Baik"
                                            {{ old('kondisi') == 'Baik' ? 'selected' : '' }}>
                                            Baik
                                        </option>

                                        <option value="Rusak Ringan"
                                            {{ old('kondisi') == 'Rusak Ringan' ? 'selected' : '' }}>
                                            Rusak Ringan
                                        </option>

                                        <option value="Rusak Berat"
                                            {{ old('kondisi') == 'Rusak Berat' ? 'selected' : '' }}>
                                            Rusak Berat
                                        </option>

                                    </select>
                                </div>

                                {{-- Tanggal Perolehan --}}
                                <div class="col-md-6 mb-3">
                                    <label for="tanggal_perolehan" class="form-label">
                                        Tanggal Perolehan
                                    </label>

                                    <input type="date"
                                        name="tanggal_perolehan"
                                        id="tanggal_perolehan"
                                        class="form-control"
                                        value="{{ old('tanggal_perolehan') }}">
                                </div>

                                {{-- Keterangan --}}
                                <div class="col-12 mb-3">
                                    <label for="keterangan" class="form-label">
                                        Keterangan
                                    </label>

                                    <textarea name="keterangan"
                                        id="keterangan"
                                        class="form-control"
                                        rows="3"
                                        placeholder="Masukkan keterangan jika ada">{{ old('keterangan') }}</textarea>
                                </div>

                            </div>

                            <div class="d-flex justify-content-between mt-3">

                                <a href="{{ route('admin.barang.index') }}"
                                    class="btn btn-secondary">
                                    Kembali
                                </a>

                                <button type="submit" class="btn btn-primary">
                                    Simpan Barang
                                </button>

                            </div>

                        </form>

                    </div>

                </div>

            </div>
        </div>

    </div>

</body>

</html>