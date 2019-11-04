<?php 
function sum($a,$b)
{
	return $a+$b;
}

function multiply($a,$b)
{
	return $a*$b;
}

/**
 * 
 */
class TestingController extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->library('unit_test');
	}

	function index()
	{
		$this->unit->run(sum(4,3),7,"Coba Penjumlahan");
		$this->unit->run(multiply(4,5),20,"Coba Perkalian");
		$this->load->view('tests');
	}
}

 ?>