<?php
require "config.php";
if ($_SERVER['REQUEST_METHOD'] == "POST" && isset($_POST["submit"])) {

    // $conn=mysqli_connect('localhost','Erick','Rickie','signup') or die('Connection Failed'.mysqli_connect_error());
    if (isset($_POST['name']) && isset($_POST['email']) && isset($_POST['title']) && isset($_POST['comment']) && isset($_POST['submit'])) {
        $name = ($_POST["name"]);
        $email = ($_POST["email"]);
        $title = ($_POST["title"]);
        $comment = ($_POST["comment"]);
        $submit = ($_POST['submit']);

        // -- insert to database
        $sql = "insert into comments(Name,Email,Title,Comment) values ('$name','$email','$title','$comment')";
        $query = mysqli_query($conn, $sql);
        if ($query) {
            echo '<script> alert("Successfully Subscribed!") </script>';
        } else {
            echo '<script> alert("Not Subscribed! Please Try Again!!") </script>';
        }
    }
}
