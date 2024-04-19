<div class="right_col" role="main">
    <H1>Form Tambah KK</H1>
    <hr>
    <form action="<?php echo site_url('C_KK/proses_tambah_kk');?>" method="post">
        <Label>No KK</Label>
        <input type="number" name="no_kk"><br>
        <Label>Nama Kepala Keluarga</Label>
        <input type="text" name="nama_kk"><br>
        <Label>Alamat</Label>
        <textarea name="alamat" cols="20" rows="3"></textarea><br>
        <Label>RT / RW</Label>
        <input type="number" name="rt"><input type="number" name="rw"><br>
        <Label>Desa / Kelurahan</Label>
        <input type="text" name="desakelurahan"><br>
        <Label>Kecamatan</Label>
        <input type="text" name="kecamatan"><br>
        <Label>Kabupaten / Kota</Label>
        <input type="text" name="kabupatenkota"><br>
        <Label>Provinsi</Label>
        <input type="text" name="provinsi"><br>
        <Label>Kode Pos</Label>
        <input type="number" name="kodepos"><br>
        <Label>Dikeluarkan Tanggal</Label>
        <input type="date" name="tgl_keluar"><br>
        <Label>Kepala Dinas Kependudukan dan Pencatatan Sipil</Label>
        <input type="text" name="kepala_dukcapil"><br>
        <input type="submit" name="simpan" value="Simpan">
    </form>
</div>