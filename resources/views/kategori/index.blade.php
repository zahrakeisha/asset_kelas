<h1>Data Kategori</h1>

<a href="{{ route('kategori.create')}}">Tambah Kategori</a>

<table border="1">
    <thead>
        <tr>
            <th>No</th>
            <th>Nama Kategori</th>
            <th>Aksi</th>
        </tr>
    </thead>

    <tbody>
        @foreach ($kategoris as $kategori)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $kategori->nama_kategori }}</td>
                <td>
                    <a href="{{ route('kategori.edit', $kategori->kategori_id)}}">Edit</a>
                    <a href="{{ route('kategori.destroy', $kategori->kategori_id)}}">Hapus</a>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>