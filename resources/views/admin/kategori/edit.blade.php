<h1>Edit Kategori</h1>

<form action="{{ route('admin.kategori.update', $kategoris->kategori_id) }}" method="POST">
    @csrf
    @method('PUT')

    <label>Nama Kategori</label>
    <input 
        type="text" name="nama_kategori" value="{{ $kategoris->nama_kategori }}">

    <button type="submit">Simpan</button>
</form>

<a href="{{ route('admin.kategori.index') }}">Kembali</a>