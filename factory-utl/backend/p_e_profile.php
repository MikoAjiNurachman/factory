<?php
include '../config/koneksi.php';
$kodecbg = $_POST['kodecbg'];
$namacbg = $_POST['namacbg'];
$alamat1 = $_POST['alamat1'];
$alamat2 = $_POST['alamat2'];
$kota = $_POST['kota'];
$kdpos = $_POST['kdpos'];
$notelp = $_POST['notelp'];
$nohp = $_POST['nohp'];
$chstore = $_POST['chstore'];
$kduser = $_POST['kduser'];
$tglentry = $_POST['tglentry'];


$temp = $_FILES['logo']['tmp_name'];
$name = $_FILES['logo']['name'];
$size = $_FILES['logo']['size'];
$ukuran = 10000;
$type = $_FILES['logo']['type'];
$folder = "../logo/";

// proses validasi
if($type=="image/jpeg" || $type=="image/jpg" || $type=="image/png")
  {
    // Cek ukuran file
                // upload Process
                move_uploaded_file($temp, $folder . $name);
                // insert data ke database
                $hasil = mysqli_query($koneksi_utl, "UPDATE profile SET  kodecbg='$kodecbg',namacbg='$namacbg',alamat1='$alamat1',alamat2='$alamat2',kota='$kota',kdpos='$kdpos',
                                        notelp='$notelp',nohp='$nohp',logo='$name',chstore='$chstore',kduser='$kduser',tglentry='$tglentry'")or die (mysqli_error($koneksi_utl));

                                        if ($hasil){
              $hasil = mysqli_query($koneksi_utl, "UPDATE konter SET kodecbg='$kodecbg'")or die (mysqli_error($koneksi_utl));

                                        ?>
                                                <script language=javascript>
                                                alert('Data Profile berhasil di edit !');
                                              document. location='../_profile.php';
                                            </script>
                                                <?php
                                          }
                                          else{
                                            ?>
                                                <script language=javascript>
                                              alert('Maaf anda gagal edit data , pastikan ukuran foto 100 x 100 pixel');
                                              document. location='../_edit_profile.php';
                                            </script>
                                                <?php
                                          }

  } else {
        echo "Jenis gambar yang anda kirim salah. Harus .jpg .gif .png";
  }

?>
