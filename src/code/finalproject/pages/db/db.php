<?php 

$con = new mysqli(hostname: 'localhost',username:'root',password:'',database:'htu_gym');

if($con){
echo "success connection";
}else{
mysqli(mysql:$con);
}

?>