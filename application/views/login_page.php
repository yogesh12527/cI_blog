<div class="container">
<div class="col-5 m-auto mb-5 p-5 mt-5 border" style="background-color:#eeeeee70;">
    <div class="text-center fs-1 text-danger fw-bold border-bottom m-auto mb-5 pb-1 w-50">Login</div>
   
    <form action="http://localhost/ci_blog/login" method="post" accept-charset="utf-8">
    <div class="mb-3 m-auto">
        <!-- <label for="login_user_name" class="form-label">User Name :</label> -->
        <input type="text" class="form-control mb-4" name="username" id="login_user_name" placeholder="Username">
        <!-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> -->
        <div class="text-danger"> <?php echo form_error('username'); ?></div>
       
    </div>
    <div class="mb-3 m-auto">
        <!-- <label for="login_user_pass" class="form-label">Password</label> -->
        <input type="password" class="form-control" name="password" id="login_user_pass" placeholder="Password ">
         <div class="text-danger mb-3"><?php echo form_error('password'); ?></div>
        <div  class="text-danger  text-end w-100"><a href="#"><u>Forgot Password</u></a></div>
    </div>
    <div class="mb-3 m-auto  text-center">
    <button type="submit" class="btn btn-danger w-50 mt-3" name="login">Login</button>
    </div>
    </form>
    <div class="mb-3 text-center m-auto pt-3">
         Not an registerd user <a href="registeration"><u class="text-success">click Here</u></a>
    </div>
</div>
</div>





