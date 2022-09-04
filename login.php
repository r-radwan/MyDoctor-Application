<?php 
session_start();
include("includes/header.php");
include("includes/navbar.php");

?>
 
<div class="py-5">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-5">
            <h4 style="padding: 10px 0px 10px 65px; margin-bottom: 20px;background-color:#13bfbf; color:white">WELCOME TO LOGIN MODULE</h4>
                <?php include('message.php');?>

                <div class="card">
                    <div class="card-header">
                        <h4>Login</h4>
                    </div>
                    <div class="card-body">
                        <form action="logincode.php" method="POST">
                            <div class="form-group mb-3">
                                <label>Email Address</label>
                                <input type="email" name="email" placeholder="Enter Email" class="form-control">
                            </div>
                            <div class="form-group mb-3">
                                <label>Password</label>
                                <input type="password" name="password" placeholder="Enter Password" class="form-control">
                            </div>
                            <div class="form-group mb-3">
                                <button type="submit"name="login_btn" class="btn btn-primary">Login</button>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php 
include("includes/footer.php");
?>