<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Form</title>
    <link href="style.css" type="text/css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="jquery-ui.min.css">
	<link rel="stylesheet" href="//code.jquery.com/ui/1.13.2/themes/base/jquery-ui.css">
	<link href="https://code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  </head>
  <body>
    <!-- Body of Form starts -->
  	<div class="container">
	<h1>SIGN IN</h1>
      <form method="POST" autocomplete="on" action="php/signup.php">

       		<!--Name-->
    		<div class="box">
          	<label for="Name" class="fl fontLabel">Name: </label>
    		<div class="fl iconBox">
            	<i class="fa fa-user" id="icons" aria-hidden="true"></i>
            </div>
    			<div class="fr">
    					<input type="text" name="name" placeholder="Name"
              class="textBox" autofocus="on">
    			</div>
    			<div class="clr"></div>
    		</div>
    		<!--Name-->

    		<!---Date of Birth------>
    		<div class="box">
          	<label for="dob" class="fl fontLabel"> Date of Birth: </label>
    			<div class="fl iconBox"><i class="fa fa-calendar" id="icons" aria-hidden="true"></i></div>
    			<div class="fr">
						<input type="text" id="birthday" name="birthday" placeholder="YYYY/MM/DD" class="textBox">
    					<!---<input type="text" name="DOA" maxlength="10" placeholder="Date of Birth" class="textBox">-->
    			</div>
    			<div class="clr"></div>
    		</div>
    		<!---Date of Birth---->


    		<!---Email ID---->
    		<div class="box">
          	<label for="username" class="fl fontLabel"> Username: </label>
    			<div class="fl iconBox"><i class="fa fa-envelope" id="icons" aria-hidden="true"></i></div>
    			<div class="fr">
    					<input type="text" name="username" placeholder="Username" class="textBox">
    			</div>
    			<div class="clr"></div>
    		</div>
    		<!--Email ID----->


    		<!---Password------>
    		<div class="box">
			<label for="password" class="fl fontLabel"> Password </label>
					<div class="fl iconBox"><i class="fa fa-key" id="icons" aria-hidden="true"></i></div>
					<div class="fr">
						<input type="Password" name="password" placeholder="Password" class="textBox">
					</div>
			<div class="clr"></div>
    		</div>
    		<!---Password---->

    		<!---Submit Button------>
    		<div class="box" style="background: #2d3e3f">
    				<input type="Submit" name="submit" class="submit" id="submit" value="SUBMIT">
    		</div>
    		<!---Submit Button----->

			<?php
				//Error prompt
				if(isset($_GET["error"])){
					if($_GET["error"] == "emptyinput"){
						echo '<center><strong><p style="color:red;">Fill all input</p></strong></center>';
					}
					else if($_GET["error"] == "unametaken"){
						echo '<center><strong><p style="color:red;">Username taken</p></strong></center>';
					}
					else if($_GET["error"] == "username"){
						echo '<center><strong><p style="color:red;">Username should only consist of 8 characters and include atleast 1 numeral</p></strong></center>';
					}	
					else if($_GET["error"] == "password_error"){
						echo '<center><strong><p style="color:red;">Password should range between 8-16 characters, and should have atleast one upper case, lower case and number</p></strong></center>';
					}
				}
 			 ?>
      </form>
  </div>
  
	<!-- Discarded propmt
	<div class="prompt" id="prompt">
		<div id="close">
			<p id="X">+</p>
		</div>
		<p id="promptTxt">Prompt!</p>
	</div> -->

	<!-- JQuery -->
  	<script src="https://code.jquery.com/jquery-3.6.0.js"></script>
	<script src="https://code.jquery.com/ui/1.13.2/jquery-ui.js"></script>
	<script>
	  $("#birthday").datepicker({
		  dateFormat: "yy-mm-dd",
		  changeMonth: true,
		  changeYear: true,
		  showOtherMonths: true,
		  selectOtherMonths: true,
		  yearRange: '1990:2050',
	  });

	//Discarded prompt functions 
	/*document.getElementById("submit").onclick = function(){prompt()};
	document.getElementById("X").onclick = function(){close()};

	function prompt(){
		document.getElementById("prompt").style.visibility = "visible";
	}
	function close(){
		document.getElementById("prompt").style.visibility = "hidden";
	}*/
  </script>
  <!--Body of Form ends--->

  </body>
</html>
