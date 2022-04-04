<?php
    $servidor = "localhost";
    $usuario = "u735944218_root";
    $clave = "Megusta122022$";
    $baseDeDatos = "u735944218_registro";

    $enlace = mysqli_connect($servidor,$usuario,$clave,$baseDeDatos);

    if(!$enlace){ echo "error server"; 
    }else{ echo "enviado"; }

?>

<?php
$email = 'firstlast11@gmail.com';
function validateEmail($email) {
    $regex = "/^([a-zA-Z0-9\.]+@+[a-zA-Z]+(\.)+[a-zA-Z]{2,3})$/'";
    echo preg_match($regex, $email) ? "The email is valid"."<br>" :"The email is not valid";
}
validateEmail($email);
     
     if(isset($_POST['contacto'])){
         $id = rand (1,99);
         $name =$_POST["name"];  
         $email =$_POST["email"];
         $message =$_POST["message"];

         $insertarDatos =  "INSERT INTO u735944218_registro	 VALUE('$id','$name','$email','$message')";

         $ejecutarInsert = mysqli_query($enlace,$insertarDatos);

         if(!$ejecutarInsert){
             echo "error";
         }else{ echo "enviado"; header("Location: https://fabriciocamejo.online/");}
     }


?>


