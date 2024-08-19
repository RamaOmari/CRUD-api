<?php
//get single users method=GET 

//echo "<pre>";
//print_r($_SERVER );
//echo "</pre>";


include("./conn.php");





if($_SERVER['REQUEST_METHOD'] == 'GET'){

    $url=$_SERVER['REQUEST_URI'];
    $urlarray=explode('/',$url);//اقسم url
    $id=end($urlarray);

    $sql="SELECT * FROM `apitab` WHERE id=$id";
    $query=mysqli_query($conn,$sql);

    if(mysqli_num_rows($query)> 0){
        $users=mysqli_fetch_assoc($query);

        echo json_encode($users );

    }else{
        echo json_encode('no users found');
        http_response_code(404);

    }
    


}else{
    http_response_code(405);

}