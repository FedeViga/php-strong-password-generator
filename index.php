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

            <h1 class="mb-5">
                Random Password Generator
            </h1>

            <form action="password.php" class="mx-auto text-center mb-5">
                <div class="mb-3">
                    <label class="form-label" for="characters-number">Inserire numero di caratteri desiderato (tra 6 e 30)</label>
                    <input type="number" class="form-control text-center" id="characters-number" name="characters-number" min="6" max="30">
                </div>
                <button type="submit" class="btn btn-dark">Genera Password</button>
            </form>
        </div>

    </div>




    <!-- bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>