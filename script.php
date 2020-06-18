<?php
/**
 * autor: Rubens Ciambarella
 * Data: 16/06/2020
 * Curso de PHP
 */

include "servicos/servicoMensagemSessao.php";
include "servicos/servicovalidacao.php";
include "servicos/servicoCategoriaCompetidor.php";

$nome = $_POST ['nome'];
$idade = $_POST ['idade'];

defineCategoriaCompetidor($nome, $idade);

header('location: index.php');

?>
