<?php
	require_once('initialize.php'); 
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
		$sql = $connection->prepare('SELECT * FROM contacts');
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

<?php $title = 'References'; ?>
<?php $currentPage = 'References'; ?>
<?php include(SHARED_PATH . '/head.php'); ?>
<?php include(SHARED_PATH . '/navbar.php'); ?>

		<div class="container">
			
			<div class="starter-template">
		    	<h1>References</h1>
		    	<p class="lead">Here is a list of my references.</p>

		    	<?php 
		    	//Optional - Display the number of references.
		    	//print ("The database has $numberofrows rows. \n"); 
		    	?>
		    </div>
		    <div class="col-md-12">
			    <?php  

			    	// If there is any data in the database, let's display it in a table.

					if ($numberofrows > 0) { ?>
					<table class="table">
			            <thead>
			                <tr>
			                    <th scope="col">#</th>
			                    <th scope="col">Full Name</th>
			                    <th scope="col">Phone</th>
			                    <th scope="col">Email Address</th>
			                </tr>
			            </thead>
			            <tbody>
			        <?php 
			        	// Loop through the database results and display each contact in a row.
			        	foreach ($result as $row) { ?>
			            <tr>
			                <th scope="row"><?php echo ($row["id"]); ?></th>
			                <td><?php echo ($row["firstname"] . " " . $row["lastname"]); ?></td>
			              	<td><?php echo ($row["phone"]); ?></td>
			                <td><?php echo ($row["email"]); ?></td>
			            </tr>
			        <?php } ?>
			        </tbody>
			    </table>
		    <?php } else { ?>
		        <blockquote>No references found.</blockquote>
		    <?php } ?>
		</div>    	
			
		</div>

<?php include(SHARED_PATH . '/footer.php'); ?>