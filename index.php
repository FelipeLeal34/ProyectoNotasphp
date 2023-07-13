<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>

	<title>Inicio de sesion</title>
</head>
<body class="bg-body-secondary">
<div class="container-sm">
  
<h2>Iniciar Sesión</h2>
  <form action="Usuario/controladores/controlusuarios.php" method="post" class="bg-light rounded border" class="border border-primary">
    
    <div class="mb-3">
      <label class="form-label" for="username">Usuario</label>
      
      <input class="form-control" type="text" id="username" name="username" required>
    </div>
    <div class="mb-3">

      <label class="form-label" for="password">Contraseña</label>
   

      <input type="password" class="form-control" id="password" name="password" required>

    </div>

    <div>

      <p>¿olvidaste la contraseña? <a href="">Recuperar contraseña</a>
        </div>
        <div>
    
      <input type="submit" value="Iniciar Sesión" class="btn btn-success">
      </div>
    

  
   <p>¿No tienes una cuenta? <a href="agregar.html">Regístrate aquí</a>
      </form>
    </div>
</body>
</html>