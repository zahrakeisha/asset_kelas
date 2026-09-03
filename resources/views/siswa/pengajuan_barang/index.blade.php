<!DOCTYPE html>
<html>
<head>
    <title>Data Pengajuan Barang</title>
</head>
<body>

    <h2>Data Pengajuan Barang</h2>

    @if(session('success'))
        <p>{{ session('success') }}</p>
    @endif

    {{-- Tombol Tambah Pengajuan (dapat dikondisikan sesuai role, contoh untuk siswa) --}}
    @if(Auth::user()->role == 'siswa')
        <a href="{{ route('siswa.pengajuan_barang.create') }}">
            Tambah Pengajuan
        </a>
        <br><br>
    @endif

    <table border="1" cellpadding="10">
        <tr>
            <th>No</th>
            <th>Nama Barang</th>
            <th>Tanggal Pengajuan</th>
            <th>Jenis Pengajuan</th>
            <th>Alasan</th>
            <th>Status</th>
            <th>Catatan</th>
            <th>Aksi</th>
        </tr>

        @foreach($pengajuan as $item)
        <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $item->barang->nama_barang ?? '-' }}</td>
            <td>{{ $item->tanggal_pengajuan }}</td>
            <td>{{ $item->jenis_pengajuan }}</td>
            <td>{{ $item->alasan }}</td>
            <td>{{ $item->status }}</td>
            <td>{{ $item->catatan ?? '-' }}</td>

            <td>
                {{-- Aksi untuk Admin --}}
                @if(Auth::user()->role == 'admin')
                    <a href="{{ route('siswa.pengajuan_barang.edit', $item->pengajuan_id) }}">
                        Edit
                    </a>

                    <form 
                        action="{{ route('siswa.pengajuan_barang.destroy', $item->pengajuan_id) }}" 
                        method="POST" 
                        style="display:inline"
                    >
                        @csrf
                        @method('DELETE')

                        <button type="submit" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">
                            Hapus
                        </button>
                    </form>
                @else
                    <a href="{{ route(Auth::user()->role . '.pengajuan_barang.show', $item->pengajuan_id) }}">
                        Detail
                    </a>
                @endif
            </td>
        </tr>
        @endforeach

    </table>

</body>
</html>