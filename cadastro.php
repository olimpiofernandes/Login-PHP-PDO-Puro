<?php
    include('config.php');
    if(isset($_POST['acao'])){

        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $senha = $_POST['senha'];
        $db_senha = password_hash($senha, PASSWORD_DEFAULT); //  transforma a senha em uma hash de 72 caracteres

        try{

            $sql = $pdo->prepare("INSERT INTO users (name, email, password) VALUES (:nome, :email, :senha)");
            $sql->bindParam(':nome', $nome);
            $sql->bindParam(':email', $email);
            $sql->bindParam(':senha', $db_senha);
            $sql->execute();
            setcookie('confirm_register', 'Faça login para confirmar o cadastro!', time()+5);
            header('location: index.php');
        } catch(PDOException $e) {
            //echo $e->getMessage();
            setcookie('erro_register', 'Ocorreu um erro durante seu cadastro, tente novamente!', time()+5);
            header('location: cadastrar.php');
        }
    }
?>