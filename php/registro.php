<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {font-family: Arial, Helvetica, sans-serif; background-image: url("/cafeteria/public/img/bg.png");}
form {border: 3px solid #f1f1f1; width: 500px; height: 520px; background-color:#ffffff; border-radius: 25px 25px 25px 25px;} /*Tamaño del contenedor del registro*/

input[type=email], input[type=password] {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
}

button {
  background-color: #04AA6D;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
  border-radius: 25px 25px 25px 25px;
}

button:hover {
  opacity: 0.8;
}

.cancelbtn {
  width: auto;
  padding: 10px 18px;
  background-color: #f44336;
  
}

.imgcontainer {
  text-align: center;
  /*margin: 24px 0 12px 0;*/
  margin: 0px 0 5px 0;
  
}
/*Contenedor de la imagen del login  */
img.avata {
  /**/
  width: 25%;
  border-radius: 50%;
}

.container {
  padding: 16px;
}

span.psw {
  float: right;
  padding-top: 16px;
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
  span.psw {
     display: block;
     float: none;
  }
  .cancelbtn {
     width: 100%;
  }
}

</style>
</head>
<body>

<center>
<a name="sesion"></a>
<!-- Vinculos del menu a direccionar sesion -->
<form action="crud.registro.php" method="post">
  <div class="imgcontainer">
    <img src="/cafeteria/public/img/login.png" alt="Avata" class="avata">
  </div>
sesion
  <div class="container">
    <!--email-->
    <label for="uname"><b>Correo Electronico</b></label>
      <input type="email" id="usuario" name="usuario" value="" placeholder="Ingresa Correo" required>
    <!--contraseña-->
      <label for="psw"><b>Contraseña</b></label>
      <input type="password" id="contrasena" name="contrasena" Value="" placeholder="Ingresa Contraseña" required>
        
    <button type="submit">Registrarse</button>
    <label>
      <input type="checkbox" checked="checked" name="remember"> ¿Recordar contraseña xD?
    </label>
  </div>
  <div class="container" style="background-color:#f1f1f1">
  <form action="regresa">
  <!--<a href="index.html">Regresa</a>-->
  <button type="button" class="cancelbtn"> <a href="../index/index.html">Regresarar</a></button>
    <!--<button type="button" class="cancelbtn">Regresar</button>-->
  </form>
	</form>
  <br>
  <!--¿No tienes cuenta?<a href="#inicio">Registrate </a>-->
  </div>
</form>
</center>

</body>
</html>