<?php
// Include config file
require_once('C:\xampp\htdocs\Prosjekt\IS-115-Prosjekt-1\Sites\Registration/Database.php');

// Initialize the session
session_start();

if (!(isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true)) {
   
    header('Location: prosjekt/is-115-prosjekt-1/components/user/login.php');
}

?>
<?php require($path . '../../includes/header.php') ?>
<div class="d-flex mt-4 mx-4">
    <h3>Search Results: </h3>
    <div class="row mt-4 pt-4 justify-content-between">
        <?php
        if (!empty($_REQUEST['term'])) {

            $term = mysqli_real_escape_string($conn, $_REQUEST['term']);

            $sql = "SELECT * FROM houses WHERE location LIKE '%" . $term . "%'";
            $r_query = mysqli_query($conn, $sql);

            while ($r = mysqli_fetch_array($r_query)) {
                include($path . '../../includes/house.php');
            }
        }
        ?>
    </div>
</div>

<?php require($path . '../../includes/footer.php') ?>