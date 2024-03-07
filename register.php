<?php 
    include("connect.php");
    require_once("includes/header.php");
?>

<section class="CreateNLog">
    <div>
        <p class="headingForm">Register</p>
        <form action="<?php ?>" method="post">
            <div class="formsch">
                <div class="form-floating mb-3">
                    <input type="text" class="form-control" name="firstname" id="firstname" placeholder="First Name" required>
                    <label for="firstname">First Name</label>
                </div>

                <div class="form-floating mb-3">
                    <input type="text" class="form-control" name="lastname" id="lastname" placeholder="Last Name" required>
                    <label for="lastname">Last Name</label>
                </div>

                <div class="form-floating mb-3">
                    <input type="date" class="form-control" id="birthdate" name="birthdate">
                    <label for="birthdate">Birthday:</label>
                </div>
                
                <div class="form-floating mb-3">
                    <input type="email" class="form-control" name="email" id="email" placeholder="Email" required>
                    <label for="email">Email</label>
                </div>

                <div class="form-floating mb-3"> 
                    <input type="text" class="form-control" name="username" id="username" placeholder="Username" required>
                    <label for="username">Username</label>
                </div>

                <div class="form-floating mb-3"> 
                    <input type="password" name="password" class="form-control" id="password" placeholder="Password" required>
                    <label for="password">Password</label>
                </div>
            
                <div class="form-floating mb-3"> 
                    <input type="password" name="cpassword" class="form-control" id="cpassword" placeholder="Confirm Password" required>
                    <label for="cpassword">Confirm Password</label>
                </div>
        
            
                <button id="btnRegister" type="submit" role="button" class="btn btn-outline-warning btn-lg btn-block" value="1">Sign in</button>
            </div>
        </form>

        <p>Already have an account? <a href="login.html" style="color:blue">Log In</a></p>
    </div>
</section>

<footer>
    <nav class="navbar navbar-success bg-success">
        <a class="navbar-brand" href="#">
            Charlene Repuesto
            <br>
            BSCS 2
        </a>
    </nav>
</footer>

<?php	
	if(isset($_POST['btnRegister'])){		
		//retrieve data from form and save the value to a variable
		//for tbluserprofile
		$fname=$_POST['firstName'];		
		$lname=$_POST['lastName'];
		$bdate=$_POST['birthdate'];
		
		//for tbluseraccount
		$email=$_POST['email'];		
		$uname=$_POST['username'];
		$pword=$_POST['password'];
		
		//save data to tbluserprofile			
		$sql1 ="Insert into tbluserprofile(firstname,lastname,birthdate) values('".$fname."','".$lname."', '".$bdate."')";
		mysqli_query($connection,$sql1);
		
		//Check tbluseraccount if username is already existing. Save info if false. Prompt msg if true.
		$sql2 ="Select * from tbluseraccount where username='".$uname."'";
		$result = mysqli_query($connection,$sql2);
		$row = mysqli_num_rows($result);
		if($row == 0){
			$sql ="Insert into tbluseraccount(email_add,username,password) values('".$email."','".$uname."','".$pword."')";
			mysqli_query($connection,$sql);
			echo "<script language='javascript'>
						alert('New record saved.');
				  </script>";
		}else{
			echo "<script language='javascript'>
						alert('Username already existing');
				  </script>";
		}
	}
		

?>
   