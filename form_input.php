<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>Form input</title>
</head>

<body>
  <h2>Form Input</h2>
  <form method="post">
    <label>Nama: </label>
    <input type="text" name="nama">
    <input type="submit" value="Kirim">
  </form>
  <?php
  echo 'Selamat Datang ' . $_POST['nama'];
  ?>
</body>

</html