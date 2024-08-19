<?php
//deletcusers method=DELETE
include("./conn.php");





if($_SERVER['REQUEST_METHOD'] == 'DELETE'){
//مهم اعرف ID
    $url=$_SERVER['REQUEST_URI'];
    $urlarray=explode('/',$url);
    $id=end($urlarray);
    //check if the user exist or not
    $sql="SELECT * FROM `apitab` WHERE id=$id";
    $query=mysqli_query($conn,$sql);
    if(mysqli_num_rows($query)> 0){
        //delet user
        $delet_sql="DELETE FROM `api` WHERE `id`=$id";
        mysqli_query($conn,$delet_sql);
        echo json_encode('user deleted sucessfully');
        

        

    }else{
        echo json_encode('no users found');
        http_response_code(404);

    }
    


}else{
    http_response_code(405);

}



?>