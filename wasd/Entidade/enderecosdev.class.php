<?php
	/**
	 * 
	 */
	class EnderecosDev{
		
		private $id, $fkdesenvolvedor, $tipologradouro, $logradouro, $numero, $complemento, $cep, $cidade, $uf, $bairro;		
		
		function __construct($id, $fkdesenvolvedor, $tipologradouro, $logradouro, $numero, $complemento, $cep, $cidade, $uf, $bairro) {
			$this->id = $id;
			$this->$fkdesenvolvedor = $fkdesenvolvedor;
			$this->tipologradouro = $tipologradouro;
			$this->logradouro = $logradouro;
			$this->numero = $numero;
			$this->complemento = $complemento;
			$this->cep = $cep;
			$this->cidade = $cidade;
			$this->uf = $uf;
			$this->bairro = $bairro;
		}
		
		public function setId($value='')
		{
			$this->id = $value;
		}
		
		public function getId()
		{
			return $this->id;
		}
		
		public function setFkDesenvolvedor($value='')
		{
			$this->$fkdesenvolvedor = $value;
		}
		
		public function getFkDesenvolvedor()
		{
			return $this->$fkdesenvolvedor;
		}
		
		public function setTipoLogradouro($value='')
		{
			$this->tipologradouro = $value;
		}
		
		public function getTipoLogradouro()
		{
			return $this->tipologradouro;
		}
		
		public function setLogradouro($value='')
		{
			$this->logradouro = $value;
		}
		
		public function getLogradouro()
		{
			return $this->logradouro;
		}
		
		public function setNumero($value='')
		{
			$this->numero = $value;
		}
		
		public function getNumero()
		{
			return $this->numero;
		}
		
		public function setComplemento($value='')
		{
			$this->complemento = $value;
		}
		
		public function getComplemento()
		{
			return $this->complemento;
		}
		
		public function setCep($value='')
		{
			$this->cep = $value;
		}
		
		public function getCep()
		{
			return $this->cep;
		}
		
		public function setCidade($value='')
		{
			$this->cidade = $value;
		}
		
		public function getCidade()
		{
			return $this->cidade;
		}
		
		public function setUf($value='')
		{
			$this->uf = $value;
		}
		
		public function getUf()
		{
			return $this->uf;
		}
		
		public function setBairro($value='')
		{
			$this->bairro = $value;
		}
		
		public function getBairro()
		{
			return $this->bairro;
		}
		
		public function __toString()
		{
			return 'Identificador: '. $this->getId() . '<br>' . 'Desenvolvedor: ' . $this->getFkDesenvolvedor(). '<br>' . 'Tipo de Logradouro: ' . $this->getTipoLogradouro() . '<br>' .
			'Logradouro: ' . $this->getLogradouro() . '<br>' . 'Numero: ' . $this->getNumero() . '<br>' .'Complemento: ' . $this->getComplemento() . '<br>' . 'CEP: ' . $this->getCep() . '<br>'.
			'Cidade: ' . $this->getCidade() . '<br>' . 'UF: ' . $this->getUf() . '<br>' . 'Bairro: ' . $this->getBairro();
		}
	}
	
?>