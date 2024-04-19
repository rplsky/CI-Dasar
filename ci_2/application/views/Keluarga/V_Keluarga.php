<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Keluarga</title>
</head>
<body>
    <h2>Data Keluarga</h2>
    <hr>
    <a href="<?php echo site_url('C_Keluarga/form_input_keluarga/').$n_kk;?>">Tambah Data</a>
    <table border='1'>
        <thead>
            <tr>
                <th>NIK</th>
                <th>Nama Anggota Keluarga</th>
                <th>Jenis Kelamin</th>
                <th>Tempat Lahir</th>
                <th>Tanggal Lahir</th>
                <th>Agama</th>
                <th>Pendidikan</th>
                <th>Jenis Pekerjaan</th>
                <th>Golongan Darah</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php
                foreach ($data_keluarga as $d_keluarga) {
            ?>
                    <tr>
                        <td><?php echo $d_keluarga->nik;?></td>
                        <td><?php echo $d_keluarga->nama_lengkap;?></td>
                        <td><?php echo $d_keluarga->jenis_kelamin;?></td>
                        <td><?php echo $d_keluarga->tempat_lahir;?></td>
                        <td><?php echo $d_keluarga->tanggal_lahir;?></td>
                        <td><?php echo $d_keluarga->agama;?></td>
                        <td><?php echo $d_keluarga->pendidikan;?></td>
                        <td><?php echo $d_keluarga->jenis_pekerjaan;?></td>
                        <td><?php echo $d_keluarga->golongan_darah;?></td>
                        <td><a href="<?php echo site_url('C_Keluarga/form_edit_keluarga/').$d_keluarga->nik;?>">Edit Data</a> | <a href="<?php echo site_url('C_Keluarga/hapus_keluarga/').$d_keluarga->nik.'/'.$d_keluarga->no_kk;?>" onclick="return confirm('Anda akan menghapus data ini?')">Hapus Data</a></td>
                    </tr>
            <?php        
                }
            ?>
        </tbody>
    </table>
</body>
</html>