<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>

	<title>Materias</title>
</head>
<body class="bg-body-secondary">
<div class="container">
  
  <h2>Agregar Materia</h2>

  <form action="../controladores/agregarMaterias.php" method="post" class="bg-light bg-gradient shadow-lg p-3 mb-5 bg-body-tertiary rounded border ">
    
    <div class="mb-3">
      <label class="form-label" for="username">Materia</label>
      
      <input type="text" id="username" name="NombreMateria" class="form-control" required>
    </div>
    <div class="mb-3">
      
      <input type="submit" value="Agregar Materia" class="btn btn-success">
    </div>
    
  
  
      </form>
    </div>
</body>
</html>