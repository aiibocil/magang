<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\KategoriCutiModels;

class KategoriCutiController extends BaseController {
	private $model;

	function __construct() {
		$this->model = new KategoriCutiModels();
		
	}
	public function index() {

		$result['data'] = $this->model->getList();
		return view('kategori-cuti/index', $result);
	}

	public function create() {
		$result['success'] = false;

		if ($this->request->getMethod() === 'post') {
			$this->model->save([
				'kategori_cuti' => $this->request->getPost('kategori_cuti'),
			]);

			$result['success'] = true;
		}

		return view('kategori-cuti/create', $result);
	}

	public function edit($id = '') {
		$result['success'] = false;

		if ($this->request->getMethod() === 'post') {

			$this->model->update(['id' => $id], [
				'kategori_cuti' => $this->request->getPost('kategori_cuti'),
			]);

			$result['success'] = true;
		}
		$result['data'] = $this->model->getById($id);

		return view('kategori-cuti/edit', $result);
	}

	public function hapus($id) {

		$this->model->hapusData($id);
	}
}
