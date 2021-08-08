<?php
function connect_db() {
    $DB_Host = 'localhost';
    $DB_USER = 'root';
    $DB_PASS = '';
    $DB_NAME = 'phpcrud';
    try {
    	return new PDO('mysql:host=' . $DB_Host . ';dbname=' . $DB_NAME . ';charset=utf8', $DB_USER, $DB_PASS);
    } catch (PDOException $exception) {
    	// If there is an error with the connection, stop the script and display the error.
    	exit('Failed to connect to database!');
    }
}

function crud_header($title) {?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title><?php echo $title?></title>
		<link href="style.css" rel="stylesheet" type="text/css">
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">
	</head>
	<body>
    <nav class="navtop">
    	<div>
    		<h1>Website Title</h1>
            <a href="index.php"><i class="fas fa-home"></i>Home</a>
    		<a href="read.php"><i class="fas fa-address-book"></i>Contacts</a>
    	</div>
    </nav>
<?php 
}
function crud_footer() { ?>
    </body>
</html>
<?php
}
?>
