<!DOCTYPE html>
<html>
<head>
    <title>Detail Barang</title>
</head>
<body>

<h1>Detail Barang</h1>

<p>
    <b>Kode Barang:</b>
    {{ $barang->kode_barang }}
</p>

<p>
    <b>Nama Barang:</b>
    {{ $barang->nama_barang }}
</p>

<p>
    <b>Kategori:</b>
    {{ $barang->kategori->nama_kategori ?? '-' }}
</p>

<p>
    <b>Ruangan:</b>
    {{ $barang->ruangan->nama_ruangan ?? '-' }}
</p>

<p>
    <b>Masa Ekonomis:</b>

    @if ($barang->masaEkonomis)
        {{ $barang->masaEkonomis->lama_ekonomis }}
        {{ $barang->masaEkonomis->satuan }}
    @else
        -
    @endif
</p>

<p>
    <b>Merek:</b>
    {{ $barang->merek ?? '-' }}
</p>

<p>
    <b>Model:</b>
    {{ $barang->model ?? '-' }}
</p>

<p>
    <b>Serial Number:</b>
    {{ $barang->serial_number ?? '-' }}
</p>

<p>
    <b>Jumlah:</b>
    {{ $barang->jumlah }}
</p>

<p>
    <b>Kondisi:</b>
    {{ $barang->kondisi }}
</p>

<p>
    <b>Tanggal Perolehan:</b>
    {{ $barang->tanggal_perolehan ?? '-' }}
</p>

<p>
    <b>Keterangan:</b>
    {{ $barang->keterangan ?? '-' }}
</p>

<br>

<a href="{{ route('admin.barang.index') }}">Kembali</a>

|

<a href="{{ route('admin.barang.edit', $barang->barang_id) }}">
    Edit
</a>

</body>
</html>