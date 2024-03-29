<?php

include "./functions.php";

?>

<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <!-- css -->
    <link rel="stylesheet" href="./css/style.css">

    <title>Password Generator</title>
</head>

<body class="bg-dark text-white">
    
    <div class="container text-center py-5">

        <div class="card py-4 bg-success">

            <div>
                <h2>
                    Password Generata:
                </h2>
                <p>
                    <?php
                        echo passwordGenerator($passwordLength)
                    ?>
                </p>
            </div>
        </div>

    </div>

