<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data KK</title>
</head>
<body>
    <h2>Data KK</h2>
    <hr>
    <a href="<?php echo site_url('C_KK/form_input_kk');?>">Tambah Data</a>
    <table border='1'>
        <thead>
            <tr>
                <th>No KK</th>
                <th>Nama Kepala Keluarga</th>
                <th>Alamat</th>
                <th>RT/RW</th>
                <th>Desa/Kelurahan</th>
                <th>Kecamatan</th>
                <th>Kabupaten/Kota</th>
                <th>Provinsi</th>
                <th>Kode Pos</th>
                <th>Dikeluarkan Tanggal</th>
                <th>Kepala Dinas Kependudukan dan Pencatatan Sipil</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php
                foreach ($data_kk as $d_kk) {
            ?>
                    <tr>
                        <td><?php echo $d_kk->no_kk;?></td>
                        <td><?php echo $d_kk->nama_kk;?></td>
                        <td><?php echo $d_kk->alamat;?></td>
                        <td><?php echo $d_kk->rt."/".$d_kk->rw;?></td>
                        <td><?php echo $d_kk->desakelurahan;?></td>
                        <td><?php echo $d_kk->kecamatan;?></td>
                        <td><?php echo $d_kk->kabupatenkota;?></td>
                        <td><?php echo $d_kk->provinsi;?></td>
                        <td><?php echo $d_kk->kodepos;?></td>
                        <td><?php echo $d_kk->tgl_keluar;?></td>
                        <td><?php echo $d_kk->kepala_dukcapil;?></td>
                        <td><a href="<?php echo site_url('C_Keluarga/index/').$d_kk->no_kk;?>">Tampil Anggota Keluarga</a> | 
                        <a href="<?php echo site_url('C_KK/form_edit_kk/').$d_kk->no_kk;?>">Edit Data</a> | 
                        <a href="<?php echo site_url('C_KK/hapus_kk/').$d_kk->no_kk;?>" onclick="return confirm('Anda akan menghapus data ini?')">Hapus Data</a></td>
                    </tr>
            <?php        
                }
            ?>
        </tbody>
    </table>
</body>
</html>