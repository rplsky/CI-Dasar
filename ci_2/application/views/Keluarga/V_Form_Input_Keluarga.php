<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data Keluarga</title>
</head>
<body>
    <H1>Form Tambah Data Keluarga</H1>
    <hr>
    <form action="<?php echo site_url('C_Keluarga/proses_tambah_keluarga');?>" method="post">
        <Label>No KK</Label>
        <input type="hidden" name="no_kk" value="<?php echo $n_kk;?>">
        <input type="number" name="n_kk" value="<?php echo $n_kk;?>" disabled><br>
        <Label>NIK</Label>
        <input type="number" name="nik"><br>
        <Label>Nama Lengkap</Label>
        <input type="text" name="nama_lengkap"><br>
        <Label>Jenis Kelamin</Label><br>
        <input type="radio" name="jenis_kelamin" value="LAKI-LAKI"> Laki - Laki<br>
        <input type="radio" name="jenis_kelamin" value="PEREMPUAN"> Perempuan<br>
        <Label>Tempat Lahir</Label>
        <input type="text" name="tempat_lahir"><br>
        <Label>Tanggal Lahir</Label>
        <input type="date" name="tanggal_lahir"><br>
        <Label>Agama</Label>
        <select name="agama">
            <option value="ISLAM">Islam</option>
            <option value="KRISTEN KATOLIK">Kristen Katolik</option>
            <option value="KRISTEN PROTESTAN">Kristen Protestan</option>
            <option value="HINDU">Hindu</option>
            <option value="BUDHA">Budha</option>
            <option value="KONGHUCU">Konghucu</option>
        </select><br>
        <Label>Pendidikan</Label>
        <select name="pendidikan">
            <option value="SD">SD</option>
            <option value="SMP">SMP</option>
            <option value="SMA">SMA</option>
            <option value="SMK">SMK</option>
            <option value="D1">D1</option>
            <option value="D2">D2</option>
            <option value="D3">D3</option>
            <option value="D4">D4</option>
            <option value="S1">S1</option>
            <option value="S2">S2</option>
            <option value="S3">S3</option>
        </select><br>
        <Label>Jenis Pekerjaan</Label>
        <input type="text" name="jenis_pekerjaan"><br>
        <Label>Golongan Darah</Label>
        <select name="golongan_darah">
            <option value="A">A</option>
            <option value="B">B</option>
            <option value="AB">AB</option>
            <option value="O">O</option>
        </select><br>
        <input type="submit" name="simpan" value="Simpan">
    </form>
</body>
</html>