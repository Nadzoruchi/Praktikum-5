<!DOCTYPE html>
<html>
<head>
    <title>Data Matkul</title>
</head>
<body>

<h1>Daftar Matkul</h1>

<table border="1">
<tr>
<th>Kode</th>
<th>Nama</th>
<th>Jurusan</th>
</tr>

@forelse($matkul as $mk)
<tr>
<td>{{ $mk->kode }}</td>
<td>{{ $mk->nama }}</td>
<td>{{ $mk->jurusan }}</td>
</tr>
@empty
<tr>
<td colspan="3">Belum ada data matkul</td>
</tr>
@endforelse

</table>

</body>
</html>