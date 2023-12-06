<?php

        $hostname = "localhost:3306";
        $bancodedados = "istudyz";
        $usuario = "root";
        $senha  = "Joaopedro1909";
        
    try 
    {
        $conn= new PDO ("mysql:host=localhost;dbname=$bancodedados","$usuario","$senha");
    
        echo "deu certo";
    } catch (PDOException $e) {
        echo "deu erro";
    }

    $conn -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    ?>