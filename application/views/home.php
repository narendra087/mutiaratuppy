<!DOCTYPE html>
<html>
<head>
  <title>List</title>
</head>
<body>
  <h1 style="background-color: gray; color: white;"><center>DATA BARANG</center></h1>
  <table border="1" style="border-collapse: collapse" width="50%">
    <tr style="background:gray;">
      <th>Kode Barang</th>
      <th>Nama Barang</th>
      <th>Detail</th>
      <th>Stock</th>
      <th>Harga</th>
    </tr>
    <?php foreach ($barang as $a){ ?>
    <tr align="center">
      <td><?php echo $a['id']; ?></td>
      <td><?php echo $a['nama']; ?></td>
      <td><?php echo $a['detail']; ?></td>
      <td><?php echo $a['stok']; ?></td>
      <td><?php echo $a['harga']; ?></td>
    </tr>
    <?php } ?>
  </table>
  <br>
  <br>
  <a href=""><button type="submit">Logout</button></a>
  <!--<a href="<?php echo base_url()."index.php/controllerbarang/addbarang"; ?>">Tambah Data</a>-->
</body>
</html>