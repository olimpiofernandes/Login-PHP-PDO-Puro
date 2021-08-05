<?php
    include('config.php');
    session_start();
    if(isset($_POST['acao'])){

        $email = preg_replace('/[^[:alpha:]_]/', '',$_POST['email']); //tratamento contra sql injection p/ email 
        $senha = preg_replace('/[^[:alpha:]_]/', '',$_POST['senha']); //tratamento contra sql injection p/ senha

        $sql = $pdo->prepare("SELECT * FROM users WHERE email = ?");
        $sql->execute([$email]);

        if($sql->rowCount() == 1){
            $dataFull = $sql->fetch();

            if(password_verify($senha, $dataFull['password'])){
                setcookie('login', true);
                setcookie('nome', $dataFull['name']);
                setcookie('id', $dataFull['id']);
                setcookie('email', $dataFull['email']);
                $_SESSION['user_active'] = true;
                header("Location: home.php");
                die();
            }else{
                setcookie('data_verification', 'Senha Inválida!', time()+5);
                header('location: index.php');
            }

        }else{
            setcookie('data_verification', 'E-mail não encontrado!', time()+5);
            header('location: index.php');
        }
    }
?>