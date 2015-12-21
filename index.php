<?php include("include/login.php"); ?>

<?php include("include/submit_comment.php"); ?>

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
					<form class="navbar-form navbar-right" method="post">
						<div class="form-group">
							<input type="email" name="loginemail" placeholder="Email" class="form-control" />
						</div>
						<div class="form-group">
							<input type="password" name="loginpassword" placeholder="Password" class="form-control" />
						</div>
						<button type="submit" name="submit" class="btn btn-success" value="Log In">Log In</button>
					</form>
				</div>
				
			</div>
		</div>

		<div class="container contentContainer" id="topContainer">
			<div class="row">
			
				<div class="col-md-6 col-md-offset-3" id="topRow">

					<?php echo $loginresult; ?>
			 
					<div class="whiteBackground">
					
						<h1 class="marginTop">Sims.com</h1>

						<p class="lead">This is my personal site to learn and practice some web development.</p>

						<p>I'll be building components to try to implement HTML, CSS, JavaScript, PHP, and Bootstrap.</p>

						<p class="bold marginTop">I'm always interested in feedback or ideas, so please send me information below.</p>
						
					</div>

					<form class="marginTop marginBottom" method="post">
						<?php echo $commentresult; ?>
						<div class="input-group">
							<span class="input-group-addon">@</span>
							<input type="email" class="form-control" name="email" placeholder="Your email" value="<?php echo $_POST['email']; ?>" />
						</div>
						<br />
						<div class="form-group">
							<textarea class="form-control" rows="5" name="comment" placeholder="Comments"><?php echo $_POST['comment']; ?></textarea>
						</div>
						<input type="submit" name="submit" class="btn btn-success btn-lg marginTop" value="Comment" />
					</form>

				</div>

			</div>
		</div>


		<div class="container contentContainer" id="detailsContainer">
		
			<div class="row" class="center">
				<h1 class="center title">About Me - Andrew Sims</h1>
				<p class="lead center">Some of my noteworthy skills.</p>
			</div>

			<div class="row">
			
				<div class="col-md-4 marginTop">
					<h2><span class="glyphicon glyphicon-tower"></span> Scrum Master</h2>
					<p>Experienced in all aspects of scrum management including story definition, point estimation, kickoffs, daily standups, and retrospectives.</p>
				</div>

				<div class="col-md-4 marginTop">
					<h2><span class="glyphicon glyphicon-equalizer"></span> BI</h2>
					<p>Skilled in all aspects of business intelligence including requirements analysis, data modeling, history tracking, and report development.</p>
				</div>

				<div class="col-md-4 marginTop">
					<h2><span class="glyphicon glyphicon-thumbs-up"></span> Leadership</h2>
					<p>Responsible for personnel and department management including yearly reviews, recruitment, budgeting, and corporate initiatives.</p>
				</div>
				
			</div>
			
			<div class="row marginBottom">

				<div class="col-md-4 marginTop">
					<h2><span class="glyphicon glyphicon-briefcase"></span> Job Board</h2>
					<p>Managed job site including features for relevance based search (SOLR), external site scraping (Python), and client advertising (OpenX).</p>
				</div>

				<div class="col-md-4 marginTop">
					<h2><span class="glyphicon glyphicon-user"></span> CRM</h2>
					<p>Implementation and customization of SugarCRM system including extending (accounts, contacts, opportunities) and creating new (agencies, territories, divisions) modules.</p>
				</div>
				
				<div class="col-md-4 marginTop">
					<h2><span class="glyphicon glyphicon-shopping-cart"></span> E-Commerce</h2>
					<p>Managed Magento front-end shop site with a custom .NET fulfillment back-end including a service layer for the communication of orders, shipping, and inventory.</p>
				</div>
				
			</div>
			
			<div class="row" class="center">
				<p class="lead center"><a href="" id="resume-download">Download</a> my resume to see more details on my work experience and background.</p>
			</div>

		</div>

		<div class="container contentContainer" id="sitesContainer">
		
			<div class="row">

				<h1 class="center title">The Sites</h1>

				<p class="lead center">The individual sites to exercise web technologies.</p>

			</div>
			
			<div class="row">
			
				<div class="col-md-4 marginTop marginBottom">

					<h2><span class="glyphicon glyphicon-question-sign"></span> Technical Reference</h2>

					<p>My education site for training and reference on the various technologies for this site and others.</p>
					
					<a href="techref.php"><button class="btn btn-success marginTop">Let's Go!</button></a>

				</div>
				
				<div class="col-md-4 marginTop marginBottom">

					<h2><span class="glyphicon glyphicon-briefcase"></span> Job Site</h2>

					<p>My site for employers to manage open job postings and seekers to find them.</p>
					
					<button class="btn btn-success marginTop">Let's Go!</button>

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
    
			$('#resume-download').click(function(e) {
				e.preventDefault();
				window.location.href = 'content/resume.docx';
			});
			
		</script>
	
	</body>
	
</html>