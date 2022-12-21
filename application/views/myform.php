<html>
<head>
<title>My Form</title>
</head>
<body>

<?php //echo validation_errors(); ?>

<?php echo form_open('form'); ?>

<h5>Username</h5>
<?php echo form_error('username'); ?>
<input type="text" name="username" value="" size="50" />

<h5>Password</h5>
<?php echo form_error('password'); ?>
<input type="text" name="password" value="" size="50" />

<h5>Password Confirm</h5>
<?php echo form_error('passconf'); ?>
<input type="text" name="passconf" value="" size="50" />

<h5>Email Address</h5>
<?php echo form_error('email'); ?>
<input type="text" name="email" value="" size="50" />

<div><input type="submit" value="Submit" /></div>

</form>

</body>
</html>