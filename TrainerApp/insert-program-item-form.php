<?php
    echo("<h1>welcome to the program-item form!</h1>");

    include ('connect-db.php');
    $stmt = $pdo->prepare("SELECT * FROM `user`");
    $stmt->execute();
?>
    <form action="process-insert-program-item-form.php" enctype="multipart/form-data" method="POST">

    <select name="user">
    <?php 
		while($row = $stmt->fetch(PDO::FETCH_ASSOC)) { ?>
			<option value="<?php echo ($row["userId"]); ?>"><?php echo ($row["firstName"]); ?></option>
	<?php } ?>
    </select>

    <select name="exercise" >
    <?php
    $stmt = $pdo->prepare("SELECT * FROM `exercise`");
    $stmt->execute();
        while($row = $stmt->fetch(PDO::FETCH_ASSOC)) { ?>
			<option value="<?php echo ($row["exerciseId"]); ?>"><?php echo ($row["exerciseName"]); ?></option>
    <?php } ?>
    </select>
    
    <input type="submit">
    <input type="reset">
    
    </form>
    
     
