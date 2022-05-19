<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Form input data</title>

  <style>
    div {
      margin-top: 10px;
    }
  </style>
</head>

<body>
  <h2>Data Diri</h2>
  <form method="POST">
    <fieldset>
      <legend>Form Input data</legend>
      <div>
        <label>Nama :</label>
        <input type="text" name="nama" placeholder="Masukan Nama " />
      </div>
      <div>
        <label>Tanggal Lahir :</label>
        <input type="date" name="tgl_lahir" />
      </div>
      <div>
        <label>Pekerjaan :</label>
        <select name="pekerjaan">
          <option value="--pilih pekerjaan--">--pilih pekerjaan--</option>
          <option value="Pengajar">Pengajar</option>
          <option value="Pegawai Negri">Pegawai Negri</option>
          <option value="Pegawai Swasta">Pegawai Swasta</option>
        </select>
      </div>
      <div>
        <label>Gaji :</label>
        <select name="gaji">
          <option value="1.000.000 s/d 4.000.000">1.000.000 s/d 4.000.000</option>
          <option value="4.000.000 s/d 6.000.000">4.000.000 s/d 6.000.000</option>
          <option value="6.000.000 s/d 8.000.000">6.000.000 s/d 8.000.000</option>
          <option value="8.000.000 s/d 15.000.000">8.000.000 s/d 15.000.000</option>
        </select>
      </div>
      <div>
        <input type="submit" name="submit" value="Kirim" />
      </div>
    </fieldset>
  </form>

  <fieldset>
    <legend>Hasil</legend>
    <?php
    $nama = @$_POST['nama'];
    $tgl_lahir = @$_POST['tgl_lahir'];
    $pekerjaan = @$_POST['pekerjaan'];
    $gaji = @$_POST['gaji'];

    $tanggal_lahir = new DateTime(@$_POST['tgl_lahir']);
    $sekarang = new DateTime("today");
    if ($tanggal_lahir > $sekarang) {
      $umur = "0";
    }
    $umur = $sekarang->diff($tanggal_lahir)->y;

    echo "Nama = $nama <br>";
    echo "Umur = $umur tahun <br>";
    echo "Pekerjaan = $pekerjaan <br>";
    echo "Gaji = $gaji <br>";
    ?>
  </fieldset>
</body>

</html>