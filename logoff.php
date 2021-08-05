<?php   
    session_start();
    session_destroy();
    setcookie($_COOKIE['id'], '');
    setcookie($_COOKIE['nome'], '');
    setcookie($_COOKIE['email'], '');
    setcookie($_COOKIE['login'], false);
    header('location: index.php')
?>