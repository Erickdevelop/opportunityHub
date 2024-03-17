<?php
require "config.php";

if ($_SERVER['REQUEST_METHOD'] == "POST" && isset($_POST["submit"])) {

    // $conn=mysqli_connect('localhost','Erick','Rickie','signup') or die('Connection Failed'.mysqli_connect_error());
    if (
        isset($_POST['uname']) && isset($_POST['email']) && isset($_POST['password'])
        && isset($_POST['password2']) && isset($_POST['position']) && isset($_POST['name'])
        && isset($_POST['email']) && isset($_POST['phone']) && isset($_POST['jobtitle'])
        && isset($_POST['country']) && isset($_POST['city']) && isset($_POST['zipcode'])
        && isset($_POST['position']) && isset($_POST['mail'])
        && isset($_POST['age']) && isset($_POST['experience']) && isset($_POST['language'])
        && isset($_POST['skill']) && isset($_POST['facebook']) && isset($_POST['twitter'])
        && isset($_POST['linkedin']) && isset($_POST['github']) && isset($_POST['submit'])
    ) {
        $name = ($_POST["name"]);
        $mail = ($_POST["mail"]);
        $uname = ($_POST["uname"]);
        $email = ($_POST["email"]);
        $pswd = ($_POST["password"]);
        $password2 = ($_POST["password2"]);
        $position = ($_POST['position']);
        $email = ($_POST["email"]);
        $submit = ($_POST['submit']);
        $phone = ($_POST['phone']);
        $jobtitle = ($_POST['jobtitle']);
        $country = ($_POST['country']);
        $city = ($_POST['city']);
        $zipcode = ($_POST['zipcode']);
        $region = ($_POST['region']);
        $age = ($_POST['age']);
        $experience = ($_POST['experience']);
        $language = ($_POST['language']);
        $skill = ($_POST['skill']);
        $facebook = ($_POST['facebook']);
        $twitter = ($_POST['twitter']);
        $linkedin = ($_POST['linkedin']);
        $github = ($_POST['github']);

        // -- insert to database
        $sql = "UPDATE subscribers SET name=$name phone='$phone',jobtitle='$jobtitle',country='$country',city='$city',zipcode='$zipcode',region='$region',age='$age',experience='$experience',language='$language',skill='$skill',
        facebook='$facebook',twitter='$twitter',linkedin='$linkedin',github='$github) WHERE name ='$name' AND uname='$uname' AND mail='$email'";
        $query = mysqli_query($conn, $sql);
        if ($query) {
            echo '<script> alert("Successfully Updated!") </script>';
        } else {
            echo '<script> alert("Not Updated! Please Try Again!!") </script>';
        }
    }
}
