<title>Data Barang</title>
</head>
<h1 style="text-align:center">ADMIN YANG TERDAFTAR</h1>
<br><br><br>
<a class="btn btn-primary" style="position:absolute; top: 87px; left: 10px;" href="<?php echo site_url('barang')?>">Tambah Data</a>
<table align="center" width="100%" border="3" class="table">
    <tr>
        <td align="center">No</td>
        <td align="center">Kode Barang</td>
        <td align="center">Nama Barang</td>
        <td align="center">Satuan Barang</td>
        <td align="center">Harga Beli</td>    
        <td align="center">Harga Jual</td>    
        <td align="center">Kategori</td>    
        <td align="center">Aksi</td>    
    </tr>
    <?php
$no=1;
foreach ($brg as $row) {?>

<tr>
    <td align="center"><?php echo $no++ ?></td>
    <td align="center"><?php echo $row->kode_barang ?></td>
    <td align="center"><?php echo $row->nama_barang ?></td>
    <td align="center"><?php echo $row->satuan ?></td>
    <td align="center"><?php echo $row->harga_beli?></td>
    <td align="center"><?php echo $row->harga_jual ?></td>
    <td align="center"><?php echo $row->kategori ?></td>
    <td align="center">
        <a href="<?php echo base_url(); ?>barang/hapus_barang/<?php echo $row->kode_barang; ?>" class="btn btn-danger">Hapus</a>
</td>
</tr><?php
}
?>
</table>