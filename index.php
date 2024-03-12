<?php
include("connection.php");
$con = connection();

$sql = "SELECT * FROM users";
$query = mysqli_query($con, $sql);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD DEL SISTEMA SRDR</title>
    <link rel="shortcut icon" href="../CRUD-usuarios-php-main/CSS/imagenes/icono_favicon.png" type="image/x-icon">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <link href="CSS/style.css" rel="stylesheet">
</head>

<body>
    <!--formlario registar datos-->
    <div class="responsive-table">
            <h2>Registrar Usuarios</h2>
        <form action="insert_user.php" method="POST">
            <input type="text" name="name" placeholder="Nombre">
            <input type="text" name="lastname" placeholder="Apellidos">
            <input type="text" name="username" placeholder="Username">
            <input type="password" name="password" placeholder="Password">
            <input type="email" name="email" placeholder="Email">


            <div style="text-align: center;">
                <input type="submit" value="Guardar">
            </div>


        </form>
    </div>
    
<!--tabla mostrar datos-->
    <div class="responsive-table">
            <h3>Usuarios Registrados</h3>
        <table class="responsive-table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Apellidos</th>
                    <th>Username</th>
                    <th>Password</th>
                    <th>Email</th>
                    <th></th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                <?php while ($row = mysqli_fetch_array($query)): ?>
                <tr>
                    <th>
                        <?= $row['id'] ?>
                    </th>
                    <th>
                        <?= $row['name'] ?>
                    </th>
                    <th>
                        <?= $row['lastname'] ?>
                    </th>
                    <th>
                        <?= $row['username'] ?>
                    </th>
                    <th>
                        <?= $row['password'] ?>
                    </th>
                    <th>
                        <?= $row['email'] ?>
                    </th>
                    <th><a href="update.php?id=<?= $row['id'] ?>" class="users-table--edit">Actualizar</a></th>
                    <th><a href="delete_user.php?id=<?= $row['id'] ?>" class="users-table--delete">Eliminar</a></th>
                </tr>
                <?php endwhile; ?>
            </tbody>
        </table>
    </div>

</body>

</html>