<?php 
  // load one time.
  // Notice that this is using the file system and not the URL.
  // Always use static strings in require functions for security.
  require_once('initialize.php'); 
?>

<?php $title = 'Home'; ?>
<?php $currentPage = 'index'; ?>
<?php include(SHARED_PATH . '/head.php'); ?>
<?php include(SHARED_PATH . '/navbar.php'); ?>

		<div class="container">
			
			<div class="starter-template">
		    	<h1>Welcome</h1>
		    	<p class="lead">This is a PHP demo that uses two pages to dynamically display database content. Enjoy!</p>
		    </div>
			
		</div>

<?php include(SHARED_PATH . '/footer.php'); ?>