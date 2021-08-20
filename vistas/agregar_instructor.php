<!DOCTYPE html>
<html >
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ingresar Instructor</title>
    <link rel="stylesheet" href="../css/agregar.css">
</head>
<body>
  <div id = centrar>
    <h1>TypKey</h1>
    <hr style="height:2px;border-width:0;background-color:blue">
            
  </div>
   

  <form action="r_instructor.php" method="POST" id="form">

    <fieldset>
      <h2 class="fs-title">Ingresar Instructor</h2>
      <input type="number" name="CC" id="imp" placeholder="Numero de Identificacion">
      <input type="text" name="nombre" id="imp" placeholder="Nombres y Apellidos" />
      <label for="imp">Ambiente:</label>
      <select name="ambiente">
      <?php
        //se realiza la conexion con la base de datos
        include('class/conexion.php');
        $conexion = conex::conectar();
        $sql = "select no, cede, nom_aula from ambientes";
        //echo $sql;
        $resultado = $conexion->query($sql);
        //se crea l alista de los ambientes
        while($fila = mysqli_fetch_array($resultado) )
        {
            $ambiente = $fila[ 'no'];
            $ambiente .= "  ";
            $ambiente .= $fila[ 'cede'];
            $ambiente .= "  ";
            $ambiente .= $fila[ 'nom_aula'];
            echo "<option values =' $ambiente'>  $ambiente </option>";
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