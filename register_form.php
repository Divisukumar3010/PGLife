//[Code for register_form.php]
<html>
    <head>
        <title>Registration Form</title>
    </head>
    <body>
        <h1>Registration</h1>
        <form method="post" action="register_submit.php">
            Name: <input type="text" name="name"/><br/><br/>
            Email: <input type="text" name="email"/><br/><br/>
            Password: <input type="password" name="password"/><br/><br/>
            <input type="submit" name="submit" value="Submit">
        </form>
    </body>
</html>


//[Code for register_submit.php]
<?php
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    echo $name . "<br/>";
    echo $email . "<br/>";
    echo $password . "<br/>";
?>


//[Code for login_form.php]
<html>
    <head>
        <title>Login Form</title>
    </head>
    <body>
        <h1>Login</h1>
        <form method="post" action="login_submit.php">
            Email: <input type="text" name="email"/><br/><br/>
            Password: <input type="password" name="password"/><br/><br/>
            <input type="submit" name="submit" value="Submit">
        </form>
    </body>
</html>


//[Code for login_submit.php]
<?php
    $email = $_POST['email'];
    $password = $_POST['password'];

    echo $email . "<br/>";
    echo $password . "<br/>";
?>
