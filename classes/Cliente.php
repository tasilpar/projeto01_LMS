<?php
class Cliente
{
	private $nome = '';
	private $cpf = '';
	
	function __construct($cpf,$nome)
	{
		$this->nome = $nome;
		$this->cpf  = $cpf;
	}

	function getNome(){
		return $this->nome;
	}
	function getCPF(){
		return $this->cpf;
	}


}
?>

