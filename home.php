<?php
session_start();

if(isset($_COOKIE['id']) && isset($_SESSION['user_active']) && $_SESSION['user_active'] == true){

    echo 'bem vindo '.$_COOKIE['nome'] . "<br/><br/>";
    
    echo '<a href="logoff.php">Sair</a>';

}else{
    header('location: index.php');
} 

?>