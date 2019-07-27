<html>
<head>
<style>
p.inline {display: inline-block;}
span { font-size: 13px;}
</style>
<style type="text/css" media="print">
    @page
    {
        size: auto;   /* auto is the initial value */
        margin: 0mm;  /* this affects the margin in the printer settings */

    }
</style>
</head>
<body onload="window.print();">
	<div style="margin-left: 5%">
		<?php

    include '../config/koneksi.php';
		include 'barcode128.php';
    $id = $_GET['kodeitem'];
    $data = mysqli_query($koneksi_inv,"SELECT * FROM intrn1 as x JOIN ms_inmst1 as y ON y.kodeitem = x.kodeitem WHERE x.kodeitem = '$id'");
    $d = mysqli_fetch_array($data);

    $namabrg = $d['namabrg'];
    $kodein = $d['kodein'];
    $qty = $d['qty'];
    $jual = $d['hargajual'];

		for($i=1;$i<=$qty;$i++){
			echo "<p class='inline'><span ><b>Item: $namabrg</b></span>".bar128(stripcslashes($kodein))."<span ><b>Price: ".$jual." </b><span></p>&nbsp&nbsp&nbsp&nbsp";
		}

		?>
	</div>
</body>
</html>
