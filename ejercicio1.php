<?php
    if ($_POST) {
        $name = $_POST['name'];
        echo "Hola $name";
    } 

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Php exercise</title>
</head>

<body>

    <form action="ejercicio1.php" method="post">
        <div>
            <label for="">Name:</label>
            <input type="text" name="name">
        </div>
        <input type="submit" value="Send">
    </form>
</body>

</html>