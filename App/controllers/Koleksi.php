<?php

class Koleksi extends Controller
{
	public function index()
	{
		$data = [
			'title' => 'Koleksi',
			'data' => $this->model('koleksi_model')->getAllKoleksi()
		];
		$this->view('templates/header', $data);
		$this->view('koleksi/index', $data);
		$this->view('templates/footer');
	}
}
