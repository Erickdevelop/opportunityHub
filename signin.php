<?php

require "config.php";

if (isset($_POST['submit'])){
    $uname = $_POST['uname'];
    $pswd = $_POST['password'];

    $sql = "SELECT * FROM subscribers WHERE email = '$uname' AND password = '$pswd'";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);
    $count = mysqli_num_rows($result);

    if ($count > 0) {
        if ($pswd == $row["password"]) {
            // $_SESSION["login"] = true;
            $_SESSION["email"] = $row["email"];
            header("location:index.php");
        } else {
            echo "Wrong password!";
            header("location:index.php");
        }
    } else {
        echo '<script>
                alert("login Failed.Invalid username or password!!!");
                 window.location.href="sign-in.php";
            </script>';
    }
}

?>