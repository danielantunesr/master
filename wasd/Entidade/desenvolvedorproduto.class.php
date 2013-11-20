<?php
/**
 *
 */
class DesenvolvedorProduto{

	private $id, $fkproduto, $fkdesenvolvedor;

	function __construct($id, $fkproduto, $fkdesenvolvedor) {
		$this->id=$id;
		$this->fkproduto=$fkproduto;
		$this->fkdesenvolvedor=$fkproduto;
	}
	
	public function setId($value='')
	{
		$this->id = $value;
	}
	
	public function getID()
	{
		return $this->id;
	}
	
	public function setFkProduto($value='')
	{
		$this->fkproduto = $value;
	}
	
	public function getFkProduto()
	{
		return $this->fkproduto;
	}
	
	public function setFkDesenvolvedor($value='')
	{
		$this->fkdesenvolvedor = $value;
	}
	
	public function getFkDesenvolvedor()
	{
		return $this->fkdesenvolvedor;
	}
	
	public function __ToString()
	{
		return 'Identificador: ' . $this->getID() . "<br>" . 'FK Produto: '. $this->getFkProduto(). "<br>" . 'FK Desenvolvedor: ' .
		$this->getFkDesenvolvedor();
	}
}
?>