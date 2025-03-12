<?php

#cabaeçalho
include 'header.php';

$pagina = $_GET['aaa'];

switch ($pagina) {

    case 'home': include 'view/home.php'; break;
    case 'contatos': include 'view/contacts.php'; break;
    default: include 'view/home.php';
    break;
}

#rodapé
include 'footer.php';