<?php
function loginHTML() {
	require 'src/connect.php';

	if(isset($_POST['log_username'])) {
		$username=$_POST['log_username'];
		$password=$_POST['log_password'];

		$sql="select * from Users where username='".$username."'AND password='".$password."' limit 1";
		$result=$conn->query($sql);
		if($result->num_rows==1){
			echo " You Have Successfully Logged in";
			exit();
		} else {
			echo "You Have Entered Incorrect Password";
			exit();
		}
	}
}
?>