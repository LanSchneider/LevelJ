<?php
	$host 	= "localhost";
	$user 	= "lanschneider";
	$pass 	= "lanschneider1";
	$dbName	= "lanschneider";

	$connect = mysql_connect( $host, $user, $pass ) or die( mysql_error() );

	mysql_select_db( $dbName, $connect );

	if( $_REQUEST['select'] == "show" )
	{
		$sql = "select * from test";
		$result = mysql_query( $sql, $connect) or die( mysql_error() );
		while( $array = mysql_fetch_array( $result ) )
		{
			echo $array['id'];
			echo "?";
			echo $array['pass'];
			echo "&";
		}
	}
?>