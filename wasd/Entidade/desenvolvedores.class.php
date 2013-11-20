<?php
/**
 * 
 */
class Desenvolvedores{
	
	private $id, $nome, $email, $cliente_desde, $site;
	
	function __construct($id, $nome, $email, $cliente_desde, $site) {
		$this->id = $id;
		$this->nome = $nome;
		$this->email = $nome;
		$this->cliente_desde = $cliente_desde;
		$this->site = $site;
	}
	
	public function setId($value='')
	{
		$this->id = $value;
	}
	
	public function getID()
	{
		return $this->id;
	}
	
	public function setNome($value='')
	{
		$this->nome = $value;
	}
	
	public function getNome()
	{
		return $this->nome;
	}
	
	public function setEmail($value='')
	{
		$this->email = $value;
	}
	
	public function getEmail()
	{
		return $this->email;
	}
	
	public function setClienteDesde($value='')
	{
		$this->cliente_desde = $value;
	}
	
	public function getClienteDesde()
	{
		return $this->cliente_desde;
	}
	
	public function setSite($value='')
	{
		$this->site = $value;
	}
	
	public function getSite()
	{
		return $this->site;
	}
	
	public function __toString()
	{
		return 'Identificador: ' . $this -> getId() . '<br>' . 'Nome: ' . $this -> getNome() . '<br>' . 'Email: ' . $this->getEmail() .
		'<br>' . 'Cliente desde: ' . $this->getClienteDesde(). '<br>' . 'Site: ' . $this->getSite(); 
	}
	
	
	
	
}

?>