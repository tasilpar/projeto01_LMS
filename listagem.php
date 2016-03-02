<!DOCTYPE html>
<html lang="pt-br">
<?php
require_once "classes/Cliente.php";

$cliente01 = new Cliente('05005626603', 'Tadeu');
$cliente02 = new Cliente('05005626604', 'Ana');
$cliente03 = new Cliente('05005626605', 'Luiza');
$cliente04 = new Cliente('05005626606', 'Marta');
$cliente05 = new Cliente('05005626607', 'Joana');
$cliente06 = new Cliente('05005626608', 'Celia');
$cliente07 = new Cliente('05005626609', 'Roberto');
$cliente08 = new Cliente('05005626610', 'Mauro');
$cliente09 = new Cliente('05005626611', 'Mario');
$cliente10 = new Cliente('05005626612', 'Jose');


$aClientes[0] = $cliente01;
$aClientes[1] = $cliente02;
$aClientes[2] = $cliente03;
$aClientes[3] = $cliente04;
$aClientes[4] = $cliente05;
$aClientes[5] = $cliente06;
$aClientes[6] = $cliente07;
$aClientes[7] = $cliente08;
$aClientes[8] = $cliente09;
$aClientes[9] = $cliente10;
?>

<head>
    <meta charset="UTF-8">
    <title>Primeiro Exercicio - Orientação a objetos</title>
    <link rel="stylesheet"  href="bootstrap-3.3.6-dist/css/bootstrap.css">
    <link rel="stylesheet"  href="bootstrap-3.3.6-dist/css/bootstrap-theme.css">
    <script type="text/javascript" src="js/jquery-1.12.1.min.js"></script>
	<script type="text/javascript" src="bootstrap-3.3.6-dist/js/bootstrap.js"></script>
</head>
<body>
<div class="container">
<div class="row">
<h1>Listagem de Clientes</h1>
<span><a href="listagem.php">CPF - crescente</a></span> |
<span><a href="listagem.php?ordem=2">CPF - Decrescente</a></span>
<hr>
</div>
<div class="row">
<?php //var_dump($aClientes);?>
<table class="table">
    <tr>
        <th>CPF</th>
        <th>Nome</th>
    </tr>
    <?php
	
    if(!isset($_GET['ordem']))
    {
      for($i=0;$i < 9; $i++)
      {

        echo "<tr>";
        echo "<td>".$aClientes[$i]->getCPF()."</td>";
        echo "<td>".$aClientes[$i]->getNome()."</td>";
      }
    }
    else
    {
	    //echo "entrei aqui" ;
        for($i=9;$i > 0; $i--)
        {
            echo "<tr>";
            echo "<td>".$aClientes[$i]->getCPF()."</td>";
            echo "<td>".$aClientes[$i]->getNome()."</td></tr>";
        }
    }
    ?>
	</div>
</table>
</div>
</body>
</html>