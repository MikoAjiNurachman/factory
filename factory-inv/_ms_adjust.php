<!DOCTYPE html>

<?php include 'config/head.php'; ?>
<?php
include "config/koneksi.php";
$query = mysqli_query($koneksi_utl,"SELECT * FROM profile");
while ($dataTampil = mysqli_fetch_array($query)) {
  ?>
  <title><?php echo $dataTampil[1];?> - Adjust Stop opname</title>

<?php }
include 'config/koneksi.php';
session_start();
if (empty($_SESSION['username']))

                {
					echo"
             <script language=javascript>
			alert('Anda Tidak Dapat Mengakses.. Siahkan untuk Login Terlebih Dahulu');
			document.location='index.php';
			</script>";

                }
else if($_SESSION['username'] = $_SESSION['username']) {
?>

<body class="hold-transition skin-purple sidebar-mini">
<?php include 'config/aside.php'; ?>
<?php
include "config/koneksi.php";
$query = mysqli_query($koneksi_utl,"SELECT * FROM profile");
while ($dataTampil = mysqli_fetch_array($query)) {
  ?>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
         Data Master Inventory - Adjust Stopopname Bahan Baku
        <small><?php echo $dataTampil[1];?></small>
      </h1>
<?php } ?>
       <ol class="breadcrumb">
       					<i><script type='text/javascript'>
					var months = ['Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September', 'Oktober', 'November', 'Desember'];
					var myDays = ['Minggu', 'Senin', 'Selasa', 'Rabu', 'Kamis', 'Jum&#39;at', 'Sabtu'];
					var date = new Date();
					var day = date.getDate();
					var month = date.getMonth();
					var thisDay = date.getDay(),
						thisDay = myDays[thisDay];
					var yy = date.getYear();
					var year = (yy < 1000) ? yy + 1900 : yy;
					document.write(thisDay + ', ' + day + ' ' + months[month] + ' ' + year);
					</script>
					</i>
      </ol>
	  	  <br>

    </section>

        <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Form Tambah & List Data Adjust Stopopname</h3>
			            <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
          </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
            <div class="col-md-12">

				<form action = "" method = "POST">

			  <div class="alert alert-info alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <h4><i class="icon fa fa-info"></i> Informasi !</h4>
                DISINI ANDA DIPERBOLEHKAN UNTUK MENCARI DAN MENAMBAH DATA ADJUST STOP OPNAME BAHAN BAKU !
              </div>



			<div class="col-md-2">
        <label>No Bukti Opname</label>
        <?php
        include "config/koneksi.php";
        $query = mysqli_query($koneksi_utl,"select * from konter");
        while ($data = mysqli_fetch_array($query)) {
          $konter = $data['kodein'] .'-'. $data['konterin'];
          $konterin =  $data['konterin'];
          ?>

        <input type="text" class="form-control" name = "kodein" value="<?php echo $konter; ?>" readonly>
        <input type="hidden" class="form-control" name = "konterin" value="<?php echo $konterin; ?>" readonly>
      <?php } ?>
<br>
                      <label>No Item</label>
                      <?php
                 include 'config/koneksi.php';
                 $result = mysqli_query($koneksi_inv,"SELECT * FROM ms_inmst1 "); //koneksi2 ini nantinya lookup dgn db_toko yg asli
         echo '

        <select name="kodeitem1" class = "form-control select2" required id="kodeitem1" >';
        echo '<option>Pilih Kode Item</option>';
        while ($row = mysqli_fetch_array($result)) {
        echo '<option value="'.$row['kodeitem'].'">'.$row['kodeitem'].' - '.$row['namabrg'].'</option>';
        }
        echo '</select>';
        ?>
        <br>

        <div class="alert alert-danger alert-dismissible" style="margin-top: 100px;width: 361.979166px;height: 111.97916599999999px;">
          <center>
                <h4><i class="icon fa fa-warning"></i> Total Jumlah Selisih !</h4>


                <label name = "total_selisih" >

                  <h2><b> <i><span  id="hasil-output"></span></i></b></h2>

                </label>
              </center>


              </div>
              Total Debet : <span id = "val2"></span> <br />
              Total Kredit : <span id = "val"></span>

      </div>

      <div class="col-md-2">
        <label>Bulan Opname</label>
        <input type="date" class="form-control" name = "tglin" id="tglin" required>
<br>
                      <label>to</label>
                      <?php
                 include 'config/koneksi.php';
                 $result = mysqli_query($koneksi_inv,"SELECT * FROM ms_inmst1 "); //koneksi2 ini nantinya lookup dgn db_toko yg asli
         echo '

        <select name="kodeitem2" class = "form-control select2" required id="kodeitem2" >';
        echo '<option>Pilih Kode Item</option>';
        while ($row = mysqli_fetch_array($result)) {
        echo '<option value="'.$row['kodeitem'].'">'.$row['kodeitem'].' - '.$row['namabrg'].'</option>';
        }
        echo '</select>';
        ?>
                      <br><br>


                      <div class = "pull-right">
                      <input type = "reset" value = "Reset" class = "btn btn-danger" ></input>
                         <input type = "submit" id = "search" name = "search"  value = "Search" class = "btn btn-info" ></input>
                         </div>

                         <br>

</div>

	</form>


<form class="" action="" method="post">
  <div class="col-md-8">
    				              <table id="example5" class=" table table-bordered table-striped display nowrap" style="width:100%">
                    <thead>
                    <tr>
                     <th>No</th>
                     <th>Kode Item</th>
                     <th>Nama</th>
                     <th>Sat</th>
                     <th>Qty Selisih</th>
                     <th>Jml Selisih</th>
                    </tr>
                    </thead>

                    <tbody>
    	<?php
    	include "config/koneksi.php";

      function rupiah($angka){
        $rupiah = number_format($angka,0,',','.');
        return $rupiah;
      }

      $no = 0;
      error_reporting(0);
        if(isset($_POST['search'])){
      $kodein = $_POST['kodein'];
      $tglin = $_POST['tglin'];
      $kodeitem1 = $_POST['kodeitem1'];
      $kodeitem2 = $_POST['kodeitem2'];
      $query = mysqli_query($koneksi_inv,"SELECT u.kodeitem, u.qty, u.satuan, u.qtyopname, u.qtyselisih, u.hpp, a.kodeitem, a.namabrg FROM opname1 AS u
                                          INNER JOIN ms_inmst1 AS a ON u.kodeitem = a.kodeitem WHERE a.kodeitem BETWEEN '$kodeitem1' AND '$kodeitem2' ")or die(mysqli_error($koneksi_inv));

                          }else{

                            }

      while ($d = mysqli_fetch_array($query)) {
        $no++;
        $qtyselisih = $d['qtyopname'] - $d['qty'];
        $jmlselisih = $qtyselisih - $d['hpp'];
        $a += $jmlselisih;

        ?>
    					<tr>
    					<td><?php echo $no; ?></td>
    					<td><button type= 'button' class= 'btn bg-maroon btn-flat'><?php echo $d['kodeitem'];?></td>
    					<td><?php echo $d['namabrg'];?></td>
              <td><?php echo $d['satuan'];?></td>
              <td><?php echo rupiah($qtyselisih);?></td>
              <td><?php echo rupiah($jmlselisih);?></td>

    					</tr>

                      <?php
                      }
                       ?>

                    </tbody>

                    <script>
    // membuat objek elemen
    var hasil = document.getElementById("hasil-output");

    // menampilkan output ke elemen hasil
    hasil.innerHTML = "<?php echo $a;?>";
              </script>

                    <tfoot>
                    <tr>
                      <th>No</th>
                      <th>Kode Item</th>
                      <th>Nama</th>
                      <th>Sat</th>
                      <th>Qty Selisih</th>
                      <th>Jml Selisih</th>
                    </tr>
                    </tfoot>
                  </table>

                  </form>

</div>

<?php
if (isset($_POST['search'])) {
        $tglin = $_POST['tglin'];
 ?>
&nbsp;<!-- Jurnal  -->
<div class="col-md-12">

  <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <script src="dist/js/jquery-1.12.4.js"></script>
  <script src="dist/js/jquery-ui.js"></script>

  <div align="right">
   <button type="button" name="add" id="add" class="btn btn-success btn-sm">Tambah Data</button>
  </div>
  <br />
  <form method="post" id="user_form">
   <div class="table-responsive">
    <table class="table table-striped table-bordered" id="user_data">
     <tr>
       <th>No Akun</th>
       <th>Nama Akun</th>
      <th>Debet</th>
      <th>Kredit</th>
      <th></th>
     </tr>
    </table>
   </div>

   <div align="center">
    <input type="submit" name="insert" id="insert" class="btn btn-primary" value="Simpan" />
   </div>


  </form>

  <br />


 <div id="user_dialog" title="Tambah Data">
   <div class="form-group">
    <label>No Akun</label>      <span id="error_kodeakun" class="text-danger pull-right"></span>
    <br />
    <?php
  include 'config/koneksi.php';
  $result = mysqli_query($koneksi_akun,"select * from ms_akun");
  $jsArray = "var prdName = new Array();\n";
  echo '

  <select name="" id="" class = "form-control select2" required onchange="changeValue(this.value)" >';
  echo '<option>Pilih No Akun</option>';
  while ($row = mysqli_fetch_array($result)) {
  echo '<option value="'.$row['kodeakun'].'" >'.$row['kodeakun'].' - '.$row['namaakun'].'</option>';
  $jsArray .= "prdName['" . $row['kodeakun'] . "'] = {namaakun:'" . addslashes($row['namaakun']) . "' , kodeakun:'" . addslashes($row['kodeakun']) . "'};\n";
  }
  echo '</select>';
  ?>
   </div>

<script type="text/javascript">
$(document).ready(function() {
$(".select2").select2();
$(window).resize(function() {
$('.select2').css('width', "100%");
});

});
</script>

   <div class="form-group">
    <label>Nama Akun</label>  <span id="error_namaakun" class="text-danger pull-right"></span>
    <input type="text" name="namaakun" id="namaakun" class="form-control" readonly />
    <input type="hidden" name="kodeakun" id="kodeakun" class="form-control" readonly />
   </div>


  <div class="form-group">
   <label>Debet</label>   <span id="error_debet" class="text-danger pull-right"></span>
   <input type="number" name="debet" id="debet" class="form-control" />

  </div>
  <div class="form-group">
   <label>Kredit</label>   <span  id="error_kredit" class="text-danger pull-right"></span>
   <input type="number" name="kredit" id="kredit" class="form-control" />

  </div>


  <div class="form-group" align="center">
   <input type="hidden" name="row_id" id="hidden_row_id" />
   <button type="button" name="save" id="save" class="btn btn-info">Save</button>
  </div>
 </div>
 <div id="action_alert" title="Action">

 </div>



<script>
$(document).ready(function(){

var count = 0;

$('#user_dialog').dialog({
 autoOpen:false,
 width:400,
 height:400
});

$('#add').click(function(){
 $('#user_dialog').dialog('option', 'title', 'Tambah Data');

 $('#kodeakun').val('');
 $('#namaakun').val('');

 $('#debet').val('');
 $('#kredit').val('');

 $('#error_kodeakun').text('');
 $('#error_namaakun').text('');


 $('#kodeakun').css('border-color', '');
 $('#namaakun').css('border-color', '');


 $('#save').text('Save');
 $('#user_dialog').dialog('open');
});

$('#save').click(function(){
//INTRN1


  //JURNAL
 var error_kodeakun = '';
 var kodeakun = '';
 var namaakun = '';
 var debet = '';
 var kredit = '';
 var tglin = '<?php echo $tglin; ?>';
 var kodein = '<?php echo $konter; ?>';
 var konterin = '<?php echo $konterin; ?>';

 //QUERY 1

 if($('#kodeakun').val() == '')
 {
  error_kodeakun = 'No Akun tidak boleh kosong !';
  $('#error_kodeakun').text(error_kodeakun);
  $('#kodeakun').css('border-color', '#cc0000');
  kodeakun = '';
 }
 else
 {
  error_kodeakun = '';
  $('#error_kodeakun').text(error_kodeakun);
  $('#kodeakun').css('border-color', '');
  kodeakun = $('#kodeakun').val();
 }


 if($('#namaakun').val() == '')
 {
  error_namaakun = 'Nama Akun tidak boleh kosong !';
  $('#error_namaakun').text(error_namaakun);
  $('#namaakun').css('border-color', '#cc0000');
  namaakun = '';
 }
 else
 {
  error_namaakun = '';
  $('#error_namaakun').text(error_namaakun);
  $('#namaakun').css('border-color', '');
  namaakun = $('#namaakun').val();
 }


 //QUERY 2


 if(!($('#debet').val() == '' || $('#kredit').val() == ''))
 {
   error_debet = 'Inputkan salah satu saja ! debet/kredit ';
   $('#error_debet').text(error_debet);
   $('#debet').css('border-color', '#cc0000');
   debet = $('#debet').val();
 }
 else if ($('#debet').val() == '' && $('#kredit').val() == '') {
   error_debet = 'Debet tidak boleh kosong !';
   $('#error_debet').text(error_debet);
   $('#debet').css('border-color', '#cc0000');
   debet = $('#debet').val();
 }
 else
 {
  error_debet = '';
  $('#error_debet').text(error_debet);
  $('#debet').css('border-color', '');
  debet = $('#debet').val();
 }


 if(!($('#kredit').val() == '' || $('#debet').val() == ''))
 {
   error_kredit = 'Inputkan salah satu saja ! debet/kredit ';
   $('#error_kredit').text(error_kredit);
   $('#kredit').css('border-color', '#cc0000');
   kredit = $('#kredit').val();
 }
 else if ($('#kredit').val() == '' && $('#debet').val() == '') {
   error_kredit = 'Kredit tidak boleh kosong !';
   $('#error_kredit').text(error_kredit);
   $('#kredit').css('border-color', '#cc0000');
   kredit = $('#kredit').val();
 }
 else
 {
  error_kredit = '';
  $('#error_kredit').text(error_kredit);
  $('#kredit').css('border-color', '');
  kredit = $('#kredit').val();
 }

 if(error_kodeakun != '' || error_namaakun != '' || error_debet != '' || error_kredit != '')
 {
  return false;
 }
 else
 {
  if($('#save').text() == 'Save')
  {
   count = count + 1;
   output = '<tr id="row_'+count+'">';
   output += '<td>'+kodeakun+' <input type="hidden" name="hidden_kodeakun[]" id="kodeakun'+count+'" value="'+kodeakun+'" /></td>';
   output += '<td>'+namaakun+' <input type="hidden" name="hidden_namaakun[]" id="namaakun'+count+'" value="'+namaakun+'" /></td>';
   output += '<td>'+debet+' <input type="hidden" name="hidden_debet[]" id="debet'+count+'" class="debet" value="'+debet+'" /></td>';
   output += '<td>'+kredit+' <input type="hidden" name="hidden_kredit[]" id="kredit'+count+'"  class="kredit" value="'+kredit+'" /></td>';

   output +='<input type="hidden" name="hidden_konterin" id="konterin" value="'+konterin+'" />';
   output +='<input type="hidden" name="hidden_kodein" id="kodein" value="'+kodein+'" />';
   output +='<input type="hidden" name="hidden_tglin" id="tglin" value="'+tglin+'" />';
   output +='<input type="hidden" name="hidden_kodeitem1" id="kodeitem1" value="'+<?php echo $kodeitem1; ?>+'" />';
   output +='<input type="hidden" name="hidden_kodeitem2" id="kodeitem2" value="'+<?php echo $kodeitem2; ?>+'" />';


   output += '<td><button type="button" name="remove_details" class="btn btn-danger btn-xs remove_details" id="'+count+'">Remove</button></td>';
   output += '</tr>';
   $('#user_data').append(output);
   // START SUM

     $(function(){ // SUM KREDIT
       var kredit1 = 0;
       $(".kredit").each(function(){
         kredit1 += Number($(this).val());
       });
       $("#val").text(kredit1);
     });

     $(function(){ //  SUM DEBET
       var debet1 = 0;
       $(".debet").each(function(){
         debet1 += Number($(this).val());
       });
       $("#val2").text(debet1);
     });

   // END SUM

  }
  else
  {
   var row_id = $('#hidden_row_id').val();
   output = '<tr id="row_'+count+'">';
   output += '<td>'+kodeakun+' <input type="hidden" name="hidden_kodeakun[]" id="kodeakun'+count+'" value="'+kodeakun+'" /></td>';
   output += '<td>'+namaakun+' <input type="hidden" name="hidden_namaakun[]" id="namaakun'+count+'" value="'+namaakun+'" /></td>';
   output += '<td>'+debet+' <input type="hidden" name="hidden_debet[]" id="debet'+count+'" class="debet" value="'+debet+'" /></td>';
   output += '<td>'+kredit+' <input type="hidden" name="hidden_kredit[]" id="kredit'+count+'"  class="kredit" value="'+kredit+'" /></td>';

   output +='<input type="hidden" name="hidden_konterin" id="konterin" value="'+konterin+'" />';
   output +='<input type="hidden" name="hidden_kodein" id="kodein" value="'+kodein+'" />';
   output +='<input type="hidden" name="hidden_tglin" id="tglin" value="'+tglin+'" />';
   output +='<input type="hidden" name="hidden_kodeitem1" id="kodeitem1" value="'+<?php echo $kodeitem1; ?>+'" />';
   output +='<input type="hidden" name="hidden_kodeitem2" id="kodeitem2" value="'+<?php echo $kodeitem2; ?>+'" />';


   output += '<td><button type="button" name="remove_details" class="btn btn-danger btn-sm remove_details" id="'+row_id+'">Hapus</button></td>';
   $('#row_'+row_id+'').html(output);
  }

  $('#user_dialog').dialog('close');
 }
});



$(document).on('click', '.remove_details', function(){
 var count = $(this).attr("id");
 if(confirm("Apakah kamu yakin untuk menghapus row data ini? "))
 {
  $('#row_'+count+'').remove();
 }
 else
 {
  return false;
 }
});

$('#action_alert').dialog({
 autoOpen:false
});


$('#user_form').on('submit', function(event){
 event.preventDefault();
 var count_data = 0;
 $('.debet').each(function(){
  count_data = count_data + 1;
 });
 if(count_data > 0)
 {
   var val=document.getElementById("val").innerHTML;
   var val2=document.getElementById("val2").innerHTML;
   var val3=document.getElementById("hasil-output").innerHTML;

   if (val == val3 && val2 == val3 ) {
   var form_data = $(this).serialize();
   $.ajax({
    url:"insert.php",
    method:"POST",
    data:form_data,
    success:function(data)
    {
        $('#user_data').find("tr:gt(0)").remove();
        $('#action_alert').html('<p>Data berhasil di simpan</p>');
        $('#action_alert').dialog('open');
        document. location='_ms_adjust.php';
    }
   })
 }else {
   $('#action_alert').html('<p>Total Jumlah tidak sama</p>');
   $('#action_alert').dialog('open');
 }

}
 else
 {
  $('#action_alert').html('<p>Tolong untuk tambah data terlebih dahulu</p>');
  $('#action_alert').dialog('open');
 }
});

});


</script>
<script type="text/javascript">
<?php echo $jsArray; ?>
function changeValue(id){
document.getElementById('namaakun').value = prdName[id].namaakun;
document.getElementById('kodeakun').value = prdName[id].kodeakun;
};
</script>

   </form>
</div>
<?php } ?>
         </div>

            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->

          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->

  <!-- /.content-wrapper -->
</div>

<!-- ./wrapper -->

<?php include 'config/footer.php'; ?>


<!-- hapus banyak data -->
<script>
  $(document).ready(function(){ // Ketika halaman sudah siap (sudah selesai di load)
    $("#check-all").click(function(){ // Ketika user men-cek checkbox all
      if($(this).is(":checked")) // Jika checkbox all diceklis
        $(".check-item").prop("checked", true); // ceklis semua checkbox siswa dengan class "check-item"
      else // Jika checkbox all tidak diceklis
        $(".check-item").prop("checked", false); // un-ceklis semua checkbox siswa dengan class "check-item"
    });

    $("#btn-delete").click(function(){ // Ketika user mengklik tombol delete
      var confirm = window.confirm("Apakah Anda yakin ingin menghapus data-data ini?"); // Buat sebuah alert konfirmasi

      if(confirm) // Jika user mengklik tombol "Ok"
        $("#form-delete").submit(); // Submit form
    });
  });
  </script>
</body>
</html>
<?php } ?>
