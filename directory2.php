<?php include 'admin/connection.php'; ?>
<html lang="en" >
<head>
	<meta charset="UTF-8">
	<title>Everyday Straight</title>
	<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css'>
	<link rel="stylesheet" href="css/style.css">
    
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="shortcut icon" type="image/png" href="img/logo.png"/>
</head>
<body>
<!-- partial:index.partial.html -->
<body class="">	
	<div class="navigation-wrap bg-light start-header start-style">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<nav class="navbar navbar-expand-md navbar-light">
					
						<a class="navbar-brand" href="index.html"><img src="img/logo.png" alt=""></a>	
						
						<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
							<span class="navbar-toggler-icon"></span>
						</button>
						
						<div class="collapse navbar-collapse" id="navbarSupportedContent">
							<ul class="navbar-nav ml-auto py-4 py-md-0">
								<li class="nav-item pl-4 pl-md-0 ml-0 ml-md-4 active">
									<a class="nav-link" href="index.html">Home</a>
								</li>
								<li class="nav-item pl-4 pl-md-0 ml-0 ml-md-4 ">
									<a class="nav-link" href="#">Directory</a>
								</li>
								</li>
								<li class="nav-item pl-4 pl-md-0 ml-0 ml-md-4 ">
									<a class="nav-link" href="#">Learn Grammer</a>
								</li>
								<li class="nav-item pl-4 pl-md-0 ml-0 ml-md-4 ">
									<a class="nav-link" href="#">About Our Team</a>
								</li>
							</ul>
						</div>
						
					</nav>		
				</div>
			</div>
		</div>
	</div>
	
	
	<div class="section mt125">
		<div class="">
			<div class="section">
				<div class="container mt168">
					<div class="row">
						<div class="col-md-4">
							<div>
								<div class="row" style="    background-color: #f8f8f8;">
									<div class="col-md-12 center">
										<h1 class="">Learning Center</h1>
									</div>
									
									<div class="col-md-12 mt2">
										<div class="sidebar_box">
											<h4 class=" sidebar_title">Subject</h4>
											<div class="subject"><a href="#">English</a></div>
											<div class="subject"><a href="#">Spanish</a></div>
										</div>
										<div class="sidebar_box">
											<h4 class=" sidebar_title">Materials</h4>
											<div class="subject"><a href="#">English</a></div>
											<div class="subject"><a href="#">Spanish</a></div>
										</div>
										<div class="sidebar_box">
											<h4 class=" sidebar_title">Directory</h4>
											<div class="subject"><a href="directory.php">English</a></div>
											<div class="subject"><a href="directory-spanish.php">Spanish</a></div>
										</div>
									</div>
								</div>
								
							</div>
						</div>
						<div class="col-md-8">
							<div class="rightsidebar_box">
								<div class="row">
									<div class="col-md-12">
										<h1 class="" style="text-align:left">Directory</h1>
										<div class="input-group">
											
											  <input type="text" class="form-control" id="term" placeholder="Search.." required/>
											  <span class="input-group-btn">
												<button class="btn btn-default" type="button" onclick="sub();" style="margin-top: 0px;height: 47px; border-radius: 0px;">Go!</button>
											  </span>
											
										</div><!-- /input-group -->

									</div>
								</div>
                                 <div class="jumbotron" style="font-family: Conv_kantarawaddy; border-left: thick solid #686868;"> <!--start defination \\ class="definition" for css--> 
                              
								<div class="row">
									<div class="col-md-12">
										
										<div class="rightleftsidebar_box" style="border:unset !Important">
												
										</div>
									</div>
								
								</div>
                                    </div><!--end defination form-->
								<script>
									function sub(){
										var trm = $('#term').val();
										//alert(trm);
										var data = {
											'trm': trm
										};
										var ajaxurl = 'results.php';
										// We can also pass the url value separately from ajaxurl for front end AJAX implementations
										jQuery.post(ajaxurl, data, function(response) {
											//var data = JSON.parse(response);
											//alert(response);
											jQuery('.rightleftsidebar_box').html('');
											jQuery('.rightleftsidebar_box').append(response);
										 });
									}
								</script>
							</div>
						</div>
					</div>
					
					
				</div>	
			</div>
		</div>
	</div>

	<div class="my-5 py-5">
	</div>
	
</body>
<!-- partial -->
<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js'></script>
<script src='https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js'></script>
<script  src="js/script.js"></script>

</body>
</html>
