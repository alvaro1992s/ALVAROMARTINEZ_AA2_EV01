<?php 
    include("connection.php");
    $con=connection();

    $id=$_GET['id'];

    $sql="SELECT * FROM users WHERE id='$id'";
    $query=mysqli_query($con, $sql);

    $row=mysqli_fetch_array($query);
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
    <h2>Actualizar Usuarios</h2>
    <div class="responsive-table">
        <form action="edit_user.php" method="POST">
            <input type="hidden" name="id" value="<?= $row['id']?>">
            <input type="text" name="name" placeholder="Nombre" value="<?= $row['name']?>">
            <input type="text" name="lastname" placeholder="Apellidos" value="<?= $row['lastname']?>">
            <input type="text" name="username" placeholder="Username" value="<?= $row['username']?>">
            <input type="text" name="password" placeholder="Password" value="<?= $row['password']?>">
            <input type="text" name="email" placeholder="Email" value="<?= $row['email']?>">

            <div style="text-align: center;">
                <input type="submit" value="Actualizar">
            </div>

        </form>
    </div>
</body>

</html>