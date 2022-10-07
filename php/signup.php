 <?php
	if(isset($_POST["submit"])){
		$fullname = $_POST["name"];
		$birthday = strtotime($_POST["birthday"]);
		$birthday = date('Y-m-d', $birthday);
		$username = $_POST["username"];
		$password = $_POST["password"];

		require_once "connect.php";
		require_once "function.php";
	
		if (usernameexist($conn, $username) !== false ){
			header("location: ../index.php?error=unametaken");
			exit();
		}
		createUser($conn, $fullname, $birthday, $username, $password);
	}
	else{
		header("location: ../index.php/ERROR");
	}