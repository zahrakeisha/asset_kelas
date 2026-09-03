<h1>Data Kategori</h1>

<a href="{{ route('admin.kategori.create')}}">Tambah Kategori</a>

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
                <a href="{{ route('admin.kategori.edit', $kategori->kategori_id) }}">
                    Edit
                </a>

                |

                <form action="{{ route('admin.kategori.destroy', $kategori->kategori_id) }}"
                    method="POST"
                    style="display:inline;">

                    @csrf
                    @method('DELETE')

                    <button type="submit"
                        onclick="return confirm('Yakin ingin menghapus kategori ini?')">
                        Hapus
                    </button>

                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>