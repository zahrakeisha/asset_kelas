<h3>Data Masa Ekonomis</h3>

<a href="{{ route('admin.masa_ekonomis.create') }}">
    + Tambah Masa Ekonomis
</a>

<table>
    <thead>
        <tr>
            <th>No</th>
            <th>Kategori</th>
            <th>Lama Ekonomis</th>
            <th>Satuan</th>
            <th>Keterangan</th>
            <th>Aksi</th>
        </tr>
    </thead>

    <tbody>
        @forelse ($masaEkonomis as $item)
        <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $item->kategori->nama_kategori ?? '-' }}</td>
            <td>{{ $item->lama_ekonomis }}</td>
            <td>{{ $item->satuan }}</td>
            <td>{{ $item->keterangan ?? '-' }}</td>
            <td>
                <a href="{{ route('admin.masa_ekonomis.edit', $item->masa_ekonomis_id) }}">
                    Edit
                </a>

                <form action="{{ route('admin.masa_ekonomis.destroy', $item->masa_ekonomis_id) }}"
                    method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Hapus</button>
                </form>
            </td>
        </tr>
        @empty
        <tr>
            <td colspan="6">Belum ada data.</td>
        </tr>
        @endforelse
    </tbody>
</table>