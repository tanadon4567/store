<?php
	session_start();
	if(!isset($_SESSION['inLine'])){
			echo "ยังไม่มีนะครับ=" .$_REQUEST['repair_name'];
	}else{
		echo "มีแล้วเยอะเลย";
	}


?>