<?php
    $f_name= $_POST['fname'];
    $l_name=$_POST['lname'];
    $username=$_POST['username'];
    $password=$_POST['password'];


    // configuring mysql 
  include("./config.php");
    if (isset($_REQUEST['submit'])){
        // echo "the form is submitted by $f_name $l_name";
        // if($conn){
        //     echo "database connected";
        // }
        // else{
        //     echo "database not connected";
        // }





            $sql = "INSERT INTO users (First_Name,Last_Name,Username,Password)VALUES('$f_name','$l_name','$username','$password')";

            if(mysqli_query($conn,$sql)){
                echo "User $f_name is successfully registered in database";
            }else{
                echo "There is some error";
            }
    }
?>