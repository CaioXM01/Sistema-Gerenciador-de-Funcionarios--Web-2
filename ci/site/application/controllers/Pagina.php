<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pagina extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->helper('url');
	}

	public function index()
	{
		$dados['titulo']='Sistema Gerenciador de Funcionarios';
		$this->load->view('login', $dados);
	}

	public function registrar()
	{
		$dados['titulo']='SGF - Registrar ';
		$this->load->view('registrar', $dados);
	}

	public function cadastrarF()
	{
		$dados['titulo']= 'SGF - Novo Funcionário';
		$dados['nome_pag']= 'Cadastrar';
		$dados['sub_nome_pag']= 'Funcionário';
		$this->load->view('cadastrarF', $dados,$dados,$dados);
	}

	public function principal()
	{
		$dados['titulo']= 'SGF - Principal';
		$dados['nome_pag']= 'Gerênciador';
		$dados['sub_nome_pag']= 'Funcionário';
		$this->load->view('principal', $dados,$dados,$dados);
	}
}
