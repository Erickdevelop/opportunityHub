<?php
require "config.php";

if ($_SERVER['REQUEST_METHOD'] == "POST" && isset($_POST["submit"])) {

    // $conn=mysqli_connect('localhost','Erick','Rickie','signup') or die('Connection Failed'.mysqli_connect_error());
    if (isset($_POST['email']) && isset($_POST['submit'])) {
        $email = ($_POST["email"]);
        $submit = ($_POST['submit']);

        // -- insert to database
        $sql = "insert into subscriber(Email) values ('$email')";
        $query = mysqli_query($conn, $sql);
        if ($query) {
            echo '<script> alert("Successfully Subscribed!") </script>';
        } else {
            echo '<script> alert("Not Subscribed! Please Try Again!!") </script>';
        }
    }
}
