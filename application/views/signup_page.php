<div class="container">
   
    <div class="col-8 m-auto mb-5 p-5 mt-5 border" style="background-color:#eeeeee70;">
        <div class="text-center fs-1 text-danger fw-bold border-bottom m-auto mb-5 pb-1 w-50">Registration</div>
            <form action="http://localhost/ci_blog/registeration" method="post" accept-charset="utf-8">
                <div class="mb-3 w-75 m-auto">
                    <label for="reg_f_name" class="form-label">First Name :</label>
                    <input type="text" class="form-control" name="reg_f_name" id="reg_f_name" value="<?php echo set_value('reg_f_name'); ?>">    
                    <div class="text-danger"><?php echo form_error('reg_f_name'); ?></div> 
                </div>
                <div class="mb-3 w-75 m-auto">
                    <label for="reg_l_name" class="form-label">Last Name :</label>
                    <input type="text" class="form-control" name="reg_l_name" id="reg_l_name" value="<?php echo set_value('reg_l_name'); ?>">   
                    <div class="text-danger"><?php echo form_error('reg_l_name'); ?></div>    
                </div>
                <div class="mb-3 w-75 m-auto">
                    <label for="reg_user_email" class="form-label">Email :</label>
                    <input type="email" class="form-control" name="reg_user_email" id="reg_user_email" value="<?php echo set_value('reg_user_email'); ?>">   
                    <div class="text-danger"><?php echo form_error('reg_user_email'); ?></div>    
                </div>
                <div class="mb-3 w-75 m-auto">
                    <label for="register_user_name" class="form-label">User Name :</label>
                    <input type="text" class="form-control" name="new_username" id="register_user_name" value="<?php echo set_value('new_username'); ?>">
                    <div class="text-danger"><?php echo form_error('new_username'); ?></div>     
                </div>
                <div class="mb-3 w-75 m-auto">
                    <label for="reg_user_pass" class="form-label">Password</label>
                    <input type="password" class="form-control" name="new_user_password" id="reg_user_pass">
                    <div class="text-danger"><?php echo form_error('new_user_password'); ?></div>
                </div>
                <div class="mb-3 w-75 m-auto">
                    <label for="reg_user_pass_conf" class="form-label">Retype Password</label>
                    <input type="password" class="form-control" name="passconf" id="reg_user_pass_conf" value="" size="50" />
                    <div class="text-danger"><?php echo form_error('passconf'); ?></div>
                </div>
                <div class="mb-3 w-75 m-auto  text-center">
                    <button type="submit" class="btn btn-danger w-50 mt-3" name="register">Register</button>
                </div>
            </form>

        <div class="mb-3 text-center m-auto pt-3">
            Already have an account <a href="login"><u class="text-success">click Here</u></a>
        </div>

    </div>

</div>





