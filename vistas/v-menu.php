<html>
	<head>
	<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
		<link rel="stylesheet" href="css/estilos.css">
	</head>
  
	<body>
	<form action="../controladores/r-prestamo.php" method= "POST">
	<div class="caja1">
	
			<ul class="nav">
				
				<li><a href="">
					<!--<div class="caja1"></div>--> 
						<span class="material-icons">
						account_circle
						</span>
				    </a>
					<ul>
								<li><a href="../index.php">cerrar sección</a></li>
								<li><a href="../controladores/c-historial-usuario.php">informacion del usuario</a></li>
							</ul>
						
							<ul>
							</ul>
			
						</li>
					</ul>
				</li>
  
</div>
		<h1>
      <div id = centrar>
         <h1>TypKey</h1>
		 <hr style="height:2px;border-width:0;background-color:blue">
            
      </div>

		<div id="header">
			<ul class="nav">
				
				<li><a href="">menu</a>
					<ul>
						<li><a href="">agregar</a>
							<ul>
								<li><a href="vistas/agregar_instructor.php">instructor</a></li>
								<li><a href="agregar_ambiente.php">ambientes</a></li>
								<li><a href="agregar_programa.php">programa</a></li>
							</ul>
						</li>
                        <li><a href="">Actualizar y Eliminar</a>
							<ul>
                            <li><a href="controladores/c-editar_eliminar_instructores.php">Instructor</a></li>
								<li><a href="controladores/c-editar_eliminar_ambientes.php">Ambientes</a></li>
								<li><a href="controladores/c-editar_eliminar_programas.php">Programas</a></li>
							</ul>
						</li>
							<ul>
							</ul>
						</li>
					</ul>
				</li>
                <li><a href="controladores/c-historial.php">historial</a></li>
				<li><a href="controladores/c-prestamo.php">Prestar Ambiente</a></li>
				
			</ul>
		</div>
		</h1>
      
		<br><br><br><br><br><br><br><br><br>
		
		

	</body>
</html>