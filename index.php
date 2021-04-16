<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <title>GRUD</title>
</head>

<body class="container">
    <h1>Mi primer projecto GRUD</h1>
    <h2>Mostrar datos de la base</h2>
    <?php
        include 'conexion.php';//Agregando cadena de conexion

        //extraer datos de la tabla
            //query para extrear datos
        $consulta = "Select * from personas";

        //variable contenedora de datos
        $resultado = mysqli_query($conn,$consulta);

    ?>

    <!--Preceso de extraccion de datos-->
    <table class="table table-dark table-striped">
        <thead>
            <tr>
                <th>Id</th>
                <th>Nombre</th>
                <th>Telefono</th>
                <th>Email</th>
            </tr>
        </thead>
        <tbody>
            <?php
                //Ciclo para extraer el registro del paquete
                while($dato=mysqli_fetch_assoc($resultado)){
                    echo '<tr> <th scope="row">'.$dato['Id'].'</th>';
                    echo '<td>'.$dato['Nombre'].'</td>';
                    echo '<td>'.$dato['Tel'].'</td>';
                    echo '<td>'.$dato['Mail'].'</td></tr>';
                }
            ?>
        </tbody>
    </table>
</body>

</html>