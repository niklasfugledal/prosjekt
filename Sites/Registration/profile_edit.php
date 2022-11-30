<?php

require_once('C:\xampp\htdocs\Prosjekt\Includes/Database.php');

// Initialize the session
session_start();

if (!(isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true && $_SESSION['type'] == 'admin')) {
    echo "Unauthorized Access";
    return;
}

$id = $_GET['id'];

$SelSql = "SELECT * FROM users WHERE id=$id";
$res = mysqli_query($conn, $SelSql);
$r = mysqli_fetch_assoc($res);


if (isset($_POST) & !empty($_POST)) {
    $username = ($_POST['username']);
    $email = ($_POST['email']);
    $adress = ($_POST['adress']);
    $cell = ($_POST['cell']);
    $bday = ($_POST['bday']);

    // Execute query
    $query = "UPDATE users 
    SET username='$username',
        email='$email',
        adress='$adress',
        cell='$cell',
        bday='$bday'
    WHERE id='$id'";

    $res = mysqli_query($conn, $query); // get result
    if ($res) {
        header('username: view.php');
    } else {
        $fmsg = "Failed to Insert data.";
        // print_r($res);
    }
}
?>


<div class="container">
    <h2 style="text-align: center;">Oppdater brukerinformasjon</h2>

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