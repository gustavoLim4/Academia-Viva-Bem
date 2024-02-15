<?php

$pagina = @$_GET['p'];

if ($pagina == '') {

    require_once('lista.php');
} else {

    if ($pagina == 'cadastrar') {

        require_once('cadastrar.php');
    };

    if ($pagina == 'atualizar') {

        require_once('atualizar.php');
    }

    if ($pagina == 'desativar') {

        require_once('desativar.php');
    }
}