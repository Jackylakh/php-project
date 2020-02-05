<?php
$conn = new mysqli('localhost','root','','blue');  
if($conn->connect_errno){                         
	echo 'Conection Error';
}

if(isset($_GET['id'])) {
    if($stmt = $conn->query("DELETE FROM contact WHERE id='".$_GET['id']."'")){
        header("location:record.php");
    }
}


?>