<?php
    include_once("api.php");

    if($_SERVER['REQUEST_METHOD']==='POST'){
		$uname = $_POST['username'];
		$pass = $_POST['password'];
		//check tbluseraccount if username is existing
		$sql ="SELECT * from tbluseraccount where username='".$uname."'";
		
		$result = mysqli_query($connection,$sql);	
		
		$count = mysqli_num_rows($result);
		$row = mysqli_fetch_array($result);
		

    if ($count != 0 && password_verify($pass, $row[4])){
        // if naa nay concept na log-out log-out or mag add ta
        handleLogIn($row);
      
		header("Location: index.php");
    } else if($count == 0) {
			echo "<script language = 'javascript'>
						$(function(){
                            $('#unameErrorModal').modal('show');
                        })
				  </script>";
		} else {
      echo "<script language = 'javascript'>
						$(function(){
                            $('#username').val('".$uname."');
                            $('#passErrorModal').modal('show');
                        })
				  </script>";
		}
	} 
?>