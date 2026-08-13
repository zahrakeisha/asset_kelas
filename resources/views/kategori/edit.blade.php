<h1>Edit Kategori</h1>

<form action="{{ route('kategori.update', $kategoris->kategori_id) }}" method="POST">
    @csrf

    <label>Nama Kategori</label>
    <input 
        type="text" name="nama_kategori" value="{{ $kategoris->nama_kategori }}">

    <button type="submit">Simpan</button>
</form>

<a href="{{ route('kategori.index') }}">Kembali</a>