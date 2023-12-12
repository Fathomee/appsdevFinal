<?php
     
    require 'database-connection.php';
 
    if ( !empty($_POST)) {
        // keep track post values
        $name = $_POST['name'];
		$rfid = $_POST['rfid'];

        
		// insert data
        $pdo = Database::connect();
		$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		$sql = "INSERT INTO teacher (name,id,rfid) values(?, ?, ?)";
		$q = $pdo->prepare($sql);
		$q->execute(array($name,$id,$rfid));
		Database::disconnect();
		header("");
    }
?>