# Lab7Web
===========================

Nama    = Alfiansyah Rambe

NIM     = 312010338

Kelas   = TI 20 B2

===========================

# PRAKTIKUM 7
## A. Install Xampp
Jika sudah install, taruh file tersebut di direktori (d:\xampp)

![1](https://user-images.githubusercontent.com/101393632/168827786-f9c9bcc5-29b0-44e6-bd97-aeeae59bc9d6.jpg)

Setelah itu, kita akan tes apakah server sudah bekerja dengan baik. ( http://127.0.0.1/ atau http://localhost/ ). Jika Server sudah berjalan dengan baik maka akan tampil halaman utama Xampp.

![2](https://user-images.githubusercontent.com/101393632/168828698-98ae5b3a-0f0e-434d-a6c6-f4716aca3d41.jpg)

## B. Memulai PHP
Buat folder lab7_php_dasar pada root directory web server (d:\xampp\htdocs)

![3](https://user-images.githubusercontent.com/101393632/168836053-d221ed58-3e8f-4e34-96f6-d49f0e480b92.jpg)

Kemudian untuk mengakses direktory tersebut pada web server dengan mengakses URL: 
http://localhost/lab7_php_dasar/

![4](https://user-images.githubusercontent.com/101393632/168836972-3864c357-48b2-4863-9a53-4a1028f23884.jpg)

## C. PHP Dasar
Buatlah file baru dengan nama php_dasar.php, lalu masukan kode berikut.

```
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>PHP Dasar</title>
</head>

<body>
  <h1>Belajar PHP Dasar</h1>
  <?php
  echo "Hello World";
  ?><br>

  <!-- Variabel PHP -->
  <h1>Variabel PHP</h1>
  <?php
  $nim = "312010338";
  $nama = 'Alfiansyah Rambe';
  echo "NIM : " . $nim . "<br>";
  echo "Nama : $nama";
  ?>
</body>

</html>
```
Hasil outputnya akan seperti ini. dan untuk mengaksesnya gunakan link ini : http://localhost/lab7_php_dasar/php_dasar.php

![5](https://user-images.githubusercontent.com/101393632/168843720-ba242bce-c940-437e-a7e5-fff837995e70.jpg)

### Predefine Variable $_GET
```
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP Dasar 2</title>
</head>

<body>
  <!-- Predefine variabel -->
  <h1>Predefine Variabel</h1>
  <?php
  echo 'Selamat Datang ' . @$_GET['nama'];
  ?>
</body>

</html>
```
Hasil outputnya dan akses nya : http://localhost/lab7_php_dasar/php_dasar2.php?nama=Alfian

![6](https://user-images.githubusercontent.com/101393632/168846274-cd7be1f4-cb40-488c-9a3a-869a70524c40.jpg)

