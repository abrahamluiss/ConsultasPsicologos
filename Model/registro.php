<?php
    include("conexion.php"); 
    //print_r($_POST);
    if(isset($_POST['register'])){
        $nombres = $_POST['txtNombre'];
        $apellidos = $_POST['txtApellido'];
        $email = $_POST['email'];
        $telefono = $_POST['txtTel'];
        $experiencia = $_POST['CboExperiencia'];
        $formacad =   $_POST['CboFormAcadem'];
        $especialidad = $_POST['CboEspecialidad'];
        
        $consulta = "INSERT INTO psicologos (nombres, apellidos, email, telefono, experiencia,fomracadem,especialidad) VALUES ('$nombres', '$apellidos', '$email' , '$telefono', '$experiencia', '$formacad', '$especialidad')";
        $resultado = mysqli_query($conex, $consulta);
        if ($resultado) {
            echo'<script type="text/javascript"> 
            alert("Guardado"); 
            window.location.href="../View/registro.html"; 
            </script>';
            
            //header("Location: ../View/registro.html");


        } else {

            echo '<h6> ¡Ups ha ocurrido un error!</h3>';

        }
    }
    
    
?>