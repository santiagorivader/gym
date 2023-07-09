<?php
ini_set('display_errors', 0);
error_reporting(0);
// Configuración de la base de datos
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "registro";

// Conexión a la base de datos
$conn = new mysqli($servername, $username, $password, $dbname);


if ($conn->connect_error) {
    die("Error de conexión a la base de datos: " . $conn->connect_error);
}


$Email = $_POST['email'];
$Contraseña = $_POST['contraseña'];


$sql = "SELECT * FROM datos WHERE email = '$Email' AND contraseña = '$Contraseña'";
$resultado = $conn->query($sql);

if ($resultado->num_rows > 0) {
    
    echo "";
} else {
   
    echo "Nombre de usuario o contraseña incorrectos";
}



$conn->close();



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  

    <title>registro</title>
    <style>
        h3{
            font-family: "Arial", sans-serif;
            position: absolute;
            margin-bottom: 600px;
            font-size: 80px;
            color: #17143f;
            text-shadow: 2px 2px 4px rgb(240, 247, 255);
            
            transform: skew(-10deg);
        }
       h1{
      /*font-family: "Arial", sans-serif;
            font-size: 36px;
            font-weight: bold;
            color: #17143f;
            position: absolute;
            margin-bottom: 950px;
            font-size: 130px;*/
            font-family: "Arial", sans-serif;
            position: absolute;
            margin-bottom: 950px;
            font-size: 130px;
            color: #17143f;
            text-shadow: 2px 2px 4px rgb(240, 247, 255);
            
            transform: skew(-10deg);
     }
      body{
        box-sizing: border-box;
        font-family:Arial;
        display: flex;
        justify-content: center;
        align-items:  center;
        min-height: 100vh;
        background: linear-gradient(
            30deg,
            rgb(12, 12, 12)25%,
         rgb(252, 252, 252)100%); 

      }
      form{
        box-shadow: 0 0 10px rgb(12, 12, 12);
        padding: 50px 35px;
        border-radius:25px;
        display: flex;
        flex-direction:column;
        text-align: center;
        width:440px;
        background-color: rgb(252, 255, 255);
        
        

      }
      form h2{
        font-size:35px;
        color: rgb(50, 49, 53);
        margin: 0;
      }

      form p{
        font-size:16px ;
        color: rgb(0, 0, 0);
        margin bottom: 35px;

      }

      .input-wrapper{
        position: relative;
        width: 385px;
        margin-bottom: 25px;
        color: rgb(255, 255, 255);

      }
      input{
        color:black;
        padding: 20px 15px 20px 60px;
        width: 100%;
        border-radius: 25px;
        border: 0;
        box-shadow: 0 0 10px rgb(50, 49, 53);
        outline: none;
        font-size: 12px;
      }
      input::placeholder{
        font-size: 16px;
        color:rgb(100, 100, 107)
      }
      .input-icon{
        position:absolute;
        height: 30px;
        width: 30px;
        left: 20px;
        top: 26%;
        transform: translate(-55%);
      }
    
      .btn{
        padding: 20px;
        background: linear-gradient(
            30deg,
         rgb(10, 10, 10)25%,
         rgb(255, 255, 255)100%);
         box-shadow: 0 0 10px rgb(12, 12, 12);
         text-transform: uppercase;
         text-align: center;
         font-size: 20x;
        cursor: pointer;
        

        

      }
      .btn:hover{
        background: linear-gradient(
            30deg,
         rgb(49, 14, 95)25%,
         rgb(20, 14, 14)100%);
         box-shadow: 0 0 10px rgb(12, 12, 12);
      }
      .sucess{
        position: absolute;
        top:50px;
        color: rgb(87, 189, 87);
        font-size: 20px;

      }

    
      .error{
        position: absolute;
        top:50px;
        color: rgb(161, 25, 25);
        font-size: 20px;
        
      }
      @media(max-width:990px) {
        body{
            padding: 10px;
            
        }
        font{
            padding: 20px;
            width: 100%;
        }
        .input-wrapper{
            position: relative;
            width: 80%;
            margin-bottom: 35px;
        }
        input{
            padding:20px 0 20px 45px;
        }
        .input-icon{
           height: 20px;
           width: 20px;
        }
        h1{
          font-size:small;
        }
         h3{
            margin-bottom: 700px;
            font-size:40px
        }
        
      }
      
       
  

    </style>
</head>
<body>
<h1>Under-Presure</h1>
<h3>bienvenido</h3>

<form action="" method="POST">
<h2>Under-gym</h2>
<p>Ingresa tus datos aqui para formar parte de esta familia</p>



<div class="input-wrapper">
    <input type="email"name="email" placeholder="Email">
    <img class="input-icon" src="images/email.svg" alt="">

</div> 








<div class="input-wrapper">
    <input type="password"name="contraseña" placeholder="Contraseña">
    <img class="input-icon" src="images/password.svg" alt="">


   

</div> 
<input class="btn" type="submit" name="submit" value="AGREGAR">

</form>



 </body>
 </html>



