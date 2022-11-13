<!DOCTYPE html>
<html lang="en">
<?php

session_start();
if(!isset($_SESSION['userid']))
{
header("Location: index.php");
}
else{
    require("user.php");
    $id=$_SESSION['userid'];
    $user=new User();
}
?>
<head>
   
       <link rel="stylesheet" href="./login/profile.css">
    

</head>


<body>
    <div class="main-content">
        <!-- Top navbar -->
        <nav class="navbar navbar-top navbar-expand-md navbar-dark" id="navbar-main">
            <div class="container-fluid">
                <!-- Brand -->
                <a class="h4 mb-0 text-white text-uppercase d-none d-lg-inline-block"
                    href="shop.php" >Main Page</a>
              
            </div>
        </nav>
        <!-- Header -->
        <div class="header pb-8 pt-5 pt-lg-8 d-flex align-items-center"
            <!-- Mask -->
            <span class="mask bg-gradient-default opacity-8"></span>
            <!-- Header container -->
            <div class="container-fluid d-flex align-items-center">
                <div class="row">
                    <!-- <div class="col-lg-7 col-md-10">
                        <a href="#!" class="btn btn-info">Edit profile</a>
                    </div> -->
                </div>
            </div>
        </div>
        <!-- Page content -->
        <div class="container-fluid mt--7">
            <div class="row">
              
                <div class="col-xl-8 order-xl-1">
                    <div class="card bg-secondary shadow">
                        <div class="card-header bg-white border-0">
                            <div class="row align-items-center">
                                <div class="col-8">
                                    <h3 class="mb-0">My account</h3>
                                </div>
                                <div class="col-4 text-right">
                                    <a href="delete.php" class="btn btn-sm btn-primary">Delete account</a>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <?php
                            $row=$user->ViewUser($id);
                            ?>
                            <form action="update.php" method="post">
                                <h6 class="heading-small text-muted mb-4">User information</h6>
                                <div class="pl-lg-4">
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="form-group focused">
                                                <label class="form-control-label" for="input-username">User Name</label>
                                                <input type="text" name="username"
                                                    class="form-control form-control-alternative" placeholder="User Name"
                                                    value="<?php printf($row['name']); ?>">
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label class="form-control-label" for="input-email">Email
                                                    address</label>
                                                <input type="email" name="email"
                                                    class="form-control form-control-alternative"
                                                    placeholder="<?php printf($row['email']); ?>">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="form-group focused">
                                                <label class="form-control-label" for="input-first-name">Gender
                                                    </label>
                                                <input type="text" name="gender"
                                                    class="form-control form-control-alternative"
                                                    placeholder="<?php printf($row['gender']); ?>" >
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group focused">
                                                <label class="form-control-label" for="input-last-name">Phone Number
                                                    </label>
                                                <input type="text" name="phone"
                                                    class="form-control form-control-alternative"
                                                    placeholder="<?php printf($row['phone'])?>" >
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <hr class="my-4">
                                <!-- Address -->
                                <h6 class="heading-small text-muted mb-4">Contact information</h6>
                                <div class="pl-lg-4">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group focused">
                                                <label class="form-control-label" for="input-address">Address</label>
                                                <input name="address" class="form-control form-control-alternative"
                                                    placeholder="Home Address"
                                                    value="<?php printf($row['address']); ?>"
                                                    type="text">
                                            </div>
                                        </div>
                                    </div>
                                    
                                </div>
                                <div class="container-fluid d-flex align-items-center">
                <div class="row">
                    <div class="col-lg-7 col-md-10">
                    <div class="form-group focused">
                            <button class="btn btn-primary" type="submit">Edit Profile</button>
                                            </div>
                        
                    </div>
                </div>
            </div>
                                
                                <!-- Description -->
                                
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <footer class="footer">
        <div class="row align-items-center justify-content-xl-between">
            <div class="col-xl-6 m-auto text-center">
                
            </div>
        </div>
    </footer>
</body>
</html>