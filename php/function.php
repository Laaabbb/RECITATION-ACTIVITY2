<?php 	

	//Empty fields
	function emptyFields($fullname, $birthday, $username, $password){
		$result;
		if(empty($fullname) || empty($birthday) || empty($username) || empty($password)){
			$result = true;
		}
		else{
			$result = false;
		}
		return $result;
	}

	//Check for existing user
	function usernameexist($conn, $username){
		$sql = "SELECT * FROM users WHERE username = ?;";
		$stmt = mysqli_stmt_init($conn);
		if(!mysqli_stmt_prepare($stmt, $sql)){
			header("location: ../index.php?error=stmtfailed");
			exit();
		}
		mysqli_stmt_bind_param($stmt, "s", $username);
		mysqli_stmt_execute($stmt);

		$resultsData = mysqli_stmt_get_result($stmt);

		if ($row = mysqli_fetch_assoc($resultsData)) {
			return $row;
		}
		else{
			$result = false;
			
		}
		return $result;
		mysqli_stmt_close($stmt);
	}

	/*function invalidUsername($username){
		$result;
		if(strlen($username) <= 8){
			if(!preg_match"/^[a-zA-Z]*$/", $username and !preg_match"/^[0-9]*$/", $username){
				$result = true;
			}
		}
		else{
			$result = false;
		}
		return $result;
	}*/

	//Create User
	function createuser($conn, $fullname, $birthday, $username, $password){
		$sql = "INSERT INTO users (fullname, birthday, username, password) VALUES(?, ?, ?, ?);";
		$stmt = mysqli_stmt_init($conn);
		if(!mysqli_stmt_prepare($stmt, $sql)){
			header("location: ../index.php?error=stmtfailed");
			exit();
		}

		$HashedPwd = password_hash($password, PASSWORD_DEFAULT);

		mysqli_stmt_bind_param($stmt, "ssss", $fullname, $birthday, $username, $HashedPwd);
		mysqli_stmt_execute($stmt);
		mysqli_stmt_close($stmt);
		header("location: ../index.php?error=none");
		exit();
	}
