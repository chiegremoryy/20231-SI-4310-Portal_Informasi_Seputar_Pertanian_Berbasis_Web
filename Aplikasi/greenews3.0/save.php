<?php
include 'conn.php';
$id = $_POST['id'];
$name = $_POST['name'];
$msg = $_POST['msg'];
if($name != "" && $msg != ""){
	$sql = $conn->query("INSERT INTO discussion (comment_utama, pengunjung, post)
			VALUES ('$id', '$name', '$msg')");
	echo json_encode(array("statusCode"=>200));
}
else{
	echo json_encode(array("statusCode"=>201));
}
$conn = null;

?>