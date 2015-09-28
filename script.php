
<?php  
$dbuser= "postgres"; 
$dbname = "postgres";
$dbhost = "107.170.181.175";
$dbpass = "secret";

//connecting to the database
$db_handle = pg_connect("$dbuser" "$dbname" "$dbhost" "$dbpass" );   

if ($db_handle) {   

    echo 'Connection attempt succeeded.';   

} else {   

    echo 'Connection attempt failed.';   

}   

pg_close($db_handle);   

//fetching data from database
$query = "SELECT * FROM  songs"; 

?>