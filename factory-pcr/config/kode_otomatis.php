<?php
                include 'config/koneksi.php';

                // membaca kode barang terbesar
              $query = mysqli_query($koneksi_utl,"SELECT kodecbg FROM profile");
              $data  = mysqli_fetch_array($query);

              $query2 = mysqli_query($koneksi_pcr,"SELECT max(kodesup) as maxKode FROM apmst");
              $query3 = mysqli_query($koneksi_pcr,"SELECT max(no_po) as no_po FROM po");
              $data2  = mysqli_fetch_array($query2);
              $data3 = mysqli_fetch_array($query3);
              $noPo= $data3['no_po'];
              $kodeSup = $data2['maxKode'];

              // mengambil angka atau bilangan dalam kode anggota terbesar,
              // dengan cara mengambil substring mulai dari karakter ke-1 diambil 6 karakter
              // misal 'BRG001', akan diambil '001'
              // setelah substring bilangan diambil lantas dicasting menjadi integer
              $noUrut = (int) substr($kodeSup, 8, 3);
              $no_po = (int) substr($noPo, 8, 3);
              // bilangan yang diambil ini ditambah 1 untuk menentukan nomor urut berikutnya
              $noUrut++;
              $no_po++;
              $cbg = $data['kodecbg'];
              // membentuk kode anggota baru
              // perintah sprintf("%03s", $noUrut); digunakan untuk memformat string sebanyak 3 karakter
              // misal sprintf("%03s", 12); maka akan dihasilkan '012'
              // atau misal sprintf("%03s", 1); maka akan dihasilkan string '001'
              $char = "SUP-$cbg-";
              $char = "PNC$cbg";
              $new = $char . sprintf("%03s", $no_po);
              $newID = $char . sprintf("%03s", $noUrut);
?>
