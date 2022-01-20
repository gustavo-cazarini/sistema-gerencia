<?php
    include 'myconnect.php';
    session_start();

	$usuario=$_POST['usuario'];
	$senha=$_POST['senha'];
	$check=mysqli_query($conn,"call Sp_login('$usuario', '$senha')");
	if (mysqli_num_rows($check)>0)
	{
		$_SESSION['usuario']=$usuario;
		echo json_encode(array("statusCode"=>200));
	}
	else{
		echo json_encode(array("statusCode"=>201));
	}
	mysqli_close($conn);
?>