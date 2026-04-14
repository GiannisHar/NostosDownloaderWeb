
<?php 

session_start();

$id = $_POST['ID'];
$password = $_POST['Password'];

if (($id === "user001" && $password === "user001") || $id === "paraschou" && $password === "paraschou123") {
    $_SESSION['ID'] = $id;
    header("Location: lobby.php");
    exit;
} else {
    header("Location: logger.php?error=1");
    exit;
}
?>
