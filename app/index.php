<!DOCTYPE html>
<html lang="pl">
    <head>
        <meta charset="utf-8">
        <title>Michał Zadrąg</title>
    </head>
    <body>
<div class="wrapper">
        <h1>Programowanie w chmurze obliczeniowej - Michał Zadrąg</h1>
<?php
    $serverName = "mysql";
    $userName = "root";
    $password = "dziobak12";
    $conn = new mysqli($serverName, $userName, $password);
    if ($conn->connect_errno)
        printf($conn->connect_error);
    else {
        $results = $conn->query('SHOW databases;');

        while($row = $results->fetch_assoc())
            $schemas[] = $row['Database'];
?>
       <h3>Bazy danych</h3>
       <ul>
            <?php foreach($schemas as $value)
                echo '<li>'.$value.'</li>';
    }
            ?>
        </ul>
</div>
    </body>
</html>