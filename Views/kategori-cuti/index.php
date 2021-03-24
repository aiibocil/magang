<?=$this->extend('layout/template')?>

<?=$this->section('content')?>



<h2 class="pl-2 mb-2 pt-2">Kategori Cuti</h2>
<div class="card">
    <div class="card-header">
        <h3 class="card-title">Kategori Cuti</h3>
    </div>
    <div class="card-body">
    <a href="<?=site_url('kategori-cuti-create');?>" class="btn btn-success mb-2" >Tambah Data </a>
<?php

$template = array(
	'table_open' => '<table id="tableku" class="table table-striped table-bordered">',
);

$table = new \CodeIgniter\View\Table($template);

$table->setHeading('ID', 'Kategori Cuti', 'Aksi');

foreach ($data as $d) {
	$aksi = '<button class="btn btn-danger btn-sm btn-delete"
			data-remote="' . site_url('kategori-cuti-hapus-' . $d['id']) . '" >Hapus</button> ';

	$aksi .= '<a href="' . site_url('kategori-cuti-edit-' . $d['id']) . '" class="btn btn-primary btn-sm">Edit</a> ';

	$table->addRow($d['id'], $d['kategori_cuti'], $aksi);
}

echo $table->generate();

?>


    </div>
    <!-- /.card-body -->
    <!-- /.card-footer-->
</div>
<!-- /.card -->




<?=$this->endSection()?>
