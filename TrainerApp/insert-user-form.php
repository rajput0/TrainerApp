<?php
echo('<h1>Hello! welcome to my application!!!</h1>');
?>
<form action="process-insert-user-form.php" enctype="multipart/form-data" method="POST">
    First Name: <input type="text" name="fname"/><br>
    Last Name: <input type="text" name="lname"/><br>
    Email id: <input type="text" name="email"/><br>
    Password: <input type="text" name="password"/><br>
    User Role: <input type ="text" placeholder = "must be an integer" name="userRole"/><br>
    <input type="submit"/>
    <input type="reset"/>
</form>