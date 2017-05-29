<!DOCTYPE html>
<html>
<head>
	<title>Mutiara Tuppy || Uploads</title>
	<link rel="shortcut icon" href="<?=base_url()?>assets/img/tuppy.png">
</head>
<body>
<form method="POST" enctype="multipart/form-data" action="<?php echo base_url()."p_control/do_upload"; ?>">
<table>
<tr>
	<td>ID : </td>
	<td><input type="text" name="id" value="<?php echo $id; ?>" readonly></td>
</tr>
<tr>
	<td>NAMA PRODUK : </td>
	<td><input type="text" name="nama" value="<?php echo $nama; ?>" readonly></td>
</tr>

	<tr>
		<td>Upload an Image :</td>
		<td><input type="file" name="gambar"/></td>
	</tr>
	<tr>
		<td>Upload an Image :</td>
		<td><input type="file" name="gambar2"/></td>
	</tr>
	<tr>
		<td>Upload an Image :</td>
		<td><input type="file" name="gambar3"/></td>
	</tr>
	<tr>
		<td></td>
		<td><input type="submit" name="upload" value="Upload" /></td>
	</tr>
</table>
</form>
</body>
</html>