<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Data Mahasiswa - Tambah</title>
	<meta name="description" content="Ini deskripsi">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="icon" href=<?php echo base_url("/risitas-favicon.ico") ?>/>
</head>
<body>
	Tambah Data Mahasiswa
	<hr>
	<?php echo form_open('tambah/proses'); ?>
	<table>
		<tr>
			<td><label for=nimbox>NIM</label></td>
			<td><input type=text maxlength="8" name=t_nim id=nimbox placeholder="NIM Mahasiswa" value="<?php echo (isset($loadForm['nim'])? $loadForm['nim'] : "") ?>"/></td>
		</tr>
		<?php if(isset($validation['nim'])): ?>
			<tr>
				<td colspan=2 style="text-align: right;"><span id=nimboxError style="color:red; font-style: italic;"><?php echo $validation['nim']; ?></span></td>
			</tr>
		<?php endif; ?>
		<tr>
			<td><label for=namabox>Nama Lengkap</label></td>
			<td><input type=text maxlength=64 name=t_namalengkap id=namabox placeholder="Nama Lengkap Mahasiswa" value="<?php echo (isset($loadForm['nama_lengkap'])? $loadForm['nama_lengkap'] : "") ?>"/></td>
		</tr>
		<?php if(isset($validation['nama_lengkap'])): ?>
			<tr>
				<td colspan=2 style="text-align: right;"><span id=namaboxError style="color:red; font-style: italic;"><?php echo $validation['nama_lengkap']; ?></span></td>
			</tr>
		<?php endif; ?>
		<tr>
			<td><label for=kelasbox>Kelas</label></td>
			<td><input type=text maxlength=6 name=t_kelas id=kelasbox placeholder="Kelas Mahasiswa" value="<?php echo (isset($loadForm['kelas'])? $loadForm['kelas'] : "") ?>"/></td>
		</tr>
		<?php if(isset($validation['kelas'])): ?>
			<tr>
				<td colspan=2 style="text-align: right;"><span id=kelasboxError style="color:red; font-style: italic;"><?php echo $validation['kelas']; ?></span></td>
			</tr>
		<?php endif; ?>
		<tr>
			<td><input type=reset name=t_reset value="Ulangi" /></td>
			<td style="text-align: right;"><input type=submit name=t_submit value="Tambah" /></td>
		</tr>
	</table>
	<?php echo form_close(); ?>
</body>
</html>