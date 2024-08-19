<?php

$conn=mysqli_connect("localhost","root","","api");
//ارجع الداتا على شكل json مش HTML
header("content-type: application/json");
//الدومين الي الهم صلاحيه التعامل مع API
header("Access-Aontrol-Allow-Origin:*");


?>
