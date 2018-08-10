<body>
	<nav class="navbar navbar-inverse">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="/">Freddie Stewart's PHP MySQL Demo Project</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
		    	<ul class="nav navbar-nav navbar-right">
				    <?php
				        // Define each name associated with an URL
				        $urls = array(
				            'Home' => '/',
				            'References' => '/references.php',
				            'Skills' => '/skills.php',
				            'Contact' => '/contact.php'
				        );

				        foreach ($urls as $name => $url) {
				            print '<li '.(($currentPage === $name) ? ' class="active" ': '').
				                '><a href="'.$url.'">'.$name.'</a></li>';
				        }
				    ?>
				</ul>
		    </div><!--/.nav-collapse -->
		</div>
	</nav>