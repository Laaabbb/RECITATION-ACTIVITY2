 <?php
	//Submit
	if(isset($_POST["submit"])){
		$fullname = $_POST["name"];
		$birthday = strtotime($_POST["birthday"]);
		$birthday = date('Y-m-d', $birthday);
		$username = $_POST["username"];
		$password = $_POST["password"];

		require_once "connect.php";
		require_once "function.php";

		//Header error
		if(emptyFieldS($fullname, $birthday, $username, $password) !== false){
			header("location: ../index.php?error=emptyinput");
			exit();
		}

		if(invalidUsername($username) !== false){
			header("location: ../index.php?error=username");
			exit();
		}

		if(invalidPass($password) !== false){
			header("location: ../index.php?error=password_error");
			exit();
		}
	
		if(usernameexist($conn, $username) !== false ){
			header("location: ../index.php?error=unametaken");
			exit();
		}

		createUser($conn, $fullname, $birthday, $username, $password);
	}
	else{
		header("location: ../index.php/ERROR");
	}