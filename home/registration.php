<!DOCTYPE html>
<html lang="en">
	
<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<meta name="description" content="">
        <meta name="keywords" content="">
		<title>Arty - Portfolio Clean 1</title>
		<!-- Favicon -->
        <link href="../assets/images/favicon.png" rel="shortcut icon">
        <!-- <link rel="stylesheet" href="./login/loginstyle.css"> -->
		<!-- CSS -->
		<style>
			*{
			padding: 0;
			margin: 0;
		}
		body{
		  background: url(http://wrbbradio.org/wp-content/uploads/2016/10/grey-background-07.jpg) no-repeat center fixed;
		  background-size: cover;
		}
		
		.container{
			background: #2d3e3f;
			width: 350px;
			height: 400px;
			padding-bottom: 20px;
			position: absolute;
			top:50%;
			left: 50%;
			transform: translate(-50%, -50%);
			margin: auto;
		  padding: 70px 50px 20px 50px;
		}
		
		
		.fl{
			float: left;
		  width: 110px;
		  line-height: 35px;
		}
		
		.fontLabel{
		  color: white;
		}
		
		.fr{
			float: right;
		}
		
		.clr{
			clear: both;
		}
		
		.box{
			width: 360px;
			height: 35px;
			margin-top: 10px;
			font-family: verdana;
			font-size: 12px;
		}
		
		.textBox{
			height: 35px;
			width: 190px;
			border: none;
		  padding-left: 20px;
		}
		
		.new{
		  float: left;
		}
		
		.iconBox{
			height: 35px;
			width: 40px;
			line-height: 38px;
			text-align: center;
		  background: #ff6600;
		}
		
		.radio{
			color: white;
			background: #2d3e3f;
			line-height: 38px;
		}
		
		.terms{
			line-height: 35px;
			text-align: center;
			background: #2d3e3f;
			color: white;
		}
		
		.submit{
			float: right;
			border: none;
			color: white;
			width: 110px;
			height: 35px;
			background: #ff6600;
			text-transform: uppercase;
		  cursor: pointer;
		}
		
		::-webkit-input-placeholder { /* Chrome/Opera/Safari */
		
		}
        a:link {
  color: orange;
}
a:visited {
  color: red;
}
@import url("https://fonts.googleapis.com/css?family=Lato:400,700");
#bg {
  background-image: url('img/background.jpg');
  position: fixed;
  left: 0;
  top: 0;
  width: 100%;
  height: 100%;
  background-size: cover;
  filter: blur(5px);
}
body {
  font-family: 'Lato', sans-serif;
  color: #4A4A4A;
  display: flex;
  justify-content: center;
  align-items: center;
  min-height: 100vh;
  overflow: hidden;
  margin: 0;
  padding: 0;
}
		</style>
		
		
		<meta charset="utf-8">
    <title>Form</title>
    <link href="css/style.css" type="text/css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	</head>
	<html>
  
  <body>
    <!-- Body of Form starts -->
    <div id="bg"></div>
  	<div class="container">
      <form action="regbe.php" method="post" autocomplete="on">
		<!--User name-->
		<div class="box">
			<label for="User Name" class="fl fontLabel"> User Name: </label>
				  <div class="new iconBox">
			  <i class="fa fa-user" aria-hidden="true"></i>
			</div>
				  <div class="fr">
						  <input type="text" name="UserName" placeholder="User Name"
				class="textBox" autofocus="on" required>
				  </div>
				  <div class="clr"></div>
			  </div>
			  <!--User name-->
		  <!---Password------>
		  <div class="box">
		<label for="password" class="fl fontLabel"> Password </label>
			  <div class="fl iconBox"><i class="fa fa-key" aria-hidden="true"></i></div>
			  <div class="fr">
					  <input type="Password" required name="password" placeholder="Password" class="textBox">
			  </div>
			  <div class="clr"></div>
		  </div>
		  <!---Password---->
        <!--First name-->
    		<div class="box">
          <label for="firstName" class="fl fontLabel"> First Name: </label>
    			<div class="new iconBox">
            <i class="fa fa-user" aria-hidden="true"></i>
          </div>
    			<div class="fr">
    					<input type="text" name="firstName" placeholder="First Name"
              class="textBox" autofocus="on" required>
    			</div>
    			<div class="clr"></div>
    		</div>
    		<!--First name-->


        <!--Address-->
    		<div class="box">
          <label for="Address" class="fl fontLabel"> Address: </label>
    			<div class="fl iconBox"><i class="fa fa-user" aria-hidden="true"></i></div>
    			<div class="fr">
    					<input type="text" required name="Address"
              placeholder="Address" class="textBox">
    			</div>
    			<div class="clr"></div>
    		</div>
    		<!--Address-->


    		<!---Phone No.------>
    		<div class="box">
          <label for="phone" class="fl fontLabel"> Phone No.: </label>
    			<div class="fl iconBox"><i class="fa fa-phone-square" aria-hidden="true"></i></div>
    			<div class="fr">
    					<input type="text" required name="phoneNo" maxlength="12" placeholder="Phone No." class="textBox">
    			</div>
    			<div class="clr"></div>
    		</div>
    		<!---Phone No.---->


    		<!---Email ID---->
    		<div class="box">
          <label for="email" class="fl fontLabel"> Email ID: </label>
    			<div class="fl iconBox"><i class="fa fa-envelope" aria-hidden="true"></i></div>
    			<div class="fr">
    					<input type="email" required name="email" placeholder="Email Id" class="textBox">
    			</div>
    			<div class="clr"></div>
    		</div>
    		<!--Email ID----->



    		<!---Gender----->
    		<div class="box radio">
          <label for="gender" class="fl fontLabel"> Gender: </label>
    				<input type="radio" name="Gender" value="Male" required> Male &nbsp; &nbsp; &nbsp; &nbsp;
    				<input type="radio" name="Gender" value="Female" required> Female
    		</div>
    		<!---Gender--->


    		<!--Terms and Conditions------>
    		<div class="box terms">
            <p>Already have a <a href="index.php">login</a></p>
    		</div>
    		<!--Terms and Conditions------>



    		<!---Submit Button------>
    		<div class="box" style="background: #2d3e3f">
    				<input type="Submit" name="Submit" class="submit" value="SUBMIT">
    		</div>
    		<!---Submit Button----->
      </form>
	  <div class="bg-info clearfix">
      <?php
      if (isset($_GET['q'])) {?>
      <!-- <div class="alert alert-danger" role="alert"> -->
      <div class="alert alert-danger" role="alert">
          <a href="#" class="close" data-dismiss="alert" aria-label="close">x</a>
          <strong>Error!</strong> Failed to ster

  
        </div>
        </div>
        <?php }?>
  </div>
  <!--Body of Form ends--->
  </body>
</html>


