<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Siswa</title>
</head>
<body>
    <pre>
    <H1>Form Siswa</H1>
    <br>
    <form action="<?php echo site_url('C_Hello/ProsesInput');?>" method="post">
        <Label>NIS</Label>
        <input type="text" name="nis"><br>
        <Label>Nama Siswa</Label>
        <input type="text" name="nama_siswa"><br>
        <Label>Alamat</Label>
        <textarea name="alamat" cols="20" rows="3"></textarea><br>
        <input type="submit" name="kirim" value="Kirim">
    </form>
    </pre>
</body>
</html>