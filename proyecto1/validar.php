<?php
$error;
if(!empty($_POST['usuario']) && !empty($_POST['contraseña'])){
   
    $usuario = $_POST['usuario'];
   $contraseña = $_POST['contraseña'];
   if($usuario == 'cliente' && $contraseña == '123'){
        $error = "OK";

        //echo "accedio como cliente";
        ob_start();
        header("location: cliente.php");
        ob_end_flush();
        exit();

   } if($usuario == 'admin' && $contraseña == 'asd'){
    $error = "OK";

    //echo "accedio como administracion";
    ob_start();
    header("location: admin.php");
    ob_end_flush();
    exit();
} else{
    $error = "error";
    ob_start();
    header("location: error.php");
    ob_end_flush();
    exit();
    
}

    
}

?>