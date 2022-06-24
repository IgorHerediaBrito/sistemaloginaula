<?php
    $email = $_POST['email'];
    $senha = $_POST['password'];

    function conexao(){
        $con = mysqli_connect("localhost", "root", "c108", "aula08");
        if(!$con){
            echo "Falha na conexão";
        }
        else{
            echo "Conexão realizada com sucesso!";
        }
        return $con;
    }

    $mysqli = conexao();

    $res=$mysqli->query("SELECT * FROM usuario WHERE email='".$_POST['email']."' AND senha= '".md5($_POST['password'])."'");
    $usuarios;
    $usuario;

    if($res->num_rows>0){
        while($usuario=$res->ferch_array(MYSQLI_ASSOC)){
            $usuarios[]= $usuario;
        }
    }   
    var_dump($res);
    
?>