<header>
	<nav class="navbar navbar-inverse navbar-static-top">
	  <div class="container">
	    
	    <div class="navbar-header">
	      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
	        <span class="sr-only">Toggle navigation</span>
	        <span class="icon-bar"></span>
	        <span class="icon-bar"></span>
	        <span class="icon-bar"></span>
	      </button>
	      <!-- <a class="navbar-brand" href="#">Investigaciones COSITEC</a> -->
	    </div>

	    <!-- Collect the nav links, forms, and other content for toggling -->
	    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
	      <ul class="nav navbar-nav">
	        
	        <li class="dropdown">
	          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
	          	Temas <span class="caret"></span>
	          </a>
	          <ul class="dropdown-menu">
	            <?php echo $nav; ?>
	            <li role="separator" class="divider"></li>
	            <li><a href="#">Separated link</a></li>
	          </ul>
	        </li>

	      </ul>

	

	      <div class="navbar-form navbar-right">
	        <div class="form-group">
	          <input type="text" class="form-control" placeholder="Buscar">
	        </div>
	        <button class="btn btn-default"> <span class="fa fa-search"></span></button>
	      </div>
	      
	    </div>

	    
	  
	  </div>
	</nav>
</header>