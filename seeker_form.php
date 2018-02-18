<?php
	
	if(isset($_POST["submit"])){
		$username =$_POST["user"]; $_SESSION["user"]=$username;
		$password =$_POST["pass"];
		$email = $_POST["email"];
		$contact = $_POST["contact"];
		$interest =$_POST["interest"];
		$location =$_POST["location"];
		$skill =$_POST["skill"];
		$test = $_POST["r"];


		$conn=mysqli_connect("localhost","root","","skillconnect");

		$query = "INSERT INTO `jobseeker` (`seekerID`, `usrname`, `password`, `email`, `contact`, `interest`, `location`, `skill`, `test`) VALUES (NULL,'$username', '$password', '$email', '$contact', '$interest', '$location', '$skill', '$test')";
		$result=$conn->query($query);

		
		echo ("<script>location.href='skillconnect_welcome.php'</script>");
	}

?>
<div style="margin-left:250px;">
	
<form method="post">
	
		
			<input type="text" size="100" id="form-field-1" placeholder="create your username"  name="user" required="true">
			<br><br>
		
		<input type="password" size="100" id="form-field-1" placeholder="create your password" name="pass" required="true">
		<br><br>

		<input type="email" size="100" id="form-field-1" placeholder="email address" name="email" required="true">
		<br><br>

		<input type="text" onkeypress='return event.charCode >= 48 && event.charCode <= 57' size="100" id="form-field-1" placeholder="contact no" name="contact">
		<br><br>

		<input type="text" size="100" id="form-field-1" placeholder="enter your skill" name="skill" required="true">
		<br><br>
		

		
		<input type="text" size="100" id="form-field-1" placeholder="area of interest" name="interest" required="true">
		<br><br>
		

		<input type="text" size="100" id="form-field-1" placeholder="prefered location to work" name="location" required="true">
		<br><br>
		
		do you want to give skilltest?:<br>
		yes:<input type="radio" name="r" value="1" checked="true">
		no:<input type="radio" name="r" value="0"><br><br>

		upload your resume :<input type="file" name="resume"><br><br>
		
		<input type="submit" name="submit" value="signup">
		<a href="login.php"><input type="button" name="login" value="login"></a>

	
</form>




</div>