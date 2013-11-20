<?php
/**
 * 
 */
class Estoque{
	
	private $idestoque, $fkproduto, $movproduto, $quantidade, $datahora;
	
	function __construct($idestoque, $fkproduto, $movproduto, $quantidade, $datahora) {
		$this->idestoque = $idestoque;
		$this->fkproduto = $fkproduto;
		$this->movproduto = $movproduto;
		$this->quantidade = $quantidade;
		$this->datahora = $datahora;
	}
	
	public function setIdEstoque($value='')
	{
		$this->idestoque = $value;
	}
	
	public function getIdEstoque()
	{
		return $this->idestoque;
	}
	
	public function setFkProduto($value='')
	{
		$this->fkproduto = $value;
	}
	
	public function getFkProduto()
	{
		return $this->fkproduto;
	}
	
	public function setMovProduto($value='')
	{
		$this->movproduto = $value;
	}
	
	public function getMovProduto()
	{
		return $this->movproduto;
	}
	
	public function setQuantidade($value='')
	{
		$this->quantidade = $value;
	}
	
	public function getQuantidade()
	{
		return $this->quantidade;
	}
	
	public function setDataHora($value='')
	{
		$this->datahora = $value;
	}
	
	public function getDataHora()
	{
		return $this->datahora;
	}
	
	public function __toString()
	{
	return 'Identificador: ' . $this->getIdEstoque() . "<br>" . 'FK Produto: ' . $this->getFkProduto() . "<br>" . 
	'Movimetacao(E/S): ' . $this->getMovProduto(). "<br>" . 'Quantidade: ' . $this->getQuantidade(). '<br>' . 
	'Data e Hora: '. $this->getDataHora();	
	}
}

?>