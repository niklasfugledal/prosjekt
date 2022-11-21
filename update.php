<?php
include_once './Sites/Registration/Database.php';
$result = mysqli_query($conn, "SELECT * FROM registration");
?>
<!DOCTYPE html>
<html>

<head>
    <title> Retrive data</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <?php
    if (mysqli_num_rows($result) > 0) {
    ?>
        <table>
            <tr>
                <td>Id</td>
                <td>Fult navn</td>
                <td>Email</td>
                <td>Passord</td>
            </tr>
            <?php
            $i = 0;
            while ($row = mysqli_fetch_array($result)) {
            ?>
                <tr>
                    <td><?php echo $row["id"]; ?></td>
                    <td><?php echo $row["fullName"]; ?></td>
                    <td><?php echo $row["email"]; ?></td>
                    <td><?php echo $row["user_password"]; ?></td>
                    <td><a href="update-process.php?id=<?php echo $row["id"]; ?>">Update</a></td>
                </tr>


            <?php
                $i++;
            }
            ?>
        </table>
    <?php
    } else {
        echo "No result found";
    }
    ?>
</body>

</html>