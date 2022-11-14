<title>Data Admin</title>
</head>
<h1 style="text-align:center">ADMIN YANG TERDAFTAR</h1>
<br><br><br>
<a class="btn btn-primary" style="position:absolute; top: 87px; left: 10px;" href="<?php echo site_url('admin')?>">Tambah Data</a>
<table align="center" width="100%" border="3" class="table">
    <tr>
        <td align="center">No</td>
        <td align="center">Kode Admin</td>
        <td align="center">Nama Admin</td>
        <td align="center">Jenis Kelamin</td>
        <td align="center">Agama</td>    
        <td align="center">Email</td>    
        <td align="center">No Hp</td>    
        <td align="center">Aksi</td>    
    </tr>
    <?php
$no=1;
foreach ($admin as $row) {?>

<tr>
    <td align="center"><?php echo $no++ ?></td>
    <td align="center"><?php echo $row->kode_admin ?></td>
    <td align="center"><?php echo $row->nama_admin ?></td>
    <td align="center"><?php echo $row->jenis_kelamin ?></td>
    <td align="center"><?php echo $row->agama?></td>
    <td align="center"><?php echo $row->email ?></td>
    <td align="center"><?php echo $row->no_hp ?></td>
    <td align="center">
        <a href="<?php echo base_url(); ?>admin/hapus_data/<?php echo $row->kode_admin; ?>" class="btn btn-danger">Hapus</a>
</td>
</tr><?php
}
?>
</table>