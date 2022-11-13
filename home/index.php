<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Login Page with Background Image Example</title>
  <link rel="stylesheet" href="./login/loginstyle.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.0.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" />
  <style>
    @mixin clearfix() {
  &::after {
    display: block;
    content: "";
    clear: both;
  }
}

// Usage as a mixin
.element {
  @include clearfix;
}

.main {
  /* border: 1px solid #4287f5; */
  height: 250px;
  width: 420px;
  position: relative;
  
}

.column1 {
  color: #4287f5;
  text-align: center;
}

.column2 {
  text-align: center;
  width: 350px;
  position: relative;
}

#bottom {
  position: absolute;
  bottom: 0;
  left: 0;
}
a:link {
  color: orangered;
}

/* visited link */
a:visited {
  color: green;
}

/* mouse over link */
a:hover {
  color: hotpink;
}

/* selected link */
a:active {
  color: blue;
}
    </style>

</head>
<body>
<!-- partial:index.partial.html -->
<div id="bg"></div>
<div class="main">
<div class="column1">
<form action="login.php" method="post" >
  <div class="form-field">
    <input type="text" name="username" placeholder="Username" required/>
  </div>
  
  <div class="form-field">
    <input type="password" name="password" placeholder="Password" required/>                        
   </div>
  
  <div class="form-field">
    <button class="btn" type="submit">LOGIN</button>
  </div>
</form>
<!-- partial -->
</div>
<div class="column2">
  <p>Do not have a account <a href="registration.php">Register</a></p>

<div class="bg-info clearfix">
      <?php
      if (isset($_GET['q'])) {?>
      <!-- <div class="alert alert-danger" role="alert"> -->
      <div class="alert alert-danger" role="alert">
          <a href="#" class="close" data-dismiss="alert" aria-label="close">x</a>
          <strong>Error!</strong> Failed to login Try again
        </div>
        </div>
        <?php }?>
        <?php
       if (isset($_GET['q1']))  
       { ?>
        <div class="alert alert-success" role="alert">
          <a href="#" class="close" data-dismiss="alert" aria-label="close">x</a>
          <strong>Success!</strong> registration succesful
        </div>
        <?php }?>

    <!-- </div> -->

</div>
</body>
</html>
