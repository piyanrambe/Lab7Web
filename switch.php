<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>Switch</title>
</head>

<body>
  <h1>Kondisi Switch</h1>
  <?php
  $nama_hari = date("l");
  switch ($nama_hari) {
    case "sunday";
      echo "Minggu";
      break;
    case "Monday";
      echo "Senin";
      break;
    case "Tuesday";
      echo "Selasa";
      break;
    default:
      echo "Sabtu";
  }
  ?>

</body>

</html>