<!DOCTYPE html>
<html>

<head>
    <title>Tambah Barang</title>

    <!-- Bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>

<div class="container mt-5 mb-5">

    <div class="card shadow-sm">

        <div class="card-header bg-primary text-white">
            <h4 class="mb-0">Tambah Barang</h4>
        </div>

        <div class="card-body">

            {{-- Error Validasi --}}
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul class="mb-0">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif


            <form action="{{ route('admin.barang.store') }}" method="POST">

                @csrf


                {{-- Kode Barang --}}
                <div class="mb-3">
                    <label class="form-label">Kode Barang</label>

                    <input type="text"
                           name="kode_barang"
                           class="form-control"
                           value="{{ old('kode_barang') }}"
                           placeholder="Masukkan kode barang">
                </div>


                {{-- Nama Barang --}}
                <div class="mb-3">
                    <label class="form-label">Nama Barang</label>

                    <input type="text"
                           name="nama_barang"
                           class="form-control"
                           value="{{ old('nama_barang') }}"
                           placeholder="Masukkan nama barang">
                </div>


                {{-- Kategori --}}
                <div class="mb-3">
                    <label class="form-label">Kategori</label>

                    <select name="kategori_id" class="form-select">

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
                <div class="mb-3">
                    <label class="form-label">Ruangan</label>

                    <select name="ruangan_id" class="form-select">

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
                <div class="mb-3">
                    <label class="form-label">Masa Ekonomis</label>

                    <select name="masa_ekonomis_id" class="form-select">

                        <option value="">-- Pilih Masa Ekonomis --</option>

                        @foreach ($masa_ekonomis as $item)

                            <option value="{{ $item->masa_ekonomis_id }}"
                                {{ old('masa_ekonomis_id') == $item->masa_ekonomis_id ? 'selected' : '' }}>

                                {{ $item->lama_ekonomis }} {{ $item->satuan }}

                            </option>

                        @endforeach

                    </select>
                </div>


                {{-- Merek --}}
                <div class="mb-3">
                    <label class="form-label">Merek</label>

                    <input type="text"
                           name="merek"
                           class="form-control"
                           value="{{ old('merek') }}"
                           placeholder="Masukkan merek barang">
                </div>


                {{-- Model --}}
                <div class="mb-3">
                    <label class="form-label">Model</label>

                    <input type="text"
                           name="model"
                           class="form-control"
                           value="{{ old('model') }}"
                           placeholder="Masukkan model barang">
                </div>


                {{-- Serial Number --}}
                <div class="mb-3">
                    <label class="form-label">Serial Number</label>

                    <input type="text"
                           name="serial_number"
                           class="form-control"
                           value="{{ old('serial_number') }}"
                           placeholder="Masukkan serial number">
                </div>


                {{-- Jumlah --}}
                <div class="mb-3">
                    <label class="form-label">Jumlah</label>

                    <input type="number"
                           name="jumlah"
                           class="form-control"
                           min="1"
                           value="{{ old('jumlah', 1) }}"
                           placeholder="Masukkan jumlah">
                </div>


                {{-- Kondisi --}}
                <div class="mb-3">
                    <label class="form-label">Kondisi</label>

                    <select name="kondisi" class="form-select">

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
                <div class="mb-3">
                    <label class="form-label">Tanggal Perolehan</label>

                    <input type="date"
                           name="tanggal_perolehan"
                           class="form-control"
                           value="{{ old('tanggal_perolehan') }}">
                </div>


                {{-- Keterangan --}}
                <div class="mb-3">
                    <label class="form-label">Keterangan</label>

                    <textarea name="keterangan"
                              class="form-control"
                              rows="3"
                              placeholder="Masukkan keterangan">{{ old('keterangan') }}</textarea>
                </div>


                {{-- Tombol --}}
                <div class="d-flex gap-2">

                    <button type="submit" class="btn btn-primary">
                        Simpan
                    </button>

                    <a href="{{ route('admin.barang.index') }}"
                       class="btn btn-secondary">
                        Kembali
                    </a>

                </div>

            </form>

        </div>

    </div>

</div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>