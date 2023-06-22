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
     $letterMin = range('a' , 'z');
     $letterCap = range('A' , 'Z');
     $numbers = range(0,9);
     $special = [
        ...range("!" , "/"),
        ...range(":" , "@"),
        ...range("[" , "'"),
        ...range("{" , "-")
     ]

$lng = $_GET['lenght'];

?>




<body class="container text-center">
    <div class="text-center">
    <h1>Strong Password generator</h1>
    <h3>Genera una password sicura</h3>
    <form class="my-3">
        <label for="length">Length</label>
        <input type="number" name="lenght" id="lenght">
        <input type="submit" value="Crea Password">
    </form>
    <h1>
        Generazione Password  <br/>
          <pre>
           <?php
           var_dump(range('a', 'z'));
           ?>
          </pre>
      </h1>
   </div>
</body>
</html>