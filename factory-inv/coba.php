<body>
<h3>Contoh 1: Mengambil nilai tag span</h3>
<p>Nama: Andika Siswoyo, Nilai: <span id="nilai_andika">25</span>
<br />Nama: Joko Susilo, Nilai: <span id="nilai_joko">25</span></p>
<button id="tombol_p">Tampilkan Nilai</button>

<br/>
<br/>

<br/>
<br/>

<h2>Hasil: <span id="hasil"></span></h2>
</body>
<script type="text/javascript">
document.getElementById("tombol_p").addEventListener("click", tampilkan_nilai_p);

function tampilkan_nilai_p() {
	var nilai_andika=document.getElementById("nilai_andika").innerHTML;
var nilai_joko=document.getElementById("nilai_joko").innerHTML;
if (nilai_andika == nilai_joko) {
document.getElementById("hasil").innerHTML=nilai_andika+" dan "+nilai_joko;
}else {

}
}

</script>
