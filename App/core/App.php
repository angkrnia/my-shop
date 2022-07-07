<?php

class App {
	protected $controller = 'Home';
	protected $method = 'index';
	protected $params = [];

	public function __construct()
	{

	
	$url = $this->parseURL();

	
if (isset($url[0])) {
      if (file_exists('../app/controllers/' . $url[0] . '.php')) {
        $this->controller = $url[0];
        unset($url[0]);
      }
    }
		
		// panggil controllernya dan instansiasi..
		require_once '../app/controllers/' . $this->controller . '.php';
//		include '../app/controllers/' . $this->controller . '.php';
		$this->controller = new $this->controller;

//  b. kelola method
		if ( isset($url[1])){
			if ( method_exists($this->controller, $url[1])) {
				$this->method = $url[1];
				unset($url[1]); // menghilangkan method dari array

			}
		}

//  c. kelola parameters
		if (!empty($url)) { // if tidak empty
			$this->params = array_values($url);
		}


//	d. jalankan controller & method, serta kirimkan parameter jika ada
		call_user_func_array([$this->controller, $this->method], $this->params);

	}	

	public function parseURL()
	{
		if( isset($_GET['url']) ) 
		{
//			$url = $_GET['url']; sebelum dibuang tanda '/'
			$url = rtrim($_GET['url'], '/');
// Bersihkan url dari karakter-karakter 'aneh' yang dibuat oleh hacker
			$url = filter_var($url, FILTER_SANITIZE_URL);
// Pecah url menjadi elemen-elemen array url
			$url = explode('/', $url);
			return $url; 
		}
	}
	
}