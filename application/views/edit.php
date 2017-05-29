<!DOCTYPE html>
<html>
<head>
	<title>Mutiara Tuppy || Edit</title>
	<link rel="shortcut icon" href="<?=base_url()?>assets/img/tuppy.png">
</head>
<body>
<form method="POST" action="<?php echo base_url()."p_control/edit"; ?>">
<table>
	<tr>
		<td>Id</td>
		<td><input type="text" name="id" value="<?php echo $id; ?>" readonly /></td>
	</tr>
	<tr>
		<td>Nama Produk</td>
		<td><input type="text" name="nama" value="<?php echo $nama; ?>"/></td>
	</tr>
	<tr>
		<td>Harga</td>
		<td><input type="text" name="harga" value="<?php echo $harga; ?>"/></td>
	</tr>
	<tr>
		<td>Stock</td>
		<td><input type="text" name="stock" value="<?php echo $stock; ?>"/></td>
	</tr>
	<tr>
		<td>Kategori</td>
		<td>
			<select size="1" name="kategori" value="<?php echo $kategori; ?>">
                                <option value="">...</option>
                                <option value="Bottle Collection">Bottle Collection</option>
                                <option value="Kitchen Collection">Kitchen Collection</option>
                                <option value="Fridge Collection">Fridge Collection</option>
                                <option value="Lunch Box Collection">Lunch Box Collection</option>
            </select>
        </td>
	</tr>
		<tr>
		<td>Details</td>
		<td><input type="textarea" name="details" value="<?php echo $details; ?>"/></td>
	</tr>
	<tr>
		<td></td>
		<td><input type="submit" name="btnSubmit" value="Simpan" /></td>
	</tr>
</table>
</form>
</body>
</html>