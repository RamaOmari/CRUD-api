<?php
//update user method=PUT

include("./conn.php");





if($_SERVER['REQUEST_METHOD'] == 'PUT'){
//ID
    $url=$_SERVER['REQUEST_URI'];
    $urlarray=explode('/',$url);
    $id=end($urlarray);



    $sql="SELECT * FROM `apitab` WHERE `id`=$id";
    $query=mysqli_query($conn,$sql);


    if(mysqli_num_rows($query)> 0){
        //get data 
        $data=file_get_contents("php://input");
        $userData=json_decode($data); 
        $name=$userData['name'];
       // $email=$userData['email'];
        //$password=$userData['password'];
       // $id=$userData['id'];


        $updata_sql="UPDATE `api` SET   `name`=$name WHERE `id`=$id";
        mysqli_query($conn,$updata_sql);
        echo json_encode('user updated sucessfully');
    }else{
        echo json_encode('no users found');
        http_response_code(404);

    }
    
}else{
    http_response_code(405);

}




?>