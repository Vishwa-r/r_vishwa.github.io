<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Movie</title>
</head>
<body>
    <header> Movies </header>
    <style>
        header{
            text-align: center;
            font-size: 82px;
            color:white;
            border: 2px solid #111;
            padding: 2px 16px;
            background-color: black;
            font-family: monospace;
            position: sticky;
            opacity: 1;
        }
        header:hover{
            background-color: pink;
            color: #000;
            
            transition: 0.8s;
        }
    </style>
</body>

<?php

$server = "localhost";
$user = "root";
$password = "root";
$dbname = "movies";

$conn = new mysqli ($server,$user,$password,$dbname);

$sql = "CREATE DATABASE `movies`; ";

$sql = "CREATE TABLE movie (   `MOVIE_NAME` VARCHAR(30) NOT NULL ,
                               `Actor` VARCHAR(30) NOT NULL , 
                               `Actress` VARCHAR(30) NOT NULL , 
                               `Director` VARCHAR(30) NOT NULL ,
                               `Year` YEAR(4) NOT NULL ) ENGINE = InnoDB;
                             )";

$sql = "INSERT INTO `movie` (`movieName`, `actor`, `director`, `year`) VALUES (' Iron Man', 'Robert Downey Jr.', 'Jon Favreau', '2008'); ";
$sql = "INSERT INTO `movie` (`movieName`, `actor`, `director`, `year`) VALUES ('Spider-Man Homecoming', 'Tom Holland ', 'Jon Watts', '2017');";
$sql = "INSERT INTO `movie` (`movieName`, `actor`, `director`, `year`) VALUES ('Captain America', 'Chris Evans', 'Joe Johnston', '2011');";
$sql = "INSERT INTO `movie` (`movieName`, `actor`, `director`, `year`) VALUES ('Thor', 'Chris Hemsworth', 'Kenneth Branagh', '2011');";

$sql = "SELECT actor FROM movie WHERE 'Tom Holland';";

$sql2 = "SELECT `movieName`, `actor`, `director`, `year` FROM `movie` ";

$result = $conn->query($sql2);

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo "<b>";
        echo "<br>";
        echo  $row["movieName"];
        echo "<br></b>";
        echo  $row["actor"];
        echo "<br>";
        echo  $row["director"];
        echo "<br>";
        echo  $row["year"];
        echo "<br>";
        echo "<br>";
       
     }
}else{
        echo '0 Results';
    }

$conn->close();

?>

</html>
