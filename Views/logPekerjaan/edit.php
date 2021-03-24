
<?=$this->extend('layout/template')?>

<?=$this->section('content')?>

<h2 class="pl-2 mb-2 pt-2"> Log Pekerjaaan</h2>


 <?php

if (isset($_POST['submit'])) {
	$data = array(
		'id' => $_POST['id'],
        'Nama' => $_POST['Nama'],
        'Alamat' => $_POST['Alamat'],
        'Telp' => $_POST['Telp'],
        'Foto' => $_FILES['Foto']['name'],
        
	);
	
    $foto=$_FILES['Foto']['name'];
    $tmp =$_FILES['Foto']['tmp_name'];
	
    // Rename nama fotonya dengan menambahkan tanggal dan jam upload
        $fotobaru = $foto;
        
    // Set path folder tempat menyimpan fotonya
    $path = "asset/img/".$fotobaru;

	if(move_uploaded_file($tmp, $path)){
        $db->where('id', $_GET['id']);

    //yang kiri nama table dan yang kanan adalah data yang hendak dirubah
	$id = $db->update('pegawai_cuti', $data);

if (@$success) {
	echo '<div class="alert alert-success alert-dismissible">
                  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                  <h5><i class="icon fas fa-check"></i> info!</h5>
                  Data Berhasil di edit
                </div>';

            }
        }else{
            
        }
}

$attributes = ['method' => 'post', 'id' => 'myform'];
echo form_open('logPekerjan-edit-' . $data['id'], $attributes);

?>

<form action="<?=$_SERVER['REQUEST_URI'];?>" method="post" enctype="multipart/form-data">
<div class="card">
    <div class="card-header">
        <h3 class="card-title">Edit logPekerjaan</h3>
    </div>
    <div class="card-body">
        <div class="form-group">
            <label for="label">User</label>
            <input type="text" value="<?=$data['user_id'];?>" name="user_id" class="form-control"  >
        </div>
        <div class="form-group">
            <label for="label">Log-Aktivitas</label>
            <input type="text" value="<?=$data['log_aktivitas'];?>" name="log_aktivitas" class="form-control"  >
        </div>
        <div class="form-group">
            <label for="label">Notes</label>
            <input type="text" value="<?=$data['notes'];?>" name="notes" class="form-control"  >
        </div>
        <div class="form-group">
            <label for="label">Attachment</label>
            <input type="file" value="<?=$data['attachment'];?>" name="attachment" class="form-control"  >
        </div>
        <div class="form-group">
            <label for="label">Approval</label>
            <select class="form-control" value="<?=$data['approval'];?>" name="approval" class="form-control"  >
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
<?=form_close();?>
<!-- /.card -->

<?=$this->endSection()?>
