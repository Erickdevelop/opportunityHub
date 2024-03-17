<?php
require "config.php";
if ($_SERVER['REQUEST_METHOD'] == "POST" && isset($_POST["submit"])) {

    // $conn=mysqli_connect('localhost','Erick','Rickie','signup') or die('Connection Failed'.mysqli_connect_error());
    if (
        isset($_POST['uname']) && isset($_POST['email']) && isset($_POST['password']) && isset($_POST['password2']) && isset($_POST['position'])
        && isset($_POST['phone']) && isset($_POST['jobtitle']) && isset($_POST['country'])
        && isset($_POST['city']) && isset($_POST['zipcode']) && isset($_POST['region']) && isset($_POST['age'])
        && isset($_POST['experience']) && isset($_POST['language']) && isset($_POST['skill']) && isset($_POST['facebook'])
        && isset($_POST['twitter']) && isset($_POST['linkedin']) && isset($_POST['github']) && isset($_POST['submit'])
    ) {
        $uname = ($_POST["uname"]);
        $email = ($_POST["email"]);
        $pswd = ($_POST["password"]);
        $password2 = ($_POST["password2"]);
        $position = ($_POST['position']);
        $phone = ($_POST["phone"]);
        $jobtitle = ($_POST["jobtitle"]);
        $country = ($_POST["country"]);
        $city = ($_POST["city"]);
        $zipcode = ($_POST["zipcode"]);
        $age = ($_POST["region"]);
        $age = ($_POST["age"]);
        $experience = ($_POST["experience"]);
        $language = ($_POST["language"]);
        $skill = ($_POST["skill"]);
        $facebook = ($_POST["facebook"]);
        $twitter = ($_POST["twitter"]);
        $linkedin = ($_POST["linkedin"]);
        $github = ($_POST["github"]);
        $submit = ($_POST['submit']);

        // -- insert to database
        $sql = "insert into subscribers(uname,email,password,password2,position,phone,jobtitle,country,
        city,zipcode,region,age,experience,language,skill,facebook,twitter,linkedin,github) values ('$uname','$email','$pswd','$password2','$position'
        ,'$phone','$jobtitle','$country','$city','$zipcode','$region','$age','$experience','$language','$skill','$facebook','$twitter','$linkedin','$github')";
        $query = mysqli_query($conn, $sql);
        if ($query) {
            echo '<script> alert("Successfully Subscribed!") </script>';
        } else {
            echo '<script> alert("Not Subscribed! Please Try Again!!") </script>';
        }
    }
}
