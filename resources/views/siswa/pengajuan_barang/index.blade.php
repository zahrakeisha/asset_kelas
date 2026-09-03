<!DOCTYPE html>

<html>
<head>
    <title>Data Pengajuan Barang</title>

<!-- Bootstrap CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

</head>

<body>

<div class="container mt-5">

<div class="card shadow">

    <div class="card-header bg-primary text-white">
        <h4 class="mb-0">Data Pengajuan Barang</h4>
    </div>

    <div class="card-body">

        {{-- Pesan sukses --}}
        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        {{-- Tombol Tambah Pengajuan untuk Siswa --}}
        @if(Auth::user()->role == 'siswa')
            <a href="{{ route('siswa.pengajuan_barang.create') }}"
               class="btn btn-primary mb-3">
                + Tambah Pengajuan
            </a>
        @endif

        <div class="table-responsive">

            <table class="table table-bordered table-striped table-hover align-middle">

                <thead class="table-dark">
                    <tr>
                        <th>No</th>
                        <th>Nama Barang</th>
                        <th>Tanggal Pengajuan</th>
                        <th>Jenis Pengajuan</th>
                        <th>Alasan</th>
                        <th>Status</th>
                        <th>Catatan Admin</th>
                        <th>Aksi</th>
                    </tr>
                </thead>

                <tbody>

                    @foreach($pengajuan as $item)

                    <tr>

                        <td>{{ $loop->iteration }}</td>

                        <td>
                            {{ $item->barang->nama_barang ?? '-' }}
                        </td>

                        <td>
                            {{ $item->tanggal_pengajuan }}
                        </td>

                        <td>
                            {{ $item->jenis_pengajuan }}
                        </td>

                        <td>
                            {{ $item->alasan }}
                        </td>

                        <td>
                            @if($item->status == 'Menunggu')
                                <span class="badge bg-warning text-dark">
                                    Menunggu
                                </span>
                            @elseif($item->status == 'Disetujui')
                                <span class="badge bg-success">
                                    Disetujui
                                </span>
                            @elseif($item->status == 'Ditolak')
                                <span class="badge bg-danger">
                                    Ditolak
                                </span>
                            @else
                                <span class="badge bg-secondary">
                                    {{ $item->status }}
                                </span>
                            @endif
                        </td>

                        <td>
                            {{ $item->catatan ?? '-' }}
                        </td>

                        <td>

                            {{-- Aksi untuk Admin --}}
                            @if(Auth::user()->role == 'admin')

                                <a href="{{ route('admin.pengajuan_barang.edit', $item->pengajuan_id) }}"
                                   class="btn btn-warning btn-sm">
                                    Edit
                                </a>

                                <form
                                    action="{{ route('admin.pengajuan_barang.destroy', $item->pengajuan_id) }}"
                                    method="POST"
                                    class="d-inline"
                                >
                                    @csrf
                                    @method('DELETE')

                                    <button
                                        type="submit"
                                        class="btn btn-danger btn-sm"
                                        onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')"
                                    >
                                        Hapus
                                    </button>
                                </form>

                            @else

                                {{-- Detail untuk Siswa/Petugas --}}
                                <a href="{{ route(Auth::user()->role . '.pengajuan_barang.show', $item->pengajuan_id) }}"
                                   class="btn btn-info btn-sm text-white">
                                    Detail
                                </a>

                            @endif

                        </td>

                    </tr>

                    @endforeach

                </tbody>

            </table>

        </div>

    </div>
</div>

</div>

<!-- Bootstrap JS -->

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
