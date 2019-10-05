<?php
echo('<h1>Hello, welcome to the exercise form!</h1>');
?>
<form action="process-insert-exercise-form.php" enctype="multipart/form-data" method="POST">
    Exercise Name: <input type="text" name="exercise"/><br>
    Description: <input type="text" name="description"/><br>
    Demonstration Image: <input type="file" name="demoImg"/><br>
    
    <input type="submit"/>
    <input type="reset"/>
</form>