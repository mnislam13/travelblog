<?php

$con = mysqli_connect('localhost','root');

if($con){
	//echo "Connection Successful";
}
else{
	echo "No Connection";
}


mysqli_select_db($con,'170204061');