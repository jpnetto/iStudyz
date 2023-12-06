<?php
    include('/xampp/htdocs/iStudyz/Model/banco.php');
    
    session_start(); 

    if(isset($_POST['id']))
    {   
        $senha=$_POST['senha'];
        $id=$_POST['id'];   

        $sql = $conn->prepare("select senha from Usuario where ID_Usuario=? limit 1");
        $sql->execute(array($id));
        $resul = $sql->fetchColumn();

        if(password_verify($senha,$resul))
        {
            $_SESSION['id'] = $id;
            header('Location: http://localhost/iStudyz/View/index.php');
        }
        else
        {
            echo ("<script> alert('Usuário ou senha inválida') </script>");
        }
    }
?>