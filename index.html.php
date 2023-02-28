
<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
    <head>
    </head>
<body>
    
    
        <h3 >Login </h3>
        
            
            <form action="login.php" method="POST">   
                <h4 class="text-success">Login here...</h4>
                <hr style="border-top:1px groovy #000;">
                <div >
                    <label>Username</label>
                    <input type="text" class="form-control" name="username" />
                </div>
                <div >
                    <label>Password</label>
                    <input type="password" class="form-control" name="password" />
                </div>
                <br />
                <div >
                    <button name="login">Login</button>
                </div>
                <a href="registration.html">Registration</a>
            </form>
        </div>
    </div>
</body>
</html>
