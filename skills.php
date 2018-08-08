<?php
/**
 * Database connection and Contacts Query.
 */
	require "dbconfig.php";

	try {
		$connection = new PDO(
						    'mysql:host=localhost;
							dbname=phpdemodb;
							charset=utf8',
						    $username,
						    $password);

		//Optional Sleep.
		//sleep(5);

		//$sql = "SELECT * FROM contacts";
		$sql = $connection->prepare('SELECT * FROM skills');
		$sql->execute();
		$result = $sql->fetchAll();
		
		//Calculate the number of rows to be displayed.
		$numberofrows = $sql->rowCount();
	}	
	// Display errors if there is an issue connecting to the database.
	catch (PDOException $e) {
	    print "Error!: " . $e->getMessage() . "<br/>";
	    die();
	}

	// close connection to the database.
	$sql = null;
	$connection = null;

	// Optional sleep
	//sleep(60);
?>

<?php $title = 'Skills'; ?>
<?php $currentPage = 'Skills'; ?>
<?php include('head.php'); ?>
<?php include('navbar.php'); ?>

		<div class="container">
			
			<div class="starter-template">
		    	<h1>Skills</h1>
		    	<p class="lead">The following is a quick list of my skills.</p>
		    </div>

		    <?php 
		    	//Optional - Display the number of skills.
		    	//print ("The database has $numberofrows rows. \n"); 
		    ?>

		    <?php  
			    	// If there is any data in the database, let's display it in a table.

					if ($numberofrows > 0) { ?>
				<table class="table">
		            <thead>
		                <tr>
		                    <th>#</th>
		                    <th>Skill</th>
		                    <th>Expert Level<br> Out of 10.</th>
		                </tr>
		            </thead>
		            <tbody>
		        <?php foreach ($result as $row) { ?>
		            <tr>
		                <th scope="row"><?php echo ($row["id"]); ?></th>
		                <td><?php echo ($row["skill"]); ?></td>
		              	<td><?php echo ($row["level"]); ?></td>
		            </tr>
		        <?php } ?>
		        </tbody>
		    </table>
	    <?php } else { ?>
	        <blockquote>No skills are located in the database. Please contact Freddie to get the accurate list of skills.</blockquote>
	    <?php } ?> 	    	
			
		</div>

<?php include('footer.php'); ?>