<?php
    $servername = "localhost"; 
    $username = "id17041876_userchordsmusic";
    $password = "Espltdm100fm#"; 
    $dbname = "id17041876_chordsmusic";
    $port = "3306";

    $conexao = mysqli_connect("$servername", "$username","$password","$dbname", "$port");

    if ($conexao->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    } 
?>