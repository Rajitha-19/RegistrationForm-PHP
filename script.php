<?php
    $servername = '127.0.0.1';
    $username   = "root";
    $password   = "";
    $database="userdetails";

    // checking the database connection

    $conn = mysqli_connect($servername,$username,$password,$database);
    if(!$conn)
        die("Connection failed: " . mysqli_connect_error());
    else   
        echo "Successfully Connected";
        echo "<br>";

    if($_SERVER['REQUEST_METHOD']=="POST") {
        $name=$_POST['name'];
        $pwd=$_POST['pwd'];
        $email=$_POST['email'];
        $PhoneNumber=$_POST['PhoneNumber'];

        $sql="INSERT INTO `users` (`name`,`pwd`,`email`,`PhoneNumber`) VALUES ('$name','$pwd','$email','$PhoneNumber')";

        $query=mysqli_query($conn,$sql);

        // if the query is inserted successfully.

        if($query){
            echo "Successfully inserted user information..";
            echo "<br><br>";
            //printing the details of user
            echo "The user details are :";
            echo "<br><br>";
            echo "Username = $name";
            echo "<br>";
            echo "Password = $pwd";
            echo "<br>";
            echo "Email= $email";
            echo "<br>";
            echo "PhoneNumber= $PhoneNumber";
            echo "<br>";
        }
        else{
            echo "oops! Error Occurred";
        }
    }
?>
