<?php
   define('DB_SERVER', 'db.cahweb.id');
   define('DB_USERNAME', 'u5864817_pti18_inventaris');
   define('DB_PASSWORD', 'pti18_inventaris');
   define('DB_DATABASE', 'u5864817_pti18_inventaris');
   $db = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);

   $conn = new mysqli(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);

	if ($conn->connect_error) {
    	die("Connection failed: " . $conn->connect_error);
	}
?>