<?php
if (isset($_GET['length'])) {
    $passwordLength = intval($_GET['length']);
    $generatedPassword = generatePassword($passwordLength);
}

function generatePassword($length) {
    $characters = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789!@#$%^&*()';
    $password = '';
    for ($i = 0; $i < $length; $i++) {
        $randomIndex = rand(0, strlen($characters) - 1);
        $password .= $characters[$randomIndex];
    }
    return $password;
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">

    <title>Generatore di Password</title>
</head>

<body>
    <div class="container p-5 text-center">
        <h1 class="mb-5">Generatore di Password</h1>
        <form action="index.php" method="GET">
            <label class="fw-bold">Inserisci la lunghezza della password: </label>
            <input type="number" name="length" min="1" max="100" required>
            <button type="submit" class="btn btn-primary">Genera Password</button>
        </form>

        <?php if (isset($_GET['length'])) { ?>
        <p class="my-3 fw-bold">la tua password generata è:<span class="text-success"><?php echo " " . $generatedPassword; ?></span></p>
        <?php } ?>
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</body>

</html>