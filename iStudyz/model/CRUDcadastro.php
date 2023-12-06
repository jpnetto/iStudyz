<?php
include("/xampp/htdocs/iStudyz/model/banco.php");
include("/xampp/htdocs/iStudyz/controller/phpoo.php");

try {
    $conn= new PDO ("mysql:host=localhost;dbname=$bancodedados","$usuario","$senha");

    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  
    $id = $_POST['person'];
    $email = $_POST['mail'];
    $senha = password_hash($_POST['senha'], PASSWORD_DEFAULT);

  

    $sql = "INSERT INTO Usuario (ID_Usuario, senha, email, nome)
    VALUES ('$id', '$senha', '$email', ' ')";

    $conn->exec($sql);
    echo "Cadastro feito!";

    $to = $email;
    $subject = "Cadastro concluído";
    $message = "Usuário $nome,\n\nSeu cadastro foi feito na plataforma iStudyz.";
    $headers = "E-Mail: equipe@istudyz.com";

    mail($to, $subject, $message, $headers);
    
    header('Location: http://localhost/iStudyz/view/index.php');

  } catch(PDOException $e) {
    echo $sql . "<br>" . $e->getMessage();
  }
  
  $conn = null;
?>