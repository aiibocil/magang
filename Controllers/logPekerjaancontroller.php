<?php

namespace App\Controllers;
//  nyoba
use App\Controllers\BaseController;
use App\Models\logPekerjaanmodels;

class logPekerjaancontroller extends BaseController {
	private $model;

	function __construct() {
		$this->model = new logPekerjaanmodels();
		
	}
	public function index() {

		$result['data'] = $this->model->getList();
		return view('logPekerjaan/index', $result);
	}

	public function create() {
		$result['success'] = false;

		if ($this->request->getMethod() === 'post') {
			$this->model->save([
				'user_id' => $this->request->getPost('user_id'),
                'log_aktivitas' => $this->request->getPost('log_aktivitas'),
				'notes' => $this->request->getPost('notes'),
				'attachment' => $this->request->getPost('attachment'),
				'approval' => $this->request->getPost('approval'),
			]);

			$result['success'] = true;
		}

		return view('logPekerjaan/create', $result);
	}

	public function edit($id = '') {
		$result['success'] = false;

		if ($this->request->getMethod() === 'post') {

			$this->model->update(['id' => $id], [
				'user_id' => $this->request->getPost('user_id'),
                'log_aktivitas' => $this->request->getPost('log_aktivitas'),
				'notes' => $this->request->getPost('notes'),
				'attachment' => $this->request->getPost('attachment'),
				'approval' => $this->request->getPost('approval'),
				
			]);

			$result['success'] = true;
		}
		$result['data'] = $this->model->getById($id);

		return view('logPekerjaan/edit', $result);
	}

	public function hapus($id) {

		$this->model->hapusData($id);
	}
}
