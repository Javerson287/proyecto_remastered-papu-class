<!DOCTYPE html>
<html >
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ingresar Programa</title>
    <link rel="stylesheet" href="../css/agregar.css">
</head>
<body>
  <div id = centrar>
    <h1>TypKey</h1>
    <hr style="height:2px;border-width:0;background-color:blue">
            
  </div>
   

  <form action="r_programas.php" method="POST" id="form">

    <fieldset>
      <h2 class="fs-title">ingresar Programa</h2>
      <input type="text" name="ficha" id="imp" placeholder="Ficha" />
      <input type="text" name="nombre" id="imp" placeholder="Nombre de programa" />
      <label for="imp">Instructor:</label>
      <select name="instructor">

        <?php
            //se realiza la conexion con la base de datos
            include('class/conexion.php');
            $conexion = conex::conectar();
            $sql = "select no_documento, nom_instructor from instructores";
            //echo $sql;
            $resultado = $conexion->query($sql);
            //se crea l alista de los ambientes
            while($fila = mysqli_fetch_array($resultado) )
            {
                $instructor = $fila[ 'no_documento'];
                $instructor .= "  ";
                $instructor .= $fila[ 'nom_instructor'];
                echo "<option values =' $instructor'>  $instructor </option>";
 }
            ?>
            </select>
      
      <br><br>
      <a class="next action-button" href="v_menu.php">Volver</a>
      <input type="submit" class="next action-button" name="Enviar" value="Enviar">
  
        
     
    </fieldset>
    
    
  </form>
</body>
</html>