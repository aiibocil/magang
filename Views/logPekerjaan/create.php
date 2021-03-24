<?=$this->extend('layout/template')?>

<?=$this->section('content')?>


<h2 class="pl-2 mb-2 pt-2">logPekerjaan</h2>


<?php

if (@$success) {
	echo '<div class="alert alert-success alert-dismissible">
                  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                  <h5><i class="icon fas fa-check"></i> info!</h5>
                  Data Berhasil ditambahkan
                </div>';
}

?>


<form action="<?=site_url('logPekerjaan-create');?>" method="post" enctype="multipart/form-data">
<div class="card">
    <div class="card-header">
        <h3 class="card-title">Tambah Log-Pekerjaan </h3>
    </div>
    <div class="card-body">
        <div class="form-group">
            <label for="label">User</label>
            <input type="text" name="user_id" class="form-control"  >
        </div>
        <div class="form-group">
            <label for="label">Log_aktivitas</label>
            <input type="text" name="log_aktivitas" class="form-control"  >
        </div>
        <div class="form-group">
            <label for="label">Notes</label>
            <input type="text" name="notes" class="form-control"  >
        </div>
        <div class="form-group">
            <label for="label">Attachment</label>
            <input type="file" name="attachment" class="form-control"  >
        </div>
        <div class="form-group">
            <label for="label">Approval</label>
            <select class="form-control" name="approval" id="approval">
	        <option value="id">ID</option>
	        <option value="nama">Nama</option>
            </select>
        </div>
    </div>

    <div class="card-footer">
       <a href="<?=site_url('logPekerjaan');?>" class="btn btn-default mr-1">Kembali</a>
       <button type="submit" name="submit" class="btn btn-primary">Simpan</button>
    </div>
    <!-- /.card-body -->
    <!-- /.card-footer-->
</div>
</form>
<!-- /.card -->
<?=$this->endSection()?>
