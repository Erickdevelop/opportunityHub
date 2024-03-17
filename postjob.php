<?php
require "config.php";
if($_SERVER['REQUEST_METHOD']=="POST" && isset($_POST["submit"])){

    // $conn=mysqli_connect('localhost','Erick','Rickie','signup') or die('Connection Failed'.mysqli_connect_error());
    if(isset($_POST['title']) && isset($_POST['category']) && isset($_POST['name']) 
    && isset($_POST['email']) && isset($_POST['website']) && isset($_POST['location'])
    && isset($_POST['type']) && isset($_POST['tags']) && isset($_POST['salary'])
    && isset($_POST['experience']) && isset($_POST['description'])){
        $title=($_POST["title"]);
        $category=($_POST['category']);
        $name=($_POST['name']);
        $email=($_POST['email']);
        $website=($_POST['website']);
        $location=($_POST['location']);
        $type=($_POST['type']);
        $tags=($_POST['tags']);
        $salary=($_POST['salary']);
        $experience=($_POST['experience']);
        $decripttion=($_POST['decription']);

        // -- insert to database
        $sql= "insert into jobs(title,category,CompanyName,CompanyEmail,CompanyWebsite,location,JobType,JobTags,salary,experience,description) values ('$title','$category','$name','$email',
        '$website','$location','$type','$tags','$salary','$experience','$description')";
        $query=mysqli_query($conn,$sql);
        if($query){
            echo '<script>
                    alert("Job Successfully Posted!!!");
                    window.location.href="job-list.php";
                </script>';
        }else{
            echo '<script>
                    alert("Job Not Posted.Please try again!!!");
                    window.location.href="post-job.php";
                </script>';
        }
    }
}
?>