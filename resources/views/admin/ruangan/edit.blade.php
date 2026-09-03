<h1>Edit Ruangan</h1>

<form action="{{ route('admin.ruangan.update', $ruangan->ruangan_id) }}" method="POST">
    @csrf

    <label>Nama Ruangan</label>
    <br>
    <input type="text" name="nama_ruangan" value="{{ $ruangan->nama_ruangan }}">

    <br><br>

    <label>Keterangan</label>
    <br>
    <textarea name="keterangan">{{ $ruangan->keterangan }}</textarea>

    <br><br>

    <button type="submit">Update</button>

    <a href="{{ route('admin.ruangan.index') }}">Kembali</a>
</form>