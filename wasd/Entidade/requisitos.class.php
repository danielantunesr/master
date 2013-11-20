<?php
/**
 *
 */
class Requisitos{

	private $id, $os, $memoriaram, $processador, $dispositivosgraf, $directx, $harddrive, $outrorequisito;

	function __construct($id, $os, $memoriaram, $processador, $dispositivosgraf, $directx, $harddrive, $outrorequisito) {
		$this->id = $id;
		$this->os = $os;
		$this->memoriaram = $memoriaram;
		$this->processador = $processador;
		$this->dispositivosgraf = $dispositivosgraf;
		$this->directx = $directx;
		$this->harddrive = $harddrive;
		$this->outrorequisito = $outrorequisito;
	}
	
	public function setId($value='')
	{
		$this->id = $value;
	}
	
	public function getID()
	{
		return $this->id;
	}
	
	public function setOs($value='')
	{
		$this->os = $value;
	}
	
	public function getOs()
	{
		return $this->os;
	}
	
	public function setMemoriaRam($value='')
	{
		$this->memoriaram = $value;
	}
	
	public function getMemoriaRam()
	{
		return $this->memoriaram;
	}
	
	public function setProcessador($value='')
	{
		$this->processador = $value;
	}
	
	public function getProcessador()
	{
		return $this->processador;
	}
	
	public function setDispositivosGraficos($value='')
	{
		$this->dispositivosgraf = $value;
	}
	
	public function getDispositivosGraficos()
	{
		return $this->dispositivosgraf;
	}
	
	public function setDirectX($value='')
	{
		$this->directx = $value;
	}
	
	public function getDirectX()
	{
		return $this->directx;
	}
	
	public function setHardDrive($value='')
	{
		$this->harddrive = $value;
	}
	
	public function getHardDrive()
	{
		return $this->harddrive;
	}
	
	public function setOutroRequisito($value='')
	{
		$this->outrorequisito = $value;
	}
	
	public function getOutroRequisito()
	{
		return $this->outrorequisito;
	}
			
	public function __toString()
	{
		return 'Identificador' . $this->getID(). "<br>" . 'Sistema Operacional: ' . $this->getOs() . "<br>" . 'Memoria Ram: ' . $this->getMemoriaRam(). "<br>".
		'Processador: ' . $this->getProcessador() . "<br>" . 'Dispositivo(s) Gráfico(s): ' . $this->getDispositivosGraficos() . "<br>" . 'DirectX: ' . $this->getDirectX(). "<br>" .
		'Outro(s) Requisito(s): ' . $this->getOutroRequisito();
	}	
}
?>