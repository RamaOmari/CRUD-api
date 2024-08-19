<?php
//get users method=GET 

//echo "<pre>";
//print_r($_SERVER);
//echo "</pre>";

include("./conn.php");


//لو اي حدا بدو يوصل للداتا ي اي ميثود ثانية
if($_SERVER['REQUEST_METHOD'] == 'GET'){
    $sql="SELECT * FROM `apitab`";
    $query=mysqli_query($conn,$sql);
    
    if(mysqli_num_rows($query)> 0){
        $users=mysqli_fetch_all($query,MYSQLI_ASSOC);

        echo json_encode($users );

    }else{
        echo json_encode('no users found');
        //status code 
        http_response_code(404); //not found 

    }
    


}else{
    http_response_code(405); //Method  not allowed

}



?>