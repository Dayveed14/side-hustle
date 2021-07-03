<?php
session_start();
?>
<html lang = "en">
<body>
<?php
if (isset($_POST['create']) && !empty($_POST['name']) && !empty($_POST['email']) && !empty($_POST['password'])) {
    $_SESSION['name'] = $_POST['name'];
    $_SESSION['email'] = $_POST['email'];
    $_SESSION['password'] = $_POST['password'];
    echo "New user '".$_SESSION['name']."' created ";
}
?>

<h2> Register Your Details </h2>
<form action="" method="post" name="register">
<p> Name: <input type="text" name="name" placeholder="Name" required /> </p>
<p> Email: <input type="email" name="email" placeholder="Email" required /> </p>
<p> Password: <input type="password" name="password" placeholder="Password" required /> </p>
<input name="create" type="submit" value="Create" />
</form>

<?php

if (isset($_POST['login']) && !empty($_POST['email']) && !empty($_POST['password'])) {				
    if ($_POST['email'] == $_SESSION['email'] && $_POST['password'] == $_SESSION['password']) {                  
        echo 'Login Successful';
    }else {
        $msg = 'Wrong email or password';
    }
}
?>
<h2> Existing User Login </h2>
<form action = "" method = "post">
<h4> <?php echo $msg; ?> </h4>
<p> Email: <input type="email" name="email" placeholder="Email" required /> </p>
<p> Password: <input type="password" name="password" placeholder="Password" required /> </p>
<input name="login" type="submit" value="Login" />
</form>
		     
</body>
</html>