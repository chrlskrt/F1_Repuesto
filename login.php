<?php
    include("connect.php");
    include_once("includes/header.php");
?>

<section class="CreateNLog">
    <div>
        <p class="headingForm">Log In</p>
        <form action="" method="post">
            <div class="formsch">
                <div class="form-floating mb-3">
                    
                    <input type="text" class="form-control" name="username" id="username" placeholder="Enter username..." required>
                    <label for="username">Username</label>
                </div>
                <div class="form-floating mb-3">
                    
                    <input type="password" class="form-control" name="password" id="password" placeholder="Enter password..." required>
                    <label for="password">Password</label>
                </div>
                <button type="submit" role="button" class="btn btn-outline-dark btn-lg btn-block">Log In</button>

            </div>
        </form>
        <p>Don't have an account? <a href="register.html" style="color:blue">Register</a></p>
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
