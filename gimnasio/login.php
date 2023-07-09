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
    // Los datos son correctos, redirigir a la página deseada
    header("Location:http://localhost/gimnasio/index.php");
    exit();
} else {
    // Los datos son incorrectos, mostrar mensaje de error
    echo "";
}

$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
    <style>


h3{
            font-family: "Arial", sans-serif;
            position: absolute;
            margin-bottom: 800px;
         display:none;
            font-size: 90px;
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
            margin-bottom: 870px;
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
        height:400px;
        background-color: rgb(252, 255, 255);
        
        

      }
      form h2{
        font-size:35px;
        color:  #17143f;
        margin: 0;
      }

      form p{
        font-size:16px ;
        color: rgb(0, 0, 0);
        margin bottom: 35px;
        font-family: "Arial", sans-serif;

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
        margin-top:20px;
        

        

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

      .input-log{
        position:relative;
        align-items:center,;
        justify-content:center;
        width:20px;
        height:200px;
         margin-left: 150px;
         border-radius:5px;
         margin-top:2px; 
         display:none;
      }
      .error{
        position: absolute;
        top:50px;
        color: rgb(161, 25, 25);
        font-size: 20px;
        
       
     
      }
      a{
        display:inline-block;
        margin-right: 20px;
        float: left;
        margin-top: 30px;
        text-align:center;
        text-postion
    }

  
  

      
      @media(max-width:990px) {
       
        form{
        box-shadow: 0 0 10px rgb(12, 12, 12);
        padding: 50px 35px;
        border-radius:25px;
        display: flex;
        flex-direction:column;
        text-align: center;
        width:440px;
        height:500px;
        background-color: rgb(252, 255, 255);
        margin-bottom:190px;
        
        

      }

        .input-log{
        position:relative;
        display:flex;
        align-items:center,;
        justify-content:center;
        width:100px;
        height:80px;
         margin-left: 35%;
         border-radius:5px;
         margin-top:-14px;  
         margin-bottom: 10px;
      }
       h1{
        display:none;
      }
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
        #mi-h2 {
            display: none;
        }
        
        h3{
            margin-bottom: 850px;
            font-size:40px
        }

        a{
        display:inline-block;
        margin-right: 20px;
        float: left;
        margin-top:40px;
        text-align:center;
        margin-bottom:0px;
    }
}
      
       
  

    </style>
</head>
<body>
<h1 >Under-Presure</h1>

<form action="" method="POST">

<h2 id="mi-h2">Under-gym</h2>
<img class="input-log" src="images/loga.png" alt="">
<p>Ingresa tus datos aqui</p>



<div class="input-wrapper">
    <input type="email"name="email" placeholder="Email">
    <img class="input-icon" src="images/email.svg" alt="">

</div> 



 

<div class="input-wrapper">
    <input type="password"name="contraseña" placeholder="Contraseña">
    <img class="input-icon" src="images/password.svg" alt="">


   

</div> 
<input class="btn" type="submit" name="submit" value="ingresar">
<a href="papa">¿aun no te registraste?</a> 
<a href="mama">olvidaste tu contraseña?</a>

</form>



 </body>
 </html>



