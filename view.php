<h1>Data Makanan</h1>
<a href="<?php echo base_url("index.php/upload/tambah"); ?>">Tambah Makanan</a><br><br>

<table border="1" cellpadding="8">
<tr>
	<th>Gambar Makanan</th>
	<th>Nama Makanan</th>
	<th>Harga Makanan</th>
</tr>

<?php
if( ! empty($gambar)){
	foreach($gambar as $data){
		echo "<tr>";
		echo "<td><img src='".base_url("foto/".$data->fotomakanan)."' width='100' height='100'></td>";
		echo "<td>".$data->namamakanan."</td>";
		echo "<td>Rp. ".$data->hargamakanan."</td>";
		echo "</tr>";
	}
}else{
	echo "<tr><td colspan='3'>Data tidak ada</td></tr>";
}
?>
</table>
