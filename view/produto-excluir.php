<?php
/**
 * Created by PhpStorm.
 * User: marco
 * Date: 23/02/2018
 * Time: 22:45
 */
include '../vendor/autoload.php';
$p = new \App\Model\Produto();
$p->setId($_GET["id"]);

$pDAO = new \App\DAO\ProdutoDAO();
if ($pDAO->excluir($p))
    header("Location:produto-pesquisar.php?msg=1");