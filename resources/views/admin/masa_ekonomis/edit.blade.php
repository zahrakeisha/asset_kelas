<!DOCTYPE html>

<html>
<head>
    <title>Edit Masa Ekonomis</title>

    <!-- Bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

</head>

<body>

<div class="container mt-5">

    <div class="card shadow-sm">

        <div class="card-header bg-warning">
            <h4 class="mb-0">Edit Masa Ekonomis</h4>
        </div>

        <div class="card-body">

            <form action="{{ route('admin.masa_ekonomis.update', $masaEkonomis->masa_ekonomis_id) }}"
                  method="POST">

                @csrf
                @method('PUT')


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
                                {{ $masaEkonomis->kategori_id == $item->kategori_id ? 'selected' : '' }}>

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
                           value="{{ old('lama_ekonomis', $masaEkonomis->lama_ekonomis) }}"
                           min="1"
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


                {{-- Keterangan --}}
                <div class="mb-3">

                    <label class="form-label">
                        Keterangan
                    </label>

                    <textarea name="keterangan"
                              class="form-control"
                              rows="3"
                              placeholder="Masukkan keterangan">{{ old('keterangan', $masaEkonomis->keterangan) }}</textarea>

                </div>


                {{-- Tombol --}}
                <div class="d-flex gap-2">

                    <button type="submit"
                            class="btn btn-warning">
                        Update
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