<?php

$passwordLength = $_GET['characters-number'];

function passwordGenerator($length) {

    $chars = "ABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789abcdefghijklmnopqrstuvwxyz@#$&*";
    $generatedPassword = '';
    for($i = 0; $i < $length; $i++) {
        $generatedPassword .= $chars[rand(0, strlen($chars) - 1)];
    }
    return $generatedPassword;
}

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

        <h1 class="mb-5">
            Random Password Generator
        </h1>

        <form action="index.php" class="mx-auto text-center mb-5">
            <div class="mb-3">
                <label class="form-label" for="characters-number">Inserire numero di caratteri desiderato</label>
                <input type="number" class="form-control text-center" id="characters-number" name="characters-number">
            </div>
            <button type="submit" class="btn btn-outline-light">Genera Password</button>
        </form>


        <?php

        if($passwordLength >=1 ) {

            echo "
            
            <h2>
                Password Generata:
            </h2>
            <p>";
                echo passwordGenerator($passwordLength);
            echo"
            </p>
            ";
        }
        ?>
    </div>




    <!-- bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>