<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Tambah Masa Ekonomis</title>

    <style>
        * {
            box-sizing: border-box;
        }

        body {
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
            background-color: #ffffff;
        }

        .container {
            width: 92%;
            margin: 50px auto;
        }

        .header {
            margin-bottom: 30px;
        }

        .header h1 {
            font-size: 32px;
            margin: 0;
            color: #172033;
        }

        .card {
            border: 1px solid #ddd;
            border-radius: 6px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.15);
            overflow: hidden;
        }

        .card-header {
            background-color: #0d6efd;
            color: white;
            padding: 12px 20px;
        }

        .card-header h4 {
            margin: 0;
            font-size: 24px;
        }

        .card-body {
            padding: 25px;
        }

        .form-group {
            margin-bottom: 20px;
        }

        .form-group label {
            display: block;
            margin-bottom: 8px;
            font-weight: bold;
        }

        .form-control {
            width: 100%;
            padding: 10px 12px;
            border: 1px solid #ced4da;
            border-radius: 5px;
            font-size: 16px;
        }

        .form-control:focus {
            outline: none;
            border-color: #86b7fe;
        }

        textarea.form-control {
            resize: vertical;
        }

        .btn {
            display: inline-block;
            padding: 10px 16px;
            border-radius: 5px;
            text-decoration: none;
            border: none;
            font-size: 15px;
            cursor: pointer;
        }

        .btn-primary {
            background-color: #0d6efd;
            color: white;
        }

        .btn-primary:hover {
            background-color: #0b5ed7;
        }

        .btn-secondary {
            background-color: #6c757d;
            color: white;
        }

        .btn-secondary:hover {
            background-color: #5c636a;
        }

        .error {
            color: #dc3545;
            font-size: 14px;
            margin-top: 5px;
        }
    </style>
</head>

<body>

    <div class="container">

        {{-- Judul --}}
        <div class="header">
            <h1>Tambah Masa Ekonomis</h1>
        </div>

        {{-- Card --}}
        <div class="card">

            <div class="card-header">
                <h4>Form Masa Ekonomis</h4>
            </div>

            <div class="card-body">

                <form action="{{ route('admin.masa_ekonomis.store') }}" method="POST">

                    @csrf

                    {{-- Kategori --}}
                    <div class="form-group">

                        <label for="kategori_id">
                            Kategori
                        </label>

                        <select name="kategori_id"
                            id="kategori_id"
                            class="form-control"
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

                        @error('kategori_id')
                        <div class="error">{{ $message }}</div>
                        @enderror

                    </div>


                    {{-- Lama Ekonomis --}}
                    <div class="form-group">

                        <label for="lama_ekonomis">
                            Lama Ekonomis
                        </label>

                        <input type="number"
                            name="lama_ekonomis"
                            id="lama_ekonomis"
                            class="form-control"
                            value="{{ old('lama_ekonomis') }}"
                            min="1"
                            required>

                        @error('lama_ekonomis')
                        <div class="error">{{ $message }}</div>
                        @enderror

                    </div>


                    {{-- Satuan --}}
                    <div class="form-group">

                        <label for="satuan">
                            Satuan
                        </label>

                        <select name="satuan"
                            id="satuan"
                            class="form-control"
                            required>

                            <option value="Tahun"
                                {{ old('satuan') == 'Tahun' ? 'selected' : '' }}>
                                Tahun
                            </option>

                            <option value="Bulan"
                                {{ old('satuan') == 'Bulan' ? 'selected' : '' }}>
                                Bulan
                            </option>

                        </select>

                        @error('satuan')
                        <div class="error">{{ $message }}</div>
                        @enderror

                    </div>


                    {{-- Keterangan --}}
                    <div class="form-group">

                        <label for="keterangan">
                            Keterangan
                        </label>

                        <textarea name="keterangan"
                            id="keterangan"
                            class="form-control"
                            rows="4">{{ old('keterangan') }}</textarea>

                        @error('keterangan')
                        <div class="error">{{ $message }}</div>
                        @enderror

                    </div>


                    {{-- Tombol --}}
                    <button type="submit" class="btn btn-primary">
                        Simpan
                    </button>

                    <a href="{{ route('admin.masa_ekonomis.index') }}"
                        class="btn btn-secondary">
                        Kembali
                    </a>

                </form>

            </div>

        </div>

    </div>

</body>

</html>