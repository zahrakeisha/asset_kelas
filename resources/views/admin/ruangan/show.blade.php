<h1>Detail Ruangan</h1>

<p>
    <strong>Nama Ruangan:</strong>
    {{ $ruangan->nama_ruangan }}
</p>

<p>
    <strong>Keterangan:</strong>
    {{ $ruangan->keterangan }}
</p>

<h2>Daftar Barang</h2>

<table border="1">
    <thead>
        <tr>
            <th>No</th>
            <th>Nama Barang</th>
        </tr>
    </thead>

    <tbody>
        @forelse ($ruangan->barang as $barang)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $barang->nama_barang }}</td>
            </tr>
        @empty
            <tr>
                <td colspan="2">Belum ada barang.</td>
            </tr>
        @endforelse
    </tbody>
</table>

<br>

<a href="{{ route('admin.ruangan.index') }}">Kembali</a>