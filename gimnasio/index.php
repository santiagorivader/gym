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
    <title>index</title>
    <style>

h4{
    color:white;
}
a{
    color:white;
}
:root {
      --color: #17143f;
      --black: #000000;
      --very-light-pink: #C7C7C7;
      --text-input-field: #F7F7F7;
      --hospital-green: #ACD9B2;
      --sm: 14px;
      --md: 16px;
      --lg: 18px;
    }
      .card {
            width: 300px;
            border: 1px solid #ccc;
            padding: 10px;
            box-shadow: 0 0 5px rgba(0, 0, 0, 0.3);
      
          
          
            
        }

        .card {
            width: 100%;
            height: 200px;
            overflow: hidden;
        }

        .card img {
            width: 398px;
            height: 265px;
            object-fit: cover;
        }

        .card-content {
            padding: 10px 0;
        }

   
    body {
      margin: 0;
      font-family: 'Quicksand', sans-serif;
      background-image: url('https://images.pexels.com/photos/3826435/pexels-photo-3826435.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1');
            background-size: cover;
            background-repeat: no-repeat;
            }

      

      .menu{
        display: none;
      }
      .logo{
        width: 100px;
      }
      .navbar-left ul, .navbar-right ul{
        list-style: none;
        padding: 0;
        margin: 0;
        display: flex;
        align-items: center;
        
       
        
      }
      .navbar-left{
        display: flex;
        margin-left: 12px;
      }

      .navbar-left ul{
        display: flex;
        margin-left: 12px; }
      nav{
        display: flex;
        justify-content: space-between;
        padding: 0 24px;
        margin-top: 12px;
        border-bottom: 1px solid var(--very-light-pink);
        position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            padding: 10px;
        
        
    
      }
      .navbar-left ul li a, .navbar-right ul li a {
        text-decoration: none;
        color:white;
        border: 1px solid var(--white);
        border-radius: 8px;
        padding: 15px;
        height: 60px;
      }

      .navbar-left ul li a:hover, 
      .navbar-right ul li a:hover{
        text-decoration: none;
       
        border: 1px solid var(--color);
        color: var(--color);
        
      }
      .N-email{
        color: var(--very-light-pink);
        font-size: var(--sm);
        margin-right: 12px;
      }
      
     
      .navbar-shoping-cart{
        position: relative;
      }
      
      .navbar-shoping-cart div{
        width: 16px;
        height: 16px;
        background-color: var(--hospital-green);
        border-radius: 50%;
        font-size: var(--md);
        font-weight: bold;
        position:absolute;
        top: -6px;
        right: -3px;
        display: flex;
        justify-content: center;
        align-items: center;
    }
     @media (max-width:640px){
        body{
            background-image: url('https://images.pexels.com/photos/669576/pexels-photo-669576.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1');
         
            background-repeat: no-repeat;
            background-position: center;
            margin-top:1000px;
            
        }
        
        .menu{
            display: block; }
       
            .navbar-left ul{
                display: none;

        }

        .N-email{
            display: none;
        }
        .logo{
            width: 35px;
        height: 50px;
        margin-right:15px;
        }
    }
      
      
       
  

    </style>
</head>
<body>

<body>
    <nav>
        <img src="./images/icon_menu.svg" alt="menu"class="menu">

        <div class="navbar-left">
            <img src="./images/loga.png" alt="logo" class="logo">
            <ul>
            <li><a href="">Menu</a></li>

                <li><a href="">Plan nutricional</a></li>
                
                <li><a href="">Rutina</a></li>
                
                <li><a href="">Logbook</a></li>
                

                <li><a href="">contacto</a></li>
            </ul>
        </div>
        
      
                
         
        </div>
      
    </nav>
    

    <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>

 
  
       <div class="container"style="width: 100%;
  max-width: 1200%;
  height: 1080PX;
  display: flex;
  flex-wrap: wrap;
  justify-content: center;
  margin: auto;
     
     background-repeat:no-repeat;
background-size: 100% 1080px;">
   
   
    

       

           <div class="card"style="width: 400px;
  height: 400px;
  border-radius: 8px;
  box-shadow: 0 2px 2px white;
  overflow: hidden;
  margin: 20px;
  text-align: center;
  transition:all 0,25;">

             <img src="https://images.pexels.com/photos/2611817/pexels-photo-2611817.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1">
              <h4>¿Que como hoy?</h4>
     
             
             <p></p>
                <a href="#">haz clic aqui</a>
             
         </div>

           <div class="card"style="width: 400px;
  height: 400px;
  border-radius: 8px;
  box-shadow: 0 2px 2px white;
  overflow: hidden;
  margin: 20px;
  text-align: center;
  transition:all 0,25;">


             <img src="https://images.pexels.com/photos/295826/pexels-photo-295826.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1">
              <h4>Noticias</h4>
              
               <p>productos</p>
                <a href="#">haz clic aqui</a>
             
         </div>

           <div class="card"style="width: 400px;
  height: 400px;
  border-radius: 8px;
  box-shadow: 0 2px 2px white;
  overflow: hidden;
  margin: 20px;
  text-align: center;
  transition:all 0,25;">

             <img src="https://images.pexels.com/photos/50987/money-card-business-credit-card-50987.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1">
              <h4>¿Quieres abonar desde este sitio?</h4>
              
               
               <p>productos</p>
                <a href="#">haz clic aqui</a>
             
         </div>

         </div>


</body>
</html>




 </body>
 </html>



