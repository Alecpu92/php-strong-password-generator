<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <title>Document</title>
</head>

<style>
    body{
        background-color: darkblue;
    }
    h1{
        color: red;
    }
    h3{
        color: white;
    }
</style>

<?php
    $password = $_GET['password'];
    $contAt = str_contains($mail, 'abcdefghilmnopqrstuvzwyjx')
    $contDot = str_contains($mail, '0123456789')
    var_dump($password);
?>


<body class="container text-center">
    <h1>Strong Password generator</h1>
    <h3>Genera una password sicura</h3>
    <form class="text-center">
        <label for="password">Password</label>
        <input type="password" name="password" id="password">
        <input type="submit" value="Crea Password">
    </form>
</body>
</html>