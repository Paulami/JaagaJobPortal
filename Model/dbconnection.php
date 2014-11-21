<?php

function create_connection()
{
	$dbcon = new mysqli('localhost','root','','jobs');
	if ($dbcon->connect_errno == 0) {
		//echo "My sql Connected";
	}
			else {
      		echo "Not connected";
			}
	return $dbcon;
}

?>

