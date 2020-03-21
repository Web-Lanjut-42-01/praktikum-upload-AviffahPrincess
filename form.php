<h1>Tambah Gambar</h1><br>

<div style="color: yellow;"><?php echo (isset($pesan))? $pesan : ""; ?></div>

<?php echo form_open("upload/tambah", array('enctype'=>'multipart/form-data')); ?>
	<table cellpadding="2">
		<tr>
			<td>Nama Makanan</td>
			<td><input type="text" name="nama" value="<?php echo set_value('Masukkan Nama Makanan'); ?>"></td>
		</tr>
		<tr>
			<td>Harga Makanan</td>
			<td><input type="text" name="harga" value="<?php echo set_value('Masukkan Harga Makanan'); ?>"></td>
		</tr>
		<tr>
			<td>Gambar</td>
			<td><input type="file" name="input_gambar"></td>
		</tr>
	</table>

	<br>
	<input type="submit" name="submit" value="Simpan">
	<a href="<?php echo base_url(); ?>"><input type="button" value="Batal"></a>
<?php echo form_close(); ?>
