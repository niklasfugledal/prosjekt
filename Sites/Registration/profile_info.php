<!DOCTYPE html>
<html lang="en">

<head>
    <title>Rediger</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="../../css/style.css">
    <link rel="stylesheet" href="../../css/styles.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>

<body>

    <?php

    include('functions.php');


    $currentUser = $_SESSION['user']['username'];
    $sql = "SELECT * FROM users WHERE username = '$currentUser'";

    $gotResults = mysqli_query($db, $sql);
    if ($gotResults) {
        if (mysqli_num_rows($gotResults) > 0) {
            while ($row = mysqli_fetch_array($gotResults)) {
                //print_r($row);
    ?>
                <div class="container">
                    <h2 style = "text-align: center;">Oppdater brukerinformasjon</h2>

                    <form method="POST" action="#">

                        <div class="form-group">
                            <label for="username">Brukernavn:</label>
                            <input type="text" class="form-control" id="username" value="<?php echo $row["username"]; ?> " placeholder="Legg til brukernavn" name="username">
                        </div>
                        <div class="form-group">
                            <label for="email">Email:</label>
                            <input type="email" class="form-control" id="email" value="<?php echo $row["email"]; ?>  " placeholder="Legg til Email" name="email">
                        </div>
                        <div class="form-group">
                            <label for="adress">Adresse:</label>
                            <input type="text" class="form-control" id="adress" value="<?php echo $row["adress"]; ?>  " placeholder="Legg til Adresse" name="adress">
                        </div>
                        <div class="form-group">
                            <label for="cell">Telefonnummer:</label>
                            <input type="tel" class="form-control" id="cell" value="<?php echo $row["cell"]; ?>  " placeholder="Legg til Telefonnummer" name="cell">
                        </div>
                        <div class="form-group">
                            <label for="date">Fødselsdato:</label>
                            <input type="text" class="form-control" id="date" value="<?php echo $row["bday"]; ?>  " placeholder="Legg til Fødselsdato" name="date">
                        </div>
                        <div class="form-group">
                            <label for="pwd">Passord:</label>
                            <input type="password" class="form-control" id="pwd" value="<?php echo $row["password"]; ?>  " placeholder="Legg til Passord" name="password_1">
                        </div>
                        <div class="form-group">
                            <label for="pwd"> Bekreft Passord:</label>
                            <input type="password" class="form-control" id="pwd" value="<?php echo $row["password"]; ?>  " placeholder="Bekreft Passord" name="password_2">
                        </div>
                        <button type="submit" name="submit" class="btn">Oppdater</button>
                    </form>

                </div>


    <?php
            }
        }
    }
    ?>
    <?php
   
?>





</body>

</html>