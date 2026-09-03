<!DOCTYPE html>
<html>

<head>
    <title>Data Barang</title>
</head>

<body>

    <h1>Data Barang</h1>

    @if(session('success'))
    <p>{{ session('success') }}</p>
    @endif

    <a href="{{ route('admin.barang.create') }}">Tambah Barang</a>

    <br><br>

    <table border="1" cellpadding="10" cellspacing="0">
        <tr>
            <th>No</th>
            <th>Kode Barang</th>
            <th>Nama Barang</th>
            <th>Kategori</th>
            <th>Masa Ekonomis</th>
            <th>Jumlah</th>
            <th>Aksi</th>
        </tr>

        @foreach($barangs as $barang)
        <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $barang->kode_barang }}</td>
            <td>{{ $barang->nama_barang }}</td>
            <td>{{ $barang->kategori->nama_kategori ?? '-' }}</td>

            <td>
                @if($barang->masaEkonomis)
                {{ $barang->masaEkonomis->lama_ekonomis }}
                {{ $barang->masaEkonomis->satuan }}
                @else
                -
                @endif
            </td>

            <td>{{ $barang->jumlah }}</td>

            <td>
                <a href="{{ route('admin.barang.show', $barang->barang_id) }}">
                    Detail
                </a>

                |

                <a href="{{ route('admin.barang.edit', $barang->barang_id) }}">
                    Edit
                </a>

                |

                <form action="{{ route('admin.barang.destroy', $barang->barang_id) }}"
                    method="POST"
                    style="display:inline">

                    @csrf
                    @method('DELETE')

                    <button type="submit"
                        onclick="return confirm('Yakin ingin menghapus data ini?')">
                        Hapus
                    </button>

                </form>
            </td>
        </tr>
        @endforeach

    </table>

</body>

</html>