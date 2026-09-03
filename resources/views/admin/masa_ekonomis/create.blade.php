<!DOCTYPE html>

<html>
<head>
    <title>Tambah Masa Ekonomis</title>

    <!-- Bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

</head>

<body>

<div class="container mt-5">

    <div class="card shadow-sm">

        <div class="card-header bg-primary text-white">
            <h4 class="mb-0">Tambah Masa Ekonomis</h4>
        </div>

        <div class="card-body">

            <form action="{{ route('admin.masa_ekonomis.store') }}" method="POST">

                @csrf

                {{-- Kategori --}}
                <div class="mb-3">

                    <label class="form-label">
                        Kategori
                    </label>

                    <select name="kategori_id"
                            class="form-select"
                            required>

                        <option value="">
                            -- Pilih Kategori --
                        </option>

                        @foreach ($kategori as $item)

                            <option value="{{ $item->kategori_id }}"
                                {{ old('kategori_id') == $item->kategori_id ? 'selected' : '' }}>

                                {{ $item->nama_kategori }}

                            </option>

                        @endforeach

                    </select>

                </div>


                {{-- Lama Ekonomis --}}
                <div class="mb-3">

                    <label class="form-label">
                        Lama Ekonomis
                    </label>

                    <input type="number"
                           name="lama_ekonomis"
                           class="form-control"
                           value="{{ old('lama_ekonomis') }}"
                           min="1"
                           placeholder="Masukkan lama ekonomis"
                           required>

                </div>


                {{-- Satuan --}}
                <div class="mb-3">

                    <label class="form-label">
                        Satuan
                    </label>

                    <select name="satuan"
                            class="form-select"
                            required>

                        <option value="">
                            -- Pilih Satuan --
                        </option>

                        <option value="Tahun"
                            {{ old('satuan') == 'Tahun' ? 'selected' : '' }}>
                            Tahun
                        </option>

                        <option value="Bulan"
                            {{ old('satuan') == 'Bulan' ? 'selected' : '' }}>
                            Bulan
                        </option>

                    </select>

                </div>


                {{-- Keterangan --}}
                <div class="mb-3">

                    <label class="form-label">
                        Keterangan
                    </label>

                    <textarea name="keterangan"
                              class="form-control"
                              rows="3"
                              placeholder="Masukkan keterangan">{{ old('keterangan') }}</textarea>

                </div>


                {{-- Tombol --}}
                <div class="d-flex gap-2">

                    <button type="submit"
                            class="btn btn-primary">
                        Simpan
                    </button>

                    <a href="{{ route('admin.masa_ekonomis.index') }}"
                       class="btn btn-secondary">
                        Kembali
                    </a>

                </div>

            </form>

        </div>

    </div>

</div>


<!-- Bootstrap JS -->

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>