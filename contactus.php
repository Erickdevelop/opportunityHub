<?php
require "config.php";
if ($_SERVER['REQUEST_METHOD'] == "POST" && isset($_POST["submit"])) {

    // $conn=mysqli_connect('localhost','Erick','Rickie','signup') or die('Connection Failed'.mysqli_connect_error());
    if (isset($_POST['name']) && isset($_POST['email']) && isset($_POST['number']) && isset($_POST['subject']) && isset($_POST['message']) && isset($_POST['submit'])) {
        $name = ($_POST["name"]);
        $email = ($_POST["email"]);
        $number = ($_POST["number"]);
        $subject = ($_POST["subject"]);
        $message = ($_POST['message']);
        $submit = ($_POST['submit']);

        // -- insert to database
        $sql = "insert into contact(Name,Email,Number,Subject,Message) values ('$name','$email','$number','$subject','$message')";
        $query = mysqli_query($conn, $sql);
        if ($query) {
            echo '<script> alert("Message Successfully Sent! Opportunity Hub for You!")
            window.location.href="contact.php";
            </script>';
        } else {
            echo '<script> alert("Message Not Sent! Please Try Again!!") 
            window.location.href="contact.php";
            </script>';
        }
    }
}
