<?php
/**
 *
 */
class Venda {

	private $id, $codTransacaoPagSeguro, $statusPagamento, $datahora, $statuspedido, $totalvenda, $fkcliente;

	function __construct($id, $codTransacaoPagSeguro, $statusPagamento, $datahora, $statuspedido, $totalvenda, $fkcliente) {
		$this -> id = $id;
		$this -> codTransacaoPagSeguro = $codTransacaoPagSeguro;
		$this -> statusPagamento = $statusPagamento;
		$this -> datahora = $datahora;
		$this -> statuspedido = $statuspedido;
		$this -> totalvenda = $totalvenda;
		$this -> fkcliente = $fkcliente;
	}

	public function setId($value = '') {
		$this -> id = $value;
	}

	public function getID() {
		return $this -> id;
	}

	public function setCodTransacaoPAGSEG($value = '') {
		$this -> codTransacaoPagSeguro = $value;
	}

	public function getCodTransacaoPAGSEG() {
		return $this -> codTransacaoPagSeguro;
	}

	public function setStatusPagamento($value = '') {
		$this -> statusPagamento = $value;
	}

	public function getStatusPagamento() {
		return $this -> statusPagamento;
	}

	public function setDataHora($value = '') {
		$this -> datahora = $value;
	}

	public function getDataHora() {
		return $this -> datahora;
	}

	public function setStatusPedido($value = '') {
		$this -> statuspedido = $value;
	}

	public function getStatusPedido() {
		return $this -> statuspedido;
	}

	public function setTotalVenda($value = '') {
		$this -> totalvenda = $value;
	}

	public function getTotalVenda() {
		return $this -> totalvenda;
	}

	public function setFkCliente($value = '') {
		$this -> fkcliente = $value;
	}

	public function getFkCliente() {
		return $this -> fkcliente;
	}

	//$id, $codTransacaoPagSeguro, $statusPagamento, $datahora, $statuspedido, $totalvenda, $fkcliente;
	public function __toString($value = '') {
		return 'Identificador: ' . $this -> getID() . '<br>' . 'Codigo de Transação do PagSeguro: ' . $this -> getCodTransacaoPAGSEG() . '<br>' .
		 'Status do Pagamento: ' . $this -> getStatusPagamento() . '<br>' . 'Data e Hora: ' . $this -> getDataHora() .
		  '<br>' . 'Status do Pedido: ' . $this -> getStatusPedido() . '<br>' . 'Valor Total de Venda: ' . $this -> getTotalVenda() . '<br>' . 
		  'Fk Cliente: ' . $this -> getFkCliente();
	}

}
?>