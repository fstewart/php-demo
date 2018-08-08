<?php
/**
 * Database connection and Contacts Query.
 */
	// require "dbconfig.php";

	// try {
	// 	$connection = new PDO(
	// 					    'mysql:host=localhost;
	// 						dbname=phpdemodb;
	// 						charset=utf8',
	// 					    $username,
	// 					    $password);

	// 	//Optional Sleep.
	// 	//sleep(5);

	// 	//$sql = "SELECT * FROM contacts";
	// 	$sql = $connection->prepare('SELECT * FROM skills');
	// 	$sql->execute();
	// 	$result = $sql->fetchAll();
		
	// 	//Calculate the number of rows to be displayed.
	// 	$numberofrows = $sql->rowCount();
	// }	
	// // Display errors if there is an issue connecting to the database.
	// catch (PDOException $e) {
	//     print "Error!: " . $e->getMessage() . "<br/>";
	//     die();
	// }

	// // close connection to the database.
	// $sql = null;
	// $connection = null;

	// // Optional sleep
	// //sleep(60);
?>

<?php $title = 'Contact'; ?>
<?php $currentPage = 'Contact'; ?>
<?php include('head.php'); ?>
<?php include('navbar.php'); ?>

		<div class="container">
			
			<div class="col-md-12">
          <div class="card flex-md-row mb-4 shadow-sm h-md-250">
            <div class="card-body d-flex flex-column align-items-start">
              <strong class="d-inline-block mb-2 text-success">Contact</strong>
              <h3 class="mb-0">
                <a class="text-dark" href="#">Freddie Stewart</a>
              </h3>
              <div class="mb-1 text-muted">205.534.9105</div>
              <p class="card-text mb-auto">Kennesaw, GA</p>
              <a href="mailto:info@freddiestewart.com">info@freddiestewart.com</a>
            </div>
          </div>
        </div> 	
			
		</div>

<?php include('footer.php'); ?>