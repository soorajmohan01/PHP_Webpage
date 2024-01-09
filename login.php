<?php
    $servername="localhost";
    $username="root";
    $password="root";
    $dbname="formData";

    $conn=new mysqli($servername, $username, $password, $dbname);

    if($conn->connect_error){
        die("Connection Failed: ".$conn->connect_error);
    }

    $loginMail=$_POST['email'];
    $loginPass=$_POST['password'];

    $sql="SELECT * FROM userData WHERE email='$loginMail' AND pass='$loginPass'";
    
    $result=mysqli_query($conn,$sql);
    $check=mysqli_fetch_array($result);
    if(isset($check)){
        header('Location: home.html');
    }else{
        echo 'Login Failed<br>';
        echo "<a href=register.html>Register</a>";
    }

    $conn->close();
?>