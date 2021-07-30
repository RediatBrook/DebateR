<?php
include("./html/prelogin.html");
?>
<link rel="stylesheet" href="./css/styles.min.css">

<div class="container">

<div class="card o-hidden border-0 shadow-lg my-5">
    <div class="card-body p-0">
        <!-- Nested Row within Card Body -->
        <div class="row">
            <div class="col-lg-5 d-none d-lg-block bg-login-image"></div>
            <div class="col-lg-7">
                <div class="p-5">
                    <div class="text-center">
                        <h1 class="h4 text-gray-900 mb-4">Create an Account!</h1>
                    </div>
                    <form id="rgform" class="user" action="createaccount.php" method="post">
                        <div class="form-group row">
                            <div class="col-sm-6 mb-3 mb-sm-0">
                                <input type="text" class="form-control form-control-user" id="exampleFirstName"
                                    placeholder="First Name" name="firstname">
                            </div>
                            <div class="col-sm-6">
                                <input type="text" class="form-control form-control-user" id="exampleLastName"
                                    placeholder="Last Name" name="lastname">
                            </div>
                        </div>
                        <div class="form-group">
                            <input type="email" class="form-control form-control-user" id="exampleInputEmail"
                                placeholder="Email Address" name="email">
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-6 mb-3 mb-sm-0">
                                <input type="password" class="form-control form-control-user"
                                    id="exampleInputPassword" placeholder="Password" name="password">
                            </div>
                            <div class="col-sm-6">
                                <input type="password" class="form-control form-control-user"
                                    id="exampleRepeatPassword" placeholder="Repeat Password">
                            </div>
                        </div>
                        <input type="submit" value="Register Account"href="#" class="btn btn-primary btn-user btn-block">
                    </form>
                    <br>
                    <div class="row align-items-center">
                        <div class="text-center col">
                            <a class="small" href="forgot-password.html">Forgot Password?</a>
                        </div>
                        <div class="text-center col">
                                <a class="small" href="register.php">Create an Account!</a>
                        </div>
                    </div>             
                </div>
            </div>
        </div>
    </div>
</div>
</div>
<script src="register.js"></script>