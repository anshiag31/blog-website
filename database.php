<?php 
$name=$_POST["username"];
$password=$_POST["password"];
$Db_name="sahil";
$ser_name="localhost";
$ser_username="root";
$ser_pass="";
$conn = mysqli_connect($ser_name, $ser_username, $ser_pass,"sahil");  
if(! $conn )  
{  
  die('Could not connect: ' . mysqli_connect_error());  
}  
if(isset($_POST['submit']))
{
$insert_query = "INSERT INTO sahil(`name`,`password`)VALUES('$name','$password')";
if(mysqli_query($conn,$insert_query))
{
    echo "resgisterd successfully";
    header("refresh:5,url=index.html");
   
    
}
}


?>  