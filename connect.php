<?php

$name= $_REQUEST['name'];
$email= $_REQUEST['email'];
$subject= $_REQUEST['subject'];
$message= $_REQUEST['message'];
if(empty($name) || empty($email) || empty($subject) || empty($message) ){
    echo " please fill ";
}
else{
    mail("lyfbubble.01@gmail.com" , "my mail", $message , "From: $name <$email>");
    echo "submitted successfully";
}

/* $server ="localhost";
$username = "root";
$password = "";
$dbname= "insert";


$conn = mysqli_connect($server , $username , $password , $dbname );
if(isset($_POST['submit'])){
    if(!empty($_POST['name']) && !empty($_POST['email']) && !empty($_POST['subject']) && !empty($_POST['message'])){
    $name = $_POST['name'] ;
    $email = $_POST['email'] ;
    $subject = $_POST['subject'] ;
    $message = $_POST['message'] ;

    $query = "insert into form(name,email,subject,message) values('$name' ,'$email', '$subject' , '$message' )";

    $run = mysqli_query($conn,$query) or die(mysqli_error());
    if($run){
        echo "submitted successfully";
    }
    else{
        echo " not submitted";
    }

    }
    else{
        echo" all feilds required";
    }
} */

?>