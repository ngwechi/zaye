<!DOCTYPE html>
<html>
  <head>
    <title>You can start with Bootstrap 3</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
    <?php include("include_stylesheet.php"); ?>
    

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
  </head>
  <body id="home">
  	<section class="container">
  		<div class="content row">
  			<section class="main col col-md-12" style="background-color: #f2f2f2;">
  				<h1>This bundle includes CodeIgniter 2.1.4 and Bootstrap 3.3</h1>
  				
		  				
  				<p>Page rendered in <strong>{elapsed_time}</strong></p>
  				
  				
  				
  				
  				
  				
  			</section>
  			<section class="col col-md-12">
  				<div class="btn-group">
  				  <button type="button" class="btn btn-default">1</button>
  				  <button type="button" class="btn btn-default">2</button>
  				
  				  <div class="btn-group">
  				    <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
  				      Dropdown
  				      <span class="caret"></span>
  				    </button>
  				    <ul class="dropdown-menu">
  				      <li><a href="#">Dropdown link</a></li>
  				      <li><a href="#">Dropdown link</a></li>
  				    </ul>
  				  </div>
  				</div>
  				
  				<div class="input-group">
  				  <span class="input-group-addon">@</span>
  				  <input type="text" class="form-control" placeholder="Username">
  				</div>
  				
  				<div class="input-group">
  				  <input type="text" class="form-control">
  				  <span class="input-group-addon">.00</span>
  				</div>
  				
  				<div class="input-group">
  				  <span class="input-group-addon">$</span>
  				  <input type="text" class="form-control">
  				  <span class="input-group-addon">.00</span>
  				</div>
  				
  			</section>
  			
  		</div>
  	</section>
  	
    
    <?php include("include_javascript.php"); ?>
  </body>
</html>