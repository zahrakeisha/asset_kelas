<h1>Data Ruangan</h1>

<a href="{{ route('admin.ruangan.create') }}">Tambah Ruangan</a>

<table border="1">
    <thead>
        <tr>
            <th>No</th>
            <th>Nama Ruangan</th>
            <th>Keterangan</th>
            <th>Aksi</th>
        </tr>
    </thead>

    <tbody>
        @foreach ($ruangan as $item)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $item->nama_ruangan }}</td>
                <td>{{ $item->keterangan }}</td>
                <td>
                    <a href="{{ route('admin.ruangan.show', $item->ruangan_id) }}">Detail</a>
                    <a href="{{ route('admin.ruangan.edit', $item->ruangan_id) }}">Edit</a>
                    <a href="{{ route('admin.ruangan.destroy', $item->ruangan_id) }}">Hapus</a>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>