<?php
	/**
	 * 
	 */
	class Chaves{
		
		private $idchaves;
		private $chave;
		
		function __construct($idchaves, $chave) {
			 $this ->idchaves = $idchaves;
			 $this ->chave = $chave;
		}
		
		public function setIdChaves($value='')
		{
			$this->idchaves = $value;
		}
		
		public function getIdChaves()
		{
			return $this->idchaves;
		}
		
		public function setChave($value='')
		{
			$this->chave = $value;
		}
		
		public function getChave()
		{
			return $this->chave;
		}
		
		public function __toString()
		{
			return 'Identificador: ' . $this->getIdChaves() . '<br>'. 'Chave: ' . $this->getChave();						
		}
	}
	
?>