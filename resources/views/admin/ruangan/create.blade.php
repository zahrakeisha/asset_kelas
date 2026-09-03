<h1>Tambah Ruangan</h1>

<form action="{{ route('admin.ruangan.store') }}" method="POST">
    @csrf

    <label>Nama Ruangan</label>
    <br>
    <input type="text" name="nama_ruangan" placeholder="Masukkan nama ruangan">

    <br><br>

    <label>Keterangan</label>
    <br>
    <textarea name="keterangan" placeholder="Masukkan keterangan"></textarea>

    <br><br>

    <button type="submit">Simpan</button>
    <a href="{{ route('admin.ruangan.index') }}">Kembali</a>
</form>