<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <link type="text/css" rel="stylesheet" href="signup/bootstrap.min.css"/>
        <link type="text/css" rel="stylesheet" href="signup/style.css"/>
        <link type="text/css" rel="stylesheet" href="signup/MainStyles.css"/>

        <title>Register</title>
    </head>
    <body> 
    <?php
//if ($_GET['destroy']=="true") {
//	session_destroy(old);
//}
session_start();
	require_once("functions.php");
		$connection=dbConnect();
		$loginMessage="";
	/*if (isset($_POST["signIn"])) {

		$username=$_POST["username"];
		$password=$_POST["password"];
		

		$query="SELECT password FROM login WHERE loginID = '{$username}'";
		$result= mysqli_query($connection,$query);
		$row=mysqli_fetch_assoc($result);

		if($password==$row["password"]){
			$_SESSION["username"]=$username;
			header("Location: shoppingMain.php");
		}else{
			$loginMessage="Invalid username or password !";
		}
		mysqli_free_result($result);
	}*/

	 if (isset($_POST["signUp"])) {

		$isNew=true;
		$username=$_POST["username"];
		$password=$_POST["password"];
		$fname = $_POST["fname"];
		$lname = $_POST['lname'];
        $email = $_POST['email'];
		$contact = $_POST['contact'];
		$query="SELECT loginID FROM login";
		
		$result= mysqli_query($connection,$query);

		while($row=mysqli_fetch_row($result)){
			if ($username==$row[0]) {
				$loginMessage="Username already exists ! Try Again.";
				$isNew=false;
				break;
			}
		}
		mysqli_free_result($result);

		if($isNew){
			$query="INSERT INTO login(loginID,password,fname,lname,email,contact) VALUES ('{$username}','{$password}','{$fname}','{$lname}','{$email}','{$contact}')";
			mysqli_query($connection,$query);
			$loginMessage="User : ".$username." Registration Succesful!! Please Sign-In";
		}
		$_SESSION["username"]=$username;
	}



?>
      
        <div class="row">
            <div class="box" >
                <div class="centerDiv">   
                    <hr>
                    <h2 class="text-center intro-text">Create new Account</h2>
                    <hr>
                    <form id="createform" role = "form" 
                          action = "<?php echo htmlspecialchars($_SERVER['PHP_SELF']);
        ?>" method = "post">   
                        <div class="form-group">
                            <label>User Name</label> 
                            <input class="form-control input-sm" id="username" type="text" name="username" placeholder="Enter User Name" maxlength="30"/>       
                            <span id="div1"></span>
                        </div>
                        <div class="form-group">
                            <label>First Name</label> 
                            <input class="form-control input-sm" id="fname" type="text" name="fname" placeholder="Enter First Name" maxlength="30"/>       
                            <span id="div2"></span>
                        </div>
                        <div class="form-group">
                            <label>Last Name</label> 
                            <input class="form-control input-sm" id="lname" type="text" name="lname" placeholder="Enter Last Name" maxlength="30"/>       
                            <span id="div3"></span>
                        </div>
                        <div class="form-group">
                            <label>Email</label> 
                            <input class="form-control input-sm" id="email" type="email" name="email" placeholder="Enter email" maxlength="40"/>       
                            <span id="div4"></span>
                        </div>
                        <div class="form-group">
                            <label>Password</label> 
                            <input class="form-control input-sm" type="password" id="password" name="password" placeholder="Enter Password" maxlength="30"/>       
                            <div id="div5"></div>
                        </div>
                        <div class="form-group">
                            <label>Confirm Password</label> 
                            <input class="form-control input-sm" type="password" id="cnfpassword" name="cnfpassword" placeholder="Re Type Password" maxlength="30"/>       
                            <div id="div6"></div>
                        </div>
                        <div class="form-group">
                            <label>Contact No</label> 
                            <input class="form-control input-sm" id="contact" type="tel" name="contact" placeholder="Enter Contact No" maxlength="12"/>       
                            <span id="div7"></span>
                        </div>
                        <div class="form-group">

                            <input type="checkbox" id="checkbox1">
                            I agree to the ShowTime <a href=""> Terms of Service </a>. 

                            <span  id="div8">                
                            </span>
                        </div> 
                        <div id="crdiv">
                        <script>
                        function redirect(){
                        setTimeout("locaion.href = shoppingLogin.php';",1000);
                        }
						</script>
           					
                            <input type="submit" class="btn btn-danger" style="float: right" id="login"  name = "signUp" value="Create"/>    
                        </div>
                            <button><a href="shoppingLogin.php">Login</a></button>
                             <button><a href="home.php">Back</a></button>
                    </form>
                </div>
            </div>
        </div>
        <!-- /.container -->
        
    </body>
    <script type="text/javascript" src="signup/jquery-2.2.3.min.js"></script>
    <script type="text/javascript" src="signup/bootstrap.min.js"></script>
    <script type="text/javascript" src="signup/SignUpScripts.js"></script>
</html>
