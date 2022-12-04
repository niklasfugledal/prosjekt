<?php
require_once('../../../Registration/Database.php');
// Initialize the session
session_start();

?>
<?php require('../../Hybel.inc/header.php'); ?>


<!DOCTYPE html>
<html lang="en">

<head>
    <title>Rediger</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="../../../../css/styles.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>

<body>
    <?php

    $currentUser = $_SESSION['id'];
    $sql = "SELECT * FROM  users WHERE id = '$currentUser'";
    $res = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($res);

    $gotResults = mysqli_query($conn, $sql);
    if ($gotResults) {
        if (mysqli_num_rows($gotResults) > 0) {
            while ($row = mysqli_fetch_array($gotResults)) {
                //  print_r($row);

                if (isset($_POST['update'])) {
                    $id = $_SESSION['id'];
                    $name = $_POST['name'];
                    $email = $_POST['email'];
                    $adress = $_POST['adress'];
                    $cell = $_POST['cell'];
                    $bday = $_POST['bday'];
                    $password = $_POST['password'];
                    $confirm_password = $_POST['confirm_password'];

                    $hashed_password = password_hash($password, PASSWORD_DEFAULT);

                    $updateUser = $_SESSION['id'];
                    $update = "UPDATE users set name='$name',email='$email',adress='$adress', cell = '$cell', bday ='$bday', password='$password', password='$confirm_password' WHERE id='$id'";
                    $updateResult = mysqli_query($conn, $update);
                    $row = mysqli_fetch_assoc($res);
                    $Row['Data'] ??= 'default value';
                    return $Row['Data'];

                    $results = mysqli_query($conn, $update);
                    if ($results) {
                        if (mysqli_num_rows($gotResults) > 0) {
                        }
                    }
                }
                
    ?>
                <div class="container">
                    <h2 style="text-align: center;">Oppdater brukerinformasjon</h2>

                    <form method="POST" action="#">

                        <div class="form-group">
                            <label for="name">Brukernavn:</label>
                            <input type="text" class="form-control" id="name" value="<?php echo $row['name']; ?>" placeholder="Legg til brukernavn" name="name">
                        </div>
                        <div class="form-group">
                            <label for="email">Email:</label>
                            <input type="email" class="form-control" id="email" value="<?php echo $row['email']; ?>" placeholder="Legg til Email" name="email">
                        </div>
                        <div class="form-group">
                            <label for="adress">Adresse:</label>
                            <input type="text" class="form-control" id="adress" value="<?php echo $row['adress']; ?>" placeholder="Legg til Adresse" name="adress">
                        </div>
                        <div class="form-group">
                            <label for="cell">Telefonnummer:</label>
                            <input type="tel" class="form-control" id="cell" value="<?php echo $row['cell']; ?>" placeholder="Legg til Telefonnummer" name="cell">
                        </div>
                        <div class="form-group">
                            <label for="date">Fødselsdato:</label>
                            <input type="text" class="form-control" id="date" value="<?php echo $row['bday']; ?>" placeholder="Legg til Fødselsdato" name="bday">
                        </div>
                        <div class="form-group">
                            <label for="pwd">Passord:</label>
                            <input type="password" class="form-control" id="pwd" value="<?php echo $row['password']; ?>" placeholder="Legg til Passord" name="password">
                        </div>
                        <div class="form-group">
                            <label for="pwd"> Bekreft Passord:</label>
                            <input type="password" class="form-control" id="pwd" value="<?php echo $row['password']; ?>" placeholder="Bekreft Passord" name="confirm_password">
                        </div>
                        <button type="submit" name="update" value="update" class="btn">Oppdater</button>
                    </form>

                </div>


    <?php
            }
        }
    }





    ?>

    <?php require_once('../../Hybel.inc/header.php') ?>

    <div class="container">
        <?php if (isset($fmsg)) { ?><div class="alert alert-danger" role="alert"> <?php echo $fmsg; ?> </div><?php } ?>




        <?php

        ?>


        <?php
        /*
        if (!(isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true && $_SESSION['type'] == 'admin' || 'owner')) {
            return;
        }

        $id = $_GET['id'];

        $sql = "SELECT * FROM `houses` WHERE id=$id";
        $res = mysqli_query($conn, $sql);
        $data = mysqli_fetch_assoc($res);


        if (isset($_POST) & !empty($_POST)) {
            $name = ($_POST['name']);
            $email = ($_POST['email']);
            $adress = ($_POST['adress']);
            $cell = ($_POST['cell']);
            $bday = ($_POST['bday']);
            $password = ($_POST['password']);
            $confirm_password = ($_POST['confirm_password']);

            // Execute query
            $query = "UPDATE `users` 
	SET name='$name',
		email='$email',
		adress='$adress'
		cell='$cell',
		bday='$bday',
        password='$password'
        confirm_password='$confirm_password'
	WHERE id='$id'";


            $res = mysqli_query($conn, $query); // get result
            if ($res) {
                header('location: view.php');
            } else {
                $fmsg = "Failed to Insert data.";
                // print_r($res);
            }
        }
*/
        ?>





















        <?php require('../../Hybel.inc/footer.php'); ?>