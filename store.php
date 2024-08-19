<?php
//add user method=POST
//رح استقبل الداتا
//method=post
include("./conn.php");

 




if($_SERVER['REQUEST_METHOD'] == 'POST'){
    
    $data=file_get_contents("php://input"); //اذا بدي احصل علاي محتوى+
    $userData=json_decode($data); //بتستقيل json وبتحولها الى ارااي
   
    $name=$userData['name'];
    $email=$userData['email'];
    $password=$userData['password'];
    $id=$userData['id'];

    $sql="INSERT INTO `apitab` (`name`, `email`, `password` ,`id`) VALUES('$name','$email','$password','$id')";
    $query=mysqli_query($conn,$sql);
    echo  json_encode(' user added sucessfully');


}else{
    http_response_code(405);

}



?>
 