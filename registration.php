<?php
    $servername="localhost";
    $username="root";
    $password="root";
    $dbname="formData";

    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error){
        die("Connection Failed: " . $conn->connect_error);
    }

    $frmName = $_POST['name'];
    $frmEmail = $_POST['email'];
    $frmPass = $_POST['password'];

    $query="SELECT userid FROM  userData WHERE email='$frmEmail'";

    $result=$conn->query($query);
    
    if(mysqli_num_rows($result)>0){
        echo "The user already exists<br>";
        echo "<a href='index.html'>Login Page</a>";
    }else{

        $sql="INSERT INTO userData (clientname,email,pass) VALUES ('$frmName','$frmEmail','$frmPass')";

        if(mysqli_query($conn,$sql)){
            echo "New record created successfully<br>";
            echo "<a href='index.html'>Login Page</a>";
        }else{
            echo "Error: ". $sql . "<br>" . $conn->error;
        }
    }

    $conn->close();
?>