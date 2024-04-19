<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Data KK</title>
</head>
<body>
    <H1>Form Edit KK</H1>
    <hr>
    <form action="<?php echo site_url('C_KK/proses_update_kk');?>" method="post">
        <?php
            foreach ($data_kk as $d_kk) {
        ?>
        <Label>No KK</Label>
        <input type="hidden" name="no_kk" value="<?php echo $d_kk->no_kk;?>">
        <input type="number" name="n_kk" value="<?php echo $d_kk->no_kk;?>" disabled><br>
        <Label>Nama Kepala Keluarga</Label>
        <input type="text" name="nama_kk" value="<?php echo $d_kk->nama_kk;?>"><br>
        <Label>Alamat</Label>
        <textarea name="alamat" cols="20" rows="3"><?php echo $d_kk->alamat;?></textarea><br>
        <Label>RT / RW</Label>
        <input type="number" name="rt" value="<?php echo $d_kk->rt;?>"><input type="number" name="rw"value="<?php echo $d_kk->rw;?>"><br>
        <Label>Desa / Kelurahan</Label>
        <input type="text" name="desakelurahan" value="<?php echo $d_kk->desakelurahan;?>"><br>
        <Label>Kecamatan</Label>
        <input type="text" name="kecamatan" value="<?php echo $d_kk->kecamatan;?>"><br>
        <Label>Kabupaten / Kota</Label>
        <input type="text" name="kabupatenkota" value="<?php echo $d_kk->kabupatenkota;?>"><br>
        <Label>Provinsi</Label>
        <input type="text" name="provinsi" value="<?php echo $d_kk->provinsi;?>"><br>
        <Label>Kode Pos</Label>
        <input type="number" name="kodepos" value="<?php echo $d_kk->kodepos;?>"><br>
        <Label>Dikeluarkan Tanggal</Label>
        <input type="date" name="tgl_keluar" value="<?php echo $d_kk->tgl_keluar;?>"><br>
        <Label>Kepala Dinas Kependudukan dan Pencatatan Sipil</Label>
        <input type="text" name="kepala_dukcapil" value="<?php echo $d_kk->kepala_dukcapil;?>"><br>
        <input type="submit" name="update" value="Update">
        <?php
            }
        ?>
    </form>
</body>
</html>