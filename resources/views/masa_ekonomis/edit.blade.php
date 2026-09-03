<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Masa Ekonomis</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>

    <div class="container mt-5">

        <div class="d-flex justify-content-between align-items-center mb-4">
            <h3>Edit Masa Ekonomis</h3>

            <a href="{{ route('admin.masa_ekonomis.index') }}"
                class="btn btn-secondary">
                Kembali
            </a>
        </div>

        <div class="card shadow-sm">

            <div class="card-header bg-primary text-white">
                <h5 class="mb-0">Form Edit Masa Ekonomis</h5>
            </div>

            <div class="card-body">

                <form action="{{ route('admin.masa_ekonomis.update', $masaEkonomis->masa_ekonomis_id) }}"
                    method="POST">

                    @csrf
                    @method('PUT')

                    {{-- Kategori --}}
                    <div class="mb-3">
                        <label for="kategori_id" class="form-label">
                            Kategori
                        </label>

                        <select name="kategori_id"
                            id="kategori_id"
                            class="form-select"
                            required>

                            <option value="">-- Pilih Kategori --</option>

                            @foreach ($kategori as $kategori)
                            <option value="{{ $kategori->kategori_id }}"
                                {{ $masaEkonomis->kategori_id == $kategori->kategori_id ? 'selected' : '' }}>
                                {{ $kategori->nama_kategori }}
                            </option>
                            @endforeach

                        </select>
                    </div>

                    {{-- Lama Ekonomis --}}
                    <div class="mb-3">
                        <label for="lama_ekonomis" class="form-label">
                            Lama Ekonomis
                        </label>

                        <input type="number"
                            name="lama_ekonomis"
                            id="lama_ekonomis"
                            class="form-control"
                            value="{{ old('lama_ekonomis', $masaEkonomis->lama_ekonomis) }}"
                            min="1"
                            required>
                    </div>

                    {{-- Satuan --}}
                    <div class="mb-3">
                        <label for="satuan" class="form-label">
                            Satuan
                        </label>

                        <select name="satuan"
                            id="satuan"
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
                        <label for="keterangan" class="form-label">
                            Keterangan
                        </label>

                        <textarea name="keterangan"
                            id="keterangan"
                            class="form-control"
                            rows="3">{{ old('keterangan', $masaEkonomis->keterangan) }}</textarea>
                    </div>

                    {{-- Tombol --}}
                    <div class="d-flex gap-2">

                        <button type="submit" class="btn btn-primary">
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

</body>

</html>