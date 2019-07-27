<?php
  error_reporting(0);
  switch($_GET['p'])
  {
    case "rack";
      header('location:../ms_rack.php');
    break;
    case "profil";
    echo "Disini halaman profil";
    break;
  }
?>
