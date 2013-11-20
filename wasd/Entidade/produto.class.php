<?php
/**
 *
 */
class Produto {
	private $id, $nome, $descricao, $dataLan, $precounitario, $distribuidora, $idiomas, $modosdejogo, $censura, $genero, $lucro, $quantidadetotal, $fkrequisitos, $fkmidia, $chaves_idchaves;

	function __construct($id, $nome, $descricao, $dataLan, $precounitario, $distribuidora, $idiomas, $modosdejogo, $censura, $genero, $lucro, $quantidadetotal, $fkrequisitos, $fkmidia, $chaves_idchaves) {
		$this -> id = $id;
		$this -> nome = $nome;
		$this -> descricao = $descricao;
		$this -> dataLan = $dataLan;
		$this -> precounitario = $precounitario;
		$this -> distribuidora = $distribuidora;
		$this -> idiomas = $idiomas;
		$this -> modosdejogo = $modosdejogo;
		$this -> censura = $censura;
		$this -> genero = $genero;
		$this -> lucro = $lucro;
		$this -> quantidadetotal = $quantidadetotal;
		$this -> fkrequisitos = $fkrequisitos;
		$this -> fkmidia = $fkmidia;
		$this -> chaves_idchaves = $chaves_idchaves;
	}

	public function __toString()
	{
		return 'Identificador: ' . $this -> getID() . '<br>' . 'Nome: ' . $this -> getNome() . '<br>' .
		'Data de Lançamento: ' . $this -> getDataLancamento() . '<br>' . 'Preço Unitário: ' . 
		$this -> getPrecoUnitario() . '<br>' . 'Distribuidora: ' . $this -> getDistribuidora() . '<br>' . 
		'Idiomas disponíveis: ' . $this -> getIdiomas() . '<br>' . 'Modos de Jogo: ' . $this -> getModosDeJogo() .
		'<br>' . 'Censura: ' . $this -> getCensura() . '<br>' . 'Gênero: ' . $this -> getGênero() . '<br>' . 
		'Lucro: ' . $this -> getLucro() . '<br>' . 'Total de Produtos Disponíveis: ' . $this -> getQuantidadeTotal(). 
		'<br>' . 'FK Requisitos: ' . $this -> getFkRequisitos(). '<br>' . 'FK Midia: ' . $this -> getFkMidia(). 
		'<br>' . 'FK Chaves: ' . $this -> getFkChaves();
	}
	
	public function setId($value = '') {
		$this -> id = $value;
	}

	public function getID() {
		return $this -> id;
	}

	public function setNome($value = '') {
		$this -> nome = $value;
	}

	public function getNome() {
		return $this -> nome;
	}

	public function setDescricao($value = '') {
		$this -> descricao = $value;
	}

	public function getDescricao() {
		return $this -> descricao;
	}

	public function setDataLancamento($value = '') {
		$this -> dataLan = $value;
	}

	public function getDataLancamento() {
		return $this -> dataLan;
	}

	public function setPrecoUnitario($value = '') {
		$this -> precounitario = $value;
	}

	public function getPrecoUnitario() {
		return $this -> precounitario;
	}

	public function setDistribuidora($value = '') {
		$this -> distribuidora = $value;
	}

	public function getDistribuidora() {
		return $this -> distribuidora;
	}

	public function setIdiomas($value = '') {
		$this -> idiomas = $value;
	}

	public function getIdiomas() {
		return $this -> idiomas;
	}

	public function setModosDeJogo($value = '') {
		$this -> modosdejogo = $value;
	}

	public function getModosDeJogo() {
		return $this -> modosdejogo;
	}

	public function setCensura($value = '') {
		$this -> censura = $value;
	}

	public function getCensura() {
		return $this -> censura;
	}

	public function setGenero($value = '') {
		$this -> genero = $value;
	}

	public function getGenero() {
		return $this -> genero;
	}

	public function setLucro($value = '') {
		$this -> lucro = $value;
	}

	public function getLucro() {
		return $this -> lucro;
	}

	public function setQuantidadeTotal($value = '') {
		$this -> quantidadetotal = $value;
	}

	public function getQuantidadeTotal() {
		return $this -> quantidadetotal;
	}

	public function setFkRequisitos($value = '') {
		$this -> fkrequisitos = $value;
	}

	public function getFkRequisitos() {
		return $this -> fkrequisitos;
	}

	public function setFkMidia($value = '') {
		$this -> fkmidia = $value;
	}

	public function getFkMidia() {
		return $this -> fkmidia;
	}

	public function setFkChaves($value = '') {
		$this -> chaves_idchaves = $value;
	}

	public function getFkChaves() {
		return $this -> chaves_idchaves;
	}

}
?>