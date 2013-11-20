<?php
/**
 *
 */
class VendaProduto{

	private $id;
	private $quantidade;
	private $valoritem;
	private $valortotalitem;
	private $fkvenda;
	private $fkproduto;
	
	function __construct($id, $quantidade, $valoritem, $valortotalitem, $fkvenda, $fkproduto) {
		$this->id = $id;
		$this->quantidade = $quantidade;
		$this->valoritem = $valoritem;
		$this->valortotalitem = $valortotalitem;
		$this->fkvenda = $fkvenda;
		$this->fkproduto = $fkproduto;
	}
	
	public function setId($value='')
	{
		$this->id = $value;
	}
	
	public function getID()
	{
		return $this->id;
	}
	
	public function setQuantidade($value='')
	{
		$this->quantidade = $value;
	}
	
	public function getQuantidade()
	{
		return $this->quantidade;
	}
	
	public function setValorItem($value='')
	{
		$this->valoritem = $value;
	}
	
	public function getValorItem()
	{
		return $this->valoritem;
	}
	
	public function setValorTotalItem($value='')
	{
		$this->valortotalitem = $value;
	}
	
	public function getValorTotalItem()
	{
		return $this->valortotalitem;
	}
	
	public function setFkVenda($value='')
	{
		$this->fkvenda = $value;
	}
	
	public function getFkVenda()
	{
		return $this->fkvenda;
	}
	
	public function setFkProduto($value='')
	{
		$this->fkproduto = $value;
	}
	
	public function getFkProduto()
	{
		return $this->fkProduto;
	}
	
	public function __toString()
	{
		return 'Identificador: ' . $this->getID(). '<br>' . 'Quantidade: ' . $this->getQuantidade() . '<br>' . 'Valor do Item: ' .
		$this->valoritem . '<br>' . 'Valor Total do Item: '. $this->valortotalitem . '<br>' . 'Fk Venda: ' . $this->getFkVenda() . '<br>' .
		'Fk Produto: ' . $this->getFkProduto();
	}
}
?>