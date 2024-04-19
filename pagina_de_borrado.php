<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Borrar Datos</title>
  <!-- Bootstrap CSS -->
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container mt-5">
  <h1 class="mb-4">Borrar Datos</h1>
  
  <div class="dropdown">
    <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
      Selecciona la categoría de datos
    </button>
    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
      <a class="dropdown-item" href="#" onclick="borrarDatos('movies')">Movies</a>
      <a class="dropdown-item" href="#" onclick="borrarDatos('music')">Music</a>
      <a class="dropdown-item" href="#" onclick="borrarDatos('social')">Social</a>
      <a class="dropdown-item" href="#" onclick="borrarDatos('webby')">Webby</a>
    </div>
  </div>

  <div id="resultado" class="mt-4"></div>

</div>

<!-- Bootstrap JS and jQuery -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

<script>
  function borrarDatos(categoria) {
    // Aquí puedes agregar el código para leer los datos alojados en la categoría seleccionada
    // y preguntar al usuario qué desea borrar
    var resultado = "¿Qué deseas borrar en la categoría " + categoria + "?";
    document.getElementById("resultado").innerHTML = resultado;
  }
</script>

</body>
</html>
