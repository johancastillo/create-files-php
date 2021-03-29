<?php

    if(isset($_POST["username"]) && isset($_POST["password"])){
        
        $username = $_POST["username"];
        $password = $_POST["password"];

        
        $archivo = fopen("data.txt", "w+b");

        if(!$archivo){
            echo "<h1>Error al crear el archivo</h1>";
        }else{
            fwrite($archivo, "New user\r\n");
            fwrite($archivo, "Username: ".$username."\r\n");
            fwrite($archivo, "Password: ".$password);


            fflush($archivo);
        }

        //Cerrar el archivo
        fclose($archivo);
    }
