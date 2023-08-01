<?php
$koneksi = mysqli_connect('namahost','username','password','nama database')
if ($koneksi)
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>

<div class="container mt-3">
  <h2>Stacked form</h2>
  <form action="/action_page.php">
    <div class="mb-3 mt-3">
      <label for="Nama Lengkap">nama_lengkap:</label>
      <input type="Nama Lengkap" class="form-control" id="nama_lengkap" placeholder="masukkan nama lengkap anda" name="email">
    </div>
    <div class="mb-3 mt-3">
      <label for="Tanggal Lahir">date_birth:</label>
      <input type="date" class="form-control" id="date_birth" placeholder="masukkan tanggal lahir anda" name="tanggallahir">
    </div>
    <div class="mb-3 mt-3">
      <label for="kategori pelaporan">kategori_laporan:</label>
      <input type="drop box" class="form-control" id="kategori_laporan" placeholder="pilih kategori anda" name="kategori">
    </div>
    <div class="mb-3">
      <label for="email">nama_email:</label>
      <input type="email" class="form-control" id="nama_email" placeholder="masukkan email anda" name="alamat_email">
    </div>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
</div>

</body>
</html>