<?php
    echo("<h1>welcome to the login form!</h1>");
?>
    <form action="process-login-user-form.php" enctype="multipart/form-data" method="POST">
    Username: <input type="text" name="username" autofocus /><br>
    Password:<input type="password" name="password"/><br>
    <input type="submit">
    <input type="reset">
    </form>

