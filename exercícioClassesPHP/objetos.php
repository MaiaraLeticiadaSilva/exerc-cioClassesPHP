<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style.css">
    <title>Document</title>
</head>
<body>
    <header>
        <h1>ORIENTAÇÃO À OBJETOS - PHP</h1>
    </header>
</body>
</html>
<?php
/**
 * Conecta os arquivos 'Engenheiro.php' e 'Medico.php', referentes às classes 'Engenheiro' e 'Medico'.
 */
require_once 'Engenheiro.php';
require_once 'Medico.php';

/**
 * Arquivo para setagem e impressão das informações requisitadas nas classes Pessoa, Engenheiro e Medico.
 * @author Maiara Silva
 * @access public 
 * @see Pessoa.php
 * @see Engenheiro.php
 * @see Medico.php
 * @return String
 * @return int
 */

 
/**
 * Setagem dos dados do Engenheiro.
 */
    $engenheiro= new Engenheiro;
    $engenheiro->setNome('Carolina Herreira Fernandes');
    $engenheiro->setData_nasc('14/09/1995');
    $engenheiro->setCpf('357.455.962-45');
    $engenheiro->setRg('5894522164');
    $engenheiro->setCrea('CREA/RS 855652');

/**
 * Setagem dos dados do Médico.
 */
    $medico= new Medico;
    $medico->setNome('Joaquim Bernardes de Costa Oliveira');
    $medico->setData_nasc('07/12/1997');
    $medico->setCpf('467.235.962-73');
    $medico->setRg('3554295287');
    $medico->setCrm('CRM/RS 684248');
    

/**
 * Impressão dos dados do Engenheiro.
 */
    echo "-----DADOS ENGENHEIRO-----";
    echo "<br>";
    echo $engenheiro->getNome();
    echo "<br>";
    echo $engenheiro->getData_nasc();
    echo "<br>";
    echo $engenheiro->getCpf();
    echo "<br>";
    echo $engenheiro->getRg();
    echo "<br>";
    echo $engenheiro->getCrea();
    echo "<br>";
    echo "<br>";

/**
 * Impressão dos dados do Médico.
 */
    echo "-----DADOS MÉDICO-----";
    echo "<br>";
    echo $medico->getNome();
    echo "<br>";
    echo $medico->getData_nasc();
    echo "<br>";
    echo $medico->getCpf();
    echo "<br>";
    echo $medico->getRg();
    echo "<br>";
    echo $medico->getCrm();
?>