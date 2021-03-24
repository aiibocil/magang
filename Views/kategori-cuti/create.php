<?=$this->extend('layout/template')?>

<?=$this->section('content')?>


<h2 class="pl-2 mb-2 pt-2">Kategori Cuti</h2>


<?php

if (@$success) {
	echo '<div class="alert alert-success alert-dismissible">
                  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                  <h5><i class="icon fas fa-check"></i> info!</h5>
                  Data Berhasil ditambahkan
                </div>';
}

?>


<form action="<?=site_url('kategori-cuti-create');?>" method="post">
<div class="card">
    <div class="card-header">
        <h3 class="card-title">Tambah Kategori Cuti</h3>
    </div>
    <div class="card-body">
        <div class="form-group">
            <label for="label">Kategori Cuti</label>
            <input type="text" name="kategori_cuti" class="form-control"  >
        </div>
    </div>

    <div class="card-footer">
       <a href="<?=site_url('kategori-cuti');?>" class="btn btn-default mr-1">Kembali</a>
       <button type="submit" name="submit" class="btn btn-primary">Simpan</button>
    </div>
    <!-- /.card-body -->
    <!-- /.card-footer-->
</div>
</form>
<!-- /.card -->
<?=$this->endSection()?>
