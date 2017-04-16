<?php
// $_SESSION['log'] = true;
if(!isset($_SESSION['log']) && empty($_SESSION['log'])){
	header('location:../project_shop/html/test.html');
}else{
	echo "log in";
}