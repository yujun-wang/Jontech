<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <link href="css/bootstrap2.css" rel="stylesheet">
	<link href="css/user.css" rel="stylesheet">
	<script src="js/jquery.min.js"></script>
	<!-- Google Maps API-->
	<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>
	<!-- gmap3 plugins -->
	<script type="text/javascript" src="js/gmap3.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.validate.min.js"></script>
    <script src="js/app.js"></script>

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
	<script>
		$(function() {
		$("#map-demo").gmap3({
			marker:{
			  address: "P.O Box 186, Varsity Lakes, QLD 4227"
			},
			map:{
			  options:{
				zoom: 14
			  }
			}
		  });
			 
		});
	</script>
  </head>

  <body>

    <div class="container">

      <div class="masthead">
        <h3 class="text-muted">JONTECH Consulting</h3>
        <ul class="nav nav-justified">
         <li><a href="index.html">Home</a></li>
		  <li><a href="about.html">About Us</a></li>
          <li><a href="services.html">Services</a></li>
          <li><a href="portfolio.html">Portfolio</a></li>
          <li class="active"><a href="#">Contact Us</a></li>
        </ul>
      </div>

     <h1 class="page-header">Contact Us</h1>
		<div class="row">
			<div class="col-lg-6">
				<p><h4>If you would like to know more about the services JONTECH Consulting can provide please contact us on</h4>
				</p>
				<div class="row"><div class="col-lg-10"><div class="alert alert-info"><p>P.O Box 186, Varsity Lakes, QLD 4227</p></div></div></div>
				<div id="map-demo"></div>
			</div>
			<div class="col-lg-6">
				 <form class="contact-us form-horizontal" method="post">
					<legend>Contact Form</legend>		
					<div class="control-group">
						<label class="control-label">Name</label>
						<div class="controls">
							<div class="input-prepend">
							<span class="add-on"><i class="icon-user"></i></span>
								<input type="text" class="input-xlarge" name="name" placeholder="Name">
							</div>
						</div>
					</div>
					<div class="control-group">
						<label class="control-label">Email</label>
						<div class="controls">
							<div class="input-prepend">
							<span class="add-on"><i class="icon-envelope"></i></span>
								<input type="text" class="input-xlarge" name="email" placeholder="Email">
							</div>
						</div>	
					</div>
					<div class="control-group">
						<label class="control-label">Phone</label>
						<div class="controls">
							<div class="input-prepend">
							<span class="add-on"><i class="icon-globe"></i></span>
								<input type="text" id="phone" class="input-xlarge" name="phone" placeholder="Phone">
							</div>
						</div>
					</div>
					<div class="control-group">
						<label class="control-label">Comment</label>
						<div class="controls">
							<div class="input-prepend">
							<span class="add-on"><i class="icon-pencil"></i></span>
								<textarea name="comment" class="span4" rows="4" cols="80" placeholder="Comment (Max 200 characters)"></textarea>
							</div>
						</div>
					</div>
					<p>&nbsp;</p>
					<div class="control-group">
					  <div class="controls">
						<button type="submit" class="btn btn-primary">Submit</button>
						<button type="button" class="btn">Cancel</button>
					  </div>	
					</div>
				  </form>
			</div>
		</div>
		<p>&nbsp;</p>
		<p>&nbsp;</p>
       <!-- Site footer -->
		<div id="footer">
		  <div class="container">
			<div class="col-md-12"><p class="text-muted" style="text-align:right;">&copy; JONTECH Consulting 2014 &nbsp;</p></div>
		  </div>
		</div>

    </div> <!-- /container -->

	
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
	
  </body>
</html>