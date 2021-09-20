<?php

$name = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];

$server = 'localhost';
$username = 'root';
$password = 'root';
$dbname = 'database1';

$conn = new mysqli($server,$username,$password,$dbname);

if($conn->connect_error){
    die('Connection Failed' .$conn->connect_error);
}
echo $name;
echo '<br>';
echo $email;
// echo $password;
// else
//     echo 'Connected Successfully';

$sql= " INSERT INTO `userinfo` (`userno`, `name`, `email`, `password`) VALUES (NULL, '$name', '$email', '$password'); ";

// UPDATE `userinfo` SET `name` = 'Hulk', `email` = 'hulk@avg.com', `password` = 'hulk12' WHERE `userinfo`.`userno` = 28; 
// UPDATE `userinfo` SET `name` = 'Bulk', `email` = 'bulk@avg.com', `password` = 'hulk123' WHERE `userinfo`.`name` = 'rharg'

if($conn->query($sql)){
    echo '<br> Registered Successfuly';
}
else{
    echo $result;
}

// if($result>0){
//     whele($result->fetch_assoc()){
//         echo 'R E G I S T E R E D <br>S U C C E S S F U L L Y';
//     }
// }
$conn->close();

?>