<h1>Tambah Kategori</h1>

<form action="{{ route('admin.kategori.store') }}" method="POST">
    @csrf

    <label>Nama Kategori</label>
    <input type="text" name="nama_kategori">

    <button type="submit">Simpan</button>
</form>

<a href="{{ route('admin.kategori.index') }}">Kembali</a>