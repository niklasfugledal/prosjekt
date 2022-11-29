<?php

include_once './Sites/Registration/Database.php';

if (count($_POST) > 0) {
    mysqli_query($conn, "UPDATE registration set id='" . $_POST['id'] . "', fullName='" . $_POST['fullName'] . "', email='" . $_POST['email'] . "', user_password='" . $_POST['user_password'] . "' WHERE id='" . $_POST['id'] . "'");
    $message = "Bruker oppdatert!";
}
$result = mysqli_query($conn, "SELECT * FROM registration WHERE id='" . $_GET['id'] . "'");
$row = mysqli_fetch_array($result);
?>
<html>

<head>
    <title>Oppdater brukerinformasjon</title>
</head>

<body>
    <form name="frmUser" method="post" action="">
        <div><?php if (isset($message)) {
                    echo $message;
                } ?>
        </div>
        <div style="padding-bottom:5px;">
            <a href="retrieve.php">Profil</a>
        </div>
        Id <br>
        <input type="hidden" name="id" class="txtField" value="<?php echo $row['id']; ?>">
        <input type="text" name="id" value="<?php echo $row['id']; ?>">
        <br>
        Fult navn: <br>
        <input type="text" name="fullName" class="txtField" value="<?php echo $row['fullName']; ?>">
        <br>
        Email: <br>
        <input type="text" name="email" class="txtField" value="<?php echo $row['email']; ?>">
        <br>
        Passord:<br>
        <input type="text" name="user_password" class="txtField" value="<?php echo $row['user_password']; ?>">
        <br>
        <input type="submit" name="submit" value="Submit" class="buttom">

    </form>
</body>

</html>