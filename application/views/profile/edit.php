<h1>Update Profil Keuangan</h1>
<div class="form-tambah">
    <?php
    echo form_open_multipart('profile/update');
    ?>
    <p>Nama Profile</p>
    <?php echo form_error('nama'); ?>
    <input type="hidden" name="id" value="<?php echo $data['id'];?>">
    <input type="text" name="nama" class="form-control" value="<?php echo $data['nama'];?>"><br>        
    <p>Alamat</p>
    <?php echo form_error('alamat'); ?>
    <input type="text" name="alamat" class="form-control" value="<?php echo $data['alamat'];?>"><br>  
    <p>Foto Profil</p>
    <?php echo form_error('foto'); ?>
    <input type="file" name="foto">
    <p class="help-block"></p>
    <input type="submit" value="Simpan" class="btn btn-primary">
    <a href='<?= site_url('profile'); ?>'><input type="button" value="Cancel" class="btn btn-default"></a>
    <button type="Reset" class="btn btn-default">Reset</button>
    <?php
    form_close();
    ?>
</div>