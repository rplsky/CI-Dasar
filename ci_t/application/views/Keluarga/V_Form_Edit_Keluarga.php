<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Data Keluarga</title>
</head>
<body>
    <H1>Form Edit Data Keluarga</H1>
    <hr>
    <form action="<?php echo site_url('C_Keluarga/proses_update_keluarga');?>" method="post">
        <?php
            foreach ($data_keluarga as $d_keluarga) {
        ?>
        <Label>No KK</Label>
        <input type="hidden" name="n_nik" value="<?php echo $d_keluarga->nik;?>">
        <input type="hidden" name="no_kk" value="<?php echo $d_keluarga->no_kk;?>">
        <input type="number" name="n_kk" value="<?php echo $d_keluarga->no_kk;?>" disabled><br>
        <Label>NIK</Label>
        <input type="number" name="nik" value="<?php echo $d_keluarga->nik;?>"><br>
        <Label>Nama Lengkap</Label>
        <input type="text" name="nama_lengkap" value="<?php echo $d_keluarga->nama_lengkap;?>"><br>
        <Label>Jenis Kelamin</Label><br>
        <input type="radio" name="jenis_kelamin" value="LAKI-LAKI" <?php if ($d_keluarga->jenis_kelamin=="LAKI-LAKI") { echo "checked"; }?>> Laki - Laki<br>
        <input type="radio" name="jenis_kelamin" value="PEREMPUAN" <?php if ($d_keluarga->jenis_kelamin=="PEREMPUAN") { echo "checked"; }?>> Perempuan<br>
        <Label>Tempat Lahir</Label>
        <input type="text" name="tempat_lahir" value="<?php echo $d_keluarga->tempat_lahir;?>"><br>
        <Label>Tanggal Lahir</Label>
        <input type="date" name="tanggal_lahir" value="<?php echo $d_keluarga->tanggal_lahir;?>"><br>
        <Label>Agama</Label>
        <select name="agama">
            <option value="ISLAM" <?php if ($d_keluarga->agama=="ISLAM") { echo "selected"; }?>>Islam</option>
            <option value="KRISTEN KATOLIK" <?php if ($d_keluarga->agama=="KRISTEN KATOLIK") { echo "selected"; }?>>Kristen Katolik</option>
            <option value="KRISTEN PROTESTAN" <?php if ($d_keluarga->agama=="KRISTEN PROTESTAN") { echo "selected"; }?>>Kristen Protestan</option>
            <option value="HINDU" <?php if ($d_keluarga->agama=="HINDU") { echo "selected"; }?>>Hindu</option>
            <option value="BUDHA" <?php if ($d_keluarga->agama=="BUDHA") { echo "selected"; }?>>Budha</option>
            <option value="KONGHUCU" <?php if ($d_keluarga->agama=="KONGHUCU") { echo "selected"; }?>>Konghucu</option>
        </select><br>
        <Label>Pendidikan</Label>
        <select name="pendidikan">
            <option value="SD" <?php if ($d_keluarga->pendidikan=="SD") { echo "selected"; }?>>SD</option>
            <option value="SMP" <?php if ($d_keluarga->pendidikan=="SMP") { echo "selected"; }?>>SMP</option>
            <option value="SMA" <?php if ($d_keluarga->pendidikan=="SMA") { echo "selected"; }?>>SMA</option>
            <option value="SMK" <?php if ($d_keluarga->pendidikan=="SMK") { echo "selected"; }?>>SMK</option>
            <option value="D1" <?php if ($d_keluarga->pendidikan=="D1") { echo "selected"; }?>>D1</option>
            <option value="D2" <?php if ($d_keluarga->pendidikan=="D2") { echo "selected"; }?>>D2</option>
            <option value="D3" <?php if ($d_keluarga->pendidikan=="D3") { echo "selected"; }?>>D3</option>
            <option value="D4" <?php if ($d_keluarga->pendidikan=="D4") { echo "selected"; }?>>D4</option>
            <option value="S1" <?php if ($d_keluarga->pendidikan=="S1") { echo "selected"; }?>>S1</option>
            <option value="S2" <?php if ($d_keluarga->pendidikan=="S2") { echo "selected"; }?>>S2</option>
            <option value="S3" <?php if ($d_keluarga->pendidikan=="S3") { echo "selected"; }?>>S3</option>
        </select><br>
        <Label>Jenis Pekerjaan</Label>
        <input type="text" name="jenis_pekerjaan" value="<?php echo $d_keluarga->jenis_pekerjaan;?>"><br>
        <Label>Golongan Darah</Label>
        <select name="golongan_darah">
            <option value="A" <?php if ($d_keluarga->golongan_darah=="A") { echo "selected"; }?>>A</option>
            <option value="B" <?php if ($d_keluarga->golongan_darah=="B") { echo "selected"; }?>>B</option>
            <option value="AB" <?php if ($d_keluarga->golongan_darah=="AB") { echo "selected"; }?>>AB</option>
            <option value="O" <?php if ($d_keluarga->golongan_darah=="O") { echo "selected"; }?>>O</option>
        </select><br>
        <input type="submit" name="update" value="Update">
        <?php
            }
        ?>
    </form>
</body>
</html>