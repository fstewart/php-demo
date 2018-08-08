<?php

// Database connection to local database hosted on Mamp Pro.
$username="demologin";  //Database username.
$password="Alabama2018";  //Database password.
$database="phpdemodb"; //Database.

mysql_connect(localhost,$user,$password); //Opens a connection to the MySQL server.

@mysql_select_db($database) or die( "Unable to select database");  //Database selection

// Table creation commands
$query=
	"CREATE TABLE contacts (id int(6) NOT NULL auto_increment,first varchar(15) NOT NULL,last varchar(15) NOT NULL,phone varchar(20) NOT NULL,mobile varchar(20) NOT NULL,fax varchar(20) NOT NULL,email varchar(30) NOT NULL,web varchar(30) NOT NULL,PRIMARY KEY (id),UNIQUE id (id),KEY id_2 (id));

	CREATE TABLE skills (id int(6) NOT NULL auto_increment, language varchar(20) NOT NULL, level varchar(15) NOT NULL);";

mysql_query($query); //Sends the MySQL query.

mysql_close(); //Closes the MySQL connection.

?>