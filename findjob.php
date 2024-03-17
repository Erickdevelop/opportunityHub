<?php

require "config.php";

if (isset($_POST['submit'])){
    $title = $_POST['title'];
    $location=$_POST['location'];
    $category = $_POST['category'];
    $sql = "SELECT * FROM jobs WHERE title = '$uname' OR location = '$location' OR category = '$category'";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);
    $count = mysqli_num_rows($result);

    if ($count > 0) {
        if ($title == $row["title"]) {
            // $_SESSION["login"] = true;
            $_SESSION["location"] = $row["location"];
            header("location:job-details.php");
        } elseif ($location==$row["location"]){
            $_SESSION["location"] = $row["location"];
            header("location:job-details.php");
        }else{
            $_SESSION["category"] = $row["category"];
            header("location:job details.php");
        }
    } else {
        echo '<script>
                alert("No matching job!!!");
                 window.location.href="job-list.php";
            </script>';
    }
}

?>