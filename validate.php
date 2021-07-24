<?php 
session_start(); 
ob_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
</head>
<body>

<?php

    $host = "localhost";
    $dbUsername = "root";
    $dbPassword = "";
    $dbname = "users_registry";

    $conn = mysqli_connect($host, $dbUsername, $dbPassword, $dbname);
    mysqli_select_db($conn, $dbname);

    if (mysqli_connect_error()) {
        die('connection error');
    } else {

    if(isset($_POST['login'])){
        
        $username=$_POST['username'];
        $password=$_POST['password'];
        
        $sql="SELECT * FROM register WHERE username = '$username' 
        AND password = '$password' limit 1";
        
        $result=mysqli_query($conn, $sql);
        
        if( mysqli_num_rows($result) == 1 ) {

            $_SESSION['username'] = $username;
            header('location:redirect.php');
        }

        else{
            echo "You Have Entered Incorrect Password";
            exit();
        }
        
    }
}

?>

</body>
</html>