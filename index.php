<?php
require 'conexion_DB.php';
$world = $pdo->query("SELECT Name, Continent, Population, LifeExpectancy, HeadOfState FROM country", PDO::FETCH_ASSOC);
?>
<html>
<head>
    <title>Examen Segundo Parcial</title>
    <style rel="stylesheet">
        h1{
            color: black;
            text-align: center;
            font-family: "DejaVu Sans Condensed";
        }
        #tabla_examen{
            border-color: black;
            border-collapse: collapse;
            border-radius: 10px;
            margin-left: 70px;
        }
        #tabla_examen tr th{
            background-color: midnightblue;
            font-family: cursive;
            color: white;
        }
        #tabla_examen tr:hover td{
            background-color: lightskyblue;
            color: black;
            font-family: cursive;
        }
        #tabla_examen tr td a{
            text-decoration: none;
            color: blue;
            font-family: cursive;
        }
    </style>
</head>
<body>
<h1>WORLD</h1>
<table id="tabla_examen" border="1">
    <thead>
    <tr>
        <th>Name</th>
        <th>Continent</th>
        <th>Population</th>
        <th>LifeExpectancy</th>
        <th>HeadOfState</th>
        <th>Ver mas Info</th>
    </tr>
    </thead>
    <tbody>
    <?php foreach ($world as $paises): ?>
    <tr>
        <td><?php echo $paises['Name'] ?></td>
        <td><?php echo $paises['Continent'] ?></td>
        <td><?php echo $paises['Population'] ?></td>
        <td><?php echo $paises['LifeExpectancy'] ?></td>
        <td><?php echo $paises['HeadOfState'] ?></td>
        <td><a href="info.php?info= <?php echo "NOT FINISHED YET, SORRY"?>>Ver Info</a></td>
    </tr>
    <?php endforeach; ?>
    </tbody>
</table>
</body>
</html>
