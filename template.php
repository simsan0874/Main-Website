<!DOCTYPE html>
<html lang="en">

	<head>
	
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		
		<title>Andrew Sims' Personal Website</title>
		
		<!-- Bootstrap -->
		<!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
		<!-- Optional theme -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">

		<!-- Internal styling -->
		<link rel="stylesheet" href="css/main.css">
		<link rel="stylesheet" href="css/footer.css">
		
	</head>

	<body data-spy="scroll" data-target="#navigationbar">

		<div class="navbar navbar-default navbar-fixed-top">
			<div class="container-fluid">
			
				<div class="navbar-header">
					
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					
					<a class="navbar-brand" href="index.php">Sims.com</a>
					
				</div>

				<div class="collapse navbar-collapse" id="navigationbar">
					<ul class="nav navbar-nav">	 	
						<li class="active"><a href="#topContainer">Home</a></li>
						<li><a href="#detailsContainer">About Me</a></li>
						<li><a href="#sitesContainer">The Sites</a></li>
					</ul>
					<!--
					<form class="navbar-form navbar-right">
						<div class="form-group">
							<input type="email" placeholder="Email" class="form-control" />
						</div>
						<div class="form-group">
							<input type="password" placeholder="Password" class="form-control" />
						</div>
						<button type="submit" name="login" class="btn btn-success">Log In</button>
					</form>
					-->
				</div>
				
			</div>
		</div>

		<div id="includedFooter"></div>
		
		<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
		<script src="http://code.jquery.com/jquery-latest.min.js"></script>
		<!-- Latest compiled and minified JavaScript -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>


		<script>
		
			$(".contentContainer").css("min-height",$(window).height());
			
			$(function(){
				$("#includedFooter").load("include/standard_footer.html"); 
			});
			
		</script>
	
	</body>
	
</html>