<h2>Permintaan baru {{ $data['kode'] }}</h2>
<table cellpadding="6">
  <tr><td><b>Perusahaan</b></td><td>{{ $data['perusahaan'] }}</td></tr>
  <tr><td><b>Layanan</b></td><td>{{ $data['layanan'] }}</td></tr>
  <tr><td><b>Jumlah personel</b></td><td>{{ $data['jumlah'] }}</td></tr>
  <tr><td><b>Mulai tugas</b></td><td>{{ $data['tanggal'] ?? '-' }}</td></tr>
  <tr><td><b>Kontak</b></td><td>{{ $data['kontak'] }}</td></tr>
</table>