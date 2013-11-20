<?php
/**
 *
 */
class Clientes {

	private $id, $nome, $dtcadastro, $login, $senha, $email, $dtnascto, $cpf, $rg, $fonefixo, $fonemovel;

	function __construct($id, $nome, $dtcadastro, $login, $senha, $email, $dtnascto, $cpf, $rg, $fonefixo, $fonemovel) {
		$this -> id = $id;
		$this -> nome = $nome;
		$this -> dtcadastro = $dtcadastro;
		$this -> login = $login;
		$this -> senha = $senha;
		$this -> email = $email;
		$this -> dtnascto = $dtnascto;
		$this -> cpf = $cpf;
		$this -> rg = $rg;
		$this -> fonefixo = $fonefixo;
		$this -> fonemovel = $fonemovel;
	}

	public function setId($value = '') {
		$this -> id = $value;
	}

	public function getId() {
		return $this ->id;
	}
	
	public function setNome($value = '') {
		$this -> nome = $value;
	}

	public function getNome() {
		return $this ->nome;
	}
	
	public function setDtCadastro($value = '') {
		$this -> dtcadastro = $value;
	}

	public function getDtCadastro() {
		return $this ->dtcadastro;
	}
	
	public function setLogin($value = '') {
		$this -> login = $value;
	}

	public function getLogin() {
		return $this ->login;
	}
	
	public function setSenha($value = '') {
		$this -> senha = $value;
	}

	public function getSenha() {
		return $this ->senha;
	}
	
	
	public function setEmail($value = '') {
		$this -> email = $value;
	}

	public function getEmail() {
		return $this ->email;
	}
	
	public function setDtNasc($value = '') {
		$this -> dtnascto = $value;
	}

	public function getDtNasc() {
		return $this ->dtnascto;
	}
	
	public function setCpf($value = '') {
		$this -> cpf = $value;
	}

	public function getCpf() {
		return $this ->cpf;
	}
	
	public function setRg($value = '') {
		$this -> rg = $value;
	}

	public function getRg() {
		return $this ->rg;
	}
	
	public function setFoneFixo($value = '') {
		$this -> fonefixo = $value;
	}

	public function getFoneFixo() {
		return $this ->fonefixo;
	}
	
	public function setFoneMovel($value = '') {
		$this -> fonemovel = $value;
	}

	public function getFoneMovel() {
		return $this ->fonemovel;
	}
	
	public function __toString()
	{
		return 'Identificador: ' . $this -> getId() . 'Nome: ' . '<br>' . $this -> getNome() . '<br>' . 'Data Cadastro: ' . $this -> getDtCadastro(). '<br>' . 
		'Login: ' . $this -> getLogin(). '<br>' . 'Senha: ' .$this -> getSenha(). '<br>' . 'Email: ' . $this -> getEmail(). '<br>' . 'Data de Nascimento: ' . $this -> getDtNasc(). '<br>'
		. 'CPF: ' . $this -> getCpf(). '<br>' . 'RG: ' . $this -> getRg(). '<br>' . 'Telefone Fixo: ' . $this -> getFoneFixo(). '<br>' . 'Telefone Móvel: ' . $this -> getFoneMovel(). '<br>'; 
	}
}
?>