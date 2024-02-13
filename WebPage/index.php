<!DOCTYPE html>
<html lang="en">
    
    <head>
    <title>PHP & MySQL</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    </head>
    
    <body>
        <h1 class="text-center p-3">PHP & MySQL</h1>
        <div class="container-fluid row">

            <form class="col-4 p-4" method="POST">
                <h3 class="text-secondary p-3 text-center">Formulario</h3>
                <?php
                    include "modelo/conexion.php";
                    include "controlador/registro_persona.php";
                ?>
                <div class="mb-3">
                    <label for="name" class="col-sm-2 col-form-label">Nombre:</label>
                    <input type="text" class="form-control" name="nombre">
                </div>
                <button type="submit" class="btn btn-primary" name="btnregistrar" value="ok">Registrar</button>
            </form>

            <div class="col-8 p-4">
                <table class="table">
                    <thead>
                        <tr>
                        <th scope="col">Id</th>
                        <th scope="col">Nombre</th>
                        </tr>
                    </thead>

                    <tbody>
                    
                        <?php
                            include "modelo/conexion.php";
                            $sql = $conexion -> query(" select * from pruebas");
                            while ($datos = $sql->fetch_object()) { ?>
                                <tr>
                                    <td><?= $datos->userId ?></td>
                                    <td><?= $datos->username ?></td>
                                </tr>
                        <?php } ?>

                    </tbody>
                </table>
            </div>

        </div>
        

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    </body>

</html>