<?php

    $host = 'localhost';
    $user = 'root';
    $pass = "";
    $db = 'manasys';
    $conn = mysqli_connect($host, $user, $pass, $db);

    if (!$conn) {
        die('Falha ao conectar com banco de dados!' . mysqli_connect_error());
    }
