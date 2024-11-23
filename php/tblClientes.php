<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabla de clientes</title>
    <link rel="shortcut icon" href="./img/cliente.png" type="image/x-icon">
    <link rel="stylesheet" href="./CSS/cliente.css">
    <link rel="stylesheet" href="./CSS/normalize.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
<a href="./index.html"><h1>Alan Guadalupe Herrera Castorena<span> Logístico y Estudiante de Ing. En Computación</span></h1></a>
<header class="header">
    <h2 class="header-1">Página de clientes</h2>
    <div class="imagen">
        <img src="./img/cliente.png" alt="tblClientes">
    </div>  
</header>
<div>
    <h3>Lista de clientes</h3>   
</div>   
<div class="container my-4">
<table class="table table-dark table-striped mi-table">
    <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Empresa</th>
            <th scope="col">Contacto</th>
            <th scope="col">País</th>
        </tr>
    </thead>
<tbody>
    <?php
    $conexion = mysqli_connect("localhost","root","","dbClientes");
    if(!$conexion) {
        die("La conexión no fue exitosa");
    }
    $sql = "SELECT * FROM tblClientes";
    $result = mysqli_query($conexion,$sql);
    while($row = mysqli_fetch_array($result)) {
        $id = $row["id"];  
        $empresa = $row["empresa"];  
        $contacto = $row["contacto"];  
        $pais = $row["pais"];  
        echo "<tr>
            <th scope='row'>$id</th>
            <td>$empresa</td>
            <td>$contacto</td>
            <td>$pais </td>
            </tr>";
        } 
        mysqli_close($conexion);
    ?>
  </tbody>
</table>
<a style="text-decoration: none;" href="./cliente.html" class="boton">Formulario</a>
</div>
</body>
</html>