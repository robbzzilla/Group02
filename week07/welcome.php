<?php
$title = "Welcome";
session_start();

if (isset($SESSION["username"]))
{
    $username =$_SESSION['username'];
}
else 
{
    header("Location: signin.php");
    die();
}


?>

<!DOCTYPE html>
<hmtl>

<?php include_path: ("/header.php");?>

<body>
    <h3> Welcome to the homepage </h3>

    <p>Your username is: <?php $username ?> </p>


    <a href = "/signout.php" > Sign out </a>

</body>


</html>