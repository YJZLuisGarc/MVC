<?php
    require ('helpers.php');
    require ('clases/usuario.php');
    require('bd/bd.php');
    require('./template/header.php');
    require('./template/menu.php');

    if(empty($_GET['url']))
        $_GET['url']='home';

    controller($_GET['url']);

    require('./template/footer.php');