<?php
/**
 *
 */
class Midia {

	private $idmidia, $endmidia, $tipomidia;

	function __construct($idmidia, $endmidia, $tipomidia) {
		$this -> idmidia = $idmidia;
		$this -> endmidia = $endmidia;
		$this -> tipomidia = $tipomidia;
	}

	public function setId($value = '') {
		$this -> idmidia = $value;
	}

	public function getId() {
		return $this -> idmidia;
	}

	public function setEnderecoMidia($value = '') {
		$this -> endmidia = $value;
	}

	public function getEnderecoMidia() {
		return $this -> endmidia;
	}

	public function setTipoMidia($value = '') {
		$this -> tipomidia = $value;
	}

	public function getTipoMidia() {
		return $this -> tipomidia;
	}
	
	public function __toString()
	{
		return 'Identificador: ' . $this->getId() . '<br>' . 'Endereco de Midia: ' . $this->endmidia . '<br>' .
		'Tipo de Midia: ' . $this->getTipoMidia();
	}

}
?>