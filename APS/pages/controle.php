<?php

class Sensor
{
	private $portaSerial;

	public function __construct($porta)
	{
		$this->portaSerial = $porta;
	}

	public function getSerial()
	{
		global $receberValor;

		exec("MODE {$this->portaSerial} BAUD=9600 PARITY=n DATA=8 XON=on STOP=1");

		$abrirSensor = fopen($this->portaSerial, 'r');

		$receberValor = fgets($abrirSensor);

		fclose($abrirSensor);
	}
	public function getUmidade()
	{
		global $receberValor;

		$parte = explode("|", $receberValor);

		return $umidade = $parte[0];
	}
	public function getTemperatura()
	{
		global $receberValor;

		$parte = explode("|", $receberValor);

		return $temperatura = $parte[1];
		$varClimatica = $parte[2];
	}
	public function getVarClimatica()
	{
		global $receberValor;

		$parte = explode("|", $receberValor);

		return $varClimatica = $parte[2];
	}
}

$s1 = new Sensor("COM4");
echo $s1->getSerial();

?>