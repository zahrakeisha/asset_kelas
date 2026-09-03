<!DOCTYPE html>
<html>
<head>
    <title>Tambah Pengajuan Barang</title>
</head>
<body>

    <h2>Tambah Pengajuan Barang</h2>

    {{-- Tampilkan Error Validasi Jika Ada --}}
    @if ($errors->any())
        <div style="color: red;">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    {{-- Form Menyesuaikan Route Sesuai Role yang Login --}}
    <form action="{{ route(Auth::user()->role . '.pengajuan_barang.store') }}" method="POST">
        @csrf

        {{-- Pilih Barang --}}
        <label for="barang_id">Pilih Barang:</label><br>
        <select name="barang_id" id="barang_id" required>
            <option value="">-- Pilih Barang --</option>
            @foreach($barang as $b)
                <option value="{{ $b->barang_id }}">
                    {{ $b->nama_barang }}
                </option>
            @endforeach
        </select>
        <br><br>

        {{-- Tanggal Pengajuan --}}
        <label for="tanggal_pengajuan">Tanggal Pengajuan:</label><br>
        <input type="date" name="tanggal_pengajuan" id="tanggal_pengajuan" value="{{ date('Y-m-d') }}" required>
        <br><br>

        {{-- Jenis Pengajuan --}}
        <label for="jenis_pengajuan">Jenis Pengajuan:</label><br>
        <select name="jenis_pengajuan" id="jenis_pengajuan" required>
            <option value="">-- Pilih Jenis --</option>
            <option value="Perbaikan">Perbaikan</option>
            <option value="Penggantian">Penggantian</option>
            <option value="Penambahan">Penambahan</option>
        </select>
        <br><br>

        {{-- Alasan --}}
        <label for="alasan">Alasan Pengajuan:</label><br>
        <textarea name="alasan" id="alasan" rows="4" cols="50" required></textarea>
        <br><br>

        {{-- Tombol Simpan & Kembali --}}
        <button type="submit">Simpan Pengajuan</button>
        
        <a href="{{ route(Auth::user()->role . '.pengajuan_barang.index') }}">
            Kembali
        </a>

    </form>

</body>
</html>