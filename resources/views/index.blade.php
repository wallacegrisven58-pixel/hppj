<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover">
<title>PT Haidar Putra Persada Jaya – Layanan Terpadu & Pengelolaan SDM</title>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link href="https://fonts.googleapis.com/css2?family=Archivo:wght@400;500;700;800&display=swap" rel="stylesheet">
<link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
<div class="proto">Prototype untuk tugas Digital Entrepreneurship. Data kontak dan angka masih contoh.</div>
<header class="top">
<div class="wrap">
<nav class="nav" aria-label="Menu utama">
<a class="logo" href="#">PT HPP</a>
<ul><li><a href="#layanan">Layanan</a></li><li><a href="#alur">Cara pesan</a></li><li><a href="#pelatihan">Pelatihan</a></li><li><a href="#kontak">Kontak</a></li></ul>
</nav>
<div class="hero">
<div>
<h1>Tenaga kerja dan perawatan gedung, satu pintu.</h1>
<p class="lead">PT Haidar Putra Persada Jaya melayani pabrik dan perkantoran di Tangerang dan sekitarnya: dari operator produksi, keamanan, kebersihan, sampai tata taman.</p>
<ul class="facts"><li>Berbasis di Kab. Tangerang, Banten</li><li>6 lini layanan</li><li>Personel dibekali pelatihan sebelum penempatan</li></ul>
</div>
<form class="order" id="f" novalidate>
<h2>Ajukan kebutuhan Anda</h2>
<p class="sub">Isi singkat, tim kami menghubungi untuk penawaran.</p>
<label for="svc">Layanan</label>
<select id="svc"><option>Tenaga kerja (manpower outsource)</option><option>Pemeliharaan gedung</option><option>Keamanan (satpam)</option><option>Kebersihan (cleaning service)</option><option>Tata taman</option><option>Pelatihan tenaga kerja</option></select>
<div class="row"><div><label for="n">Jumlah personel</label><input id="n" type="number" min="1" value="5"></div><div><label for="d">Mulai tugas</label><input id="d" type="date"></div></div>
<label for="c">Nama perusahaan</label><input id="c" placeholder="PT ...">
<label for="w">WhatsApp / email</label><input id="w" placeholder="08xx atau nama@perusahaan.com">
<div class="err" id="e" role="alert"></div>
<button class="cta" type="submit">Kirim permintaan</button>
<div id="ok" role="status"></div>
</form>
</div>
</div>
</header>

<main>
<section id="layanan"><div class="wrap">
<h2 class="sec">Layanan</h2>
<p class="intro">Satu kontrak bisa mencakup beberapa layanan sekaligus, sehingga Anda tidak perlu mengurus banyak vendor.</p>
<div class="svc">
<div><h3>Penyediaan tenaga kerja</h3><p>Tenaga teknis produksi, operator alat, staf administrasi, petugas pergudangan, dan quality control.</p></div>
<div><h3>Pemeliharaan gedung</h3><p>Perawatan menyeluruh gedung agar operasional tidak terganggu (total building maintenance).</p></div>
<div><h3>Keamanan</h3><p>Pelatihan dan penyediaan personel satpam.</p></div>
<div><h3>Kebersihan</h3><p>Kebersihan gedung perkantoran dan area pabrik.</p></div>
<div><h3>Tata taman</h3><p>Pemeliharaan taman di area komersial dan industri.</p></div>
<div><h3>Pelatihan tenaga kerja</h3><p>Pembekalan keterampilan calon pekerja sebelum ditempatkan di perusahaan pengguna jasa.</p></div>
</div>
</div></section>

<section id="alur" style="padding-top:0"><div class="wrap">
<h2 class="sec">Cara pesan</h2>
<p class="intro">Alur yang sama untuk semua layanan.</p>
<ol class="steps">
<li><b>Ajukan</b><span>Isi formulir kebutuhan.</span></li>
<li><b>Penawaran</b><span>Kami kirim penawaran dan jadwal.</span></li>
<li><b>Kontrak dan penempatan</b><span>Personel dikirim sesuai jadwal.</span></li>
<li><b>Pantau dan evaluasi</b><span>Laporan berkala dan layanan purna-penempatan.</span></li>
</ol>
</div></section>

<section id="pelatihan" class="alt"><div class="wrap two">
<div>
<h2 class="sec">Pelatihan sebelum penempatan</h2>
<p class="intro">Calon pekerja dibekali keterampilan dulu, agar siap bekerja di hari pertama.</p>
</div>
<div>
<div class="tabs" role="tablist" aria-label="Program pelatihan">
<button role="tab" aria-selected="true" data-k="0">Keamanan</button>
<button role="tab" aria-selected="false" data-k="1">Kebersihan</button>
<button role="tab" aria-selected="false" data-k="2">Operator</button>
</div>
<div class="panel" id="pn" style="color:var(--ink)"></div>
</div>
</div></section>

<section id="kontak"><div class="wrap">
<h2 class="sec">Kontak</h2>
<p class="intro">Alamat terdaftar: Kp. Pasirandu, Kabupaten Tangerang, Banten.</p>
<p>Telepon: <span class="ph">[isi nomor]</span> &nbsp; Email: <span class="ph">[isi email]</span> &nbsp; Jam kerja: <span class="ph">[isi jam]</span></p>
</div></section>
</main>
<footer><div class="wrap"><b>PT Haidar Putra Persada Jaya</b><br>Prototype halaman web. Bukan situs resmi perusahaan.</div></footer>

<script src="{{ asset('js/script.js') }}"></script>
</body>
</html>