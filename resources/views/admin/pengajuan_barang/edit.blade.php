<!DOCTYPE html>
<html>
<head>
    <title>Edit Pengajuan Barang</title>
</head>
<body>

    <h2>Edit Pengajuan Barang</h2>

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

    {{-- Form Edit Pengajuan Barang --}}
    <form action="{{ route('admin.pengajuan_barang.update', $pengajuan->pengajuan_id) }}" method="POST">
        @csrf
        @method('PUT')

        {{-- Pilih Barang --}}
        <label for="barang_id">Barang:</label><br>
        <select name="barang_id" id="barang_id" required>
            <option value="">-- Pilih Barang --</option>
            @foreach($barang as $b)
                <option value="{{ $b->barang_id }}" {{ $pengajuan->barang_id == $b->barang_id ? 'selected' : '' }}>
                    {{ $b->nama_barang }}
                </option>
            @endforeach
        </select>
        <br><br>

        {{-- Tanggal Pengajuan --}}
        <label for="tanggal_pengajuan">Tanggal Pengajuan:</label><br>
        <input type="date" name="tanggal_pengajuan" id="tanggal_pengajuan" value="{{ $pengajuan->tanggal_pengajuan }}" required>
        <br><br>

        {{-- Jenis Pengajuan --}}
        <label for="jenis_pengajuan">Jenis Pengajuan:</label><br>
        <select name="jenis_pengajuan" id="jenis_pengajuan" required>
            <option value="Perbaikan" {{ $pengajuan->jenis_pengajuan == 'Perbaikan' ? 'selected' : '' }}>Perbaikan</option>
            <option value="Penggantian" {{ $pengajuan->jenis_pengajuan == 'Penggantian' ? 'selected' : '' }}>Penggantian</option>
            <option value="Penambahan" {{ $pengajuan->jenis_pengajuan == 'Penambahan' ? 'selected' : '' }}>Penambahan</option>
        </select>
        <br><br>

        {{-- Alasan --}}
        <label for="alasan">Alasan Pengajuan:</label><br>
        <textarea name="alasan" id="alasan" rows="4" cols="50" required>{{ $pengajuan->alasan }}</textarea>
        <br><br>

        {{-- Status Pengajuan (Khusus Admin/Petugas untuk menyetujui/menolak) --}}
        <label for="status">Status Pengajuan:</label><br>
        <select name="status" id="status" required>
            <option value="Menunggu" {{ $pengajuan->status == 'Menunggu' ? 'selected' : '' }}>Menunggu</option>
            <option value="Disetujui" {{ $pengajuan->status == 'Disetujui' ? 'selected' : '' }}>Disetujui</option>
            <option value="Ditolak" {{ $pengajuan->status == 'Ditolak' ? 'selected' : '' }}>Ditolak</option>
        </select>
        <br><br>

        {{-- Catatan --}}
        <label for="catatan">Catatan Admin:</label><br>
        <textarea name="catatan" id="catatan" rows="3" cols="50">{{ $pengajuan->catatan }}</textarea>
        <br><br>

        {{-- Tombol Update & Kembali --}}
        <button type="submit">Update Pengajuan</button>

        <a href="{{ route('admin.pengajuan_barang.index') }}">
            Batal
        </a>

    </form>

</body>
</html>