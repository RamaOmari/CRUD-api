<?php
//add user method=POST
//رح استقبل الداتا
//method=post
//include("./conn.php");

echo "<pre>";
print_r($_POST);
echo "</pre>";


if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $name=$_POST['name'];
    $email=$_POST['email'];
    $password=$_POST['password'];
    $id=$_POST['id'];
   
    $sql="INSERT INTO `apitab` (`name`, `email`, `password` ,`id`) VALUES('$name','$email','$password','$id')";
    $query=mysqli_query($conn,$sql);
    echo  json_encode(' user added sucessfully');


}else{
    http_response_code(405);

}



?>