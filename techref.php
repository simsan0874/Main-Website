<!DOCTYPE html>
<html lang="en">

	<head>
	
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		
		<title>Technology Reference Guide</title>
		
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
						<li><a href="">Overview</a></li>
						<li class="dropdown">
							<a href="" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
								Web Development <span class="caret" />
							</a>
							<ul class="dropdown-menu">
								<li><a href="" class="subject">HTML</a></li>
								<li><a href="" class="subject">CSS</a></li>
								<li><a href="" class="subject">Javascript</a></li>
								<li><a href="" class="subject">JQuery</a></li>
								<li><a href="" class="subject">Bootstrap</a></li>
								<li><a href="" class="subject">PHP</a></li>
							</ul>
						</li>
						<li class="dropdown">
							<a href="" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
								Databases <span class="caret" />
							</a>
							<ul class="dropdown-menu">
								<li><a href="" class="subject">MySQL</a></li>
								<li><a href="" class="subject">SQL Server</a></li>
							</ul>
						</li>
					</ul>
				</div>
				
			</div>
		</div>

		<div class="container contentContainer" id="detailsContainer">
			<div class="row" id="topRow">
				<div class="col-md-2 text-left">
					<ul class="nav nav-pills nav-stacked" id="toc">
						<!-- Content added on menu click -->
					</ul>
				</div>
				<div class="col-md-10">
					<div class="row">
						<div class="panel panel-primary">
							<div class="panel-heading">
								<h3 class="panel-title" id="subjecttitle">Overview</h3>
							</div>
							<div class="panel-body text-left" id="subjectcontent">
								<p>This site attempts to provide an overview of various technologies I've worked with and key features and functions in each.</p>
								<p>By selecting one of the subjects in the menu above a table of contents will be displayed to the left.</p>
								<p>By clicking an item in the table of contents this area will provide an overview of the subject.</p>
							</div>
							<div class="panel-footer text-left">
								<div class="row">
									<div class="col-md-11" id="subjectcode">
										<p>This area will display code examples when an item in the table of contents is clicked.</p>
									</div>
									<div class="col-md-1">
										<button type="button" class="btn btn-default" data-clipboard-target="subjectcode" id="copycode">Copy</button>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		
		<div id="includedFooter"></div>
		
		<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
		<script src="http://code.jquery.com/jquery-latest.min.js"></script>
		
		<!-- Latest compiled and minified JavaScript -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
		
		<!-- Zero Clipboard for code copy functionality -->
		<script type="text/javascript" src="js/zeroclipboard/ZeroClipboard.js"></script>
		
		<script>
		
			$(".contentContainer").css("min-height",$(window).height());
			
			var client = new ZeroClipboard( document.getElementById('copycode') );
			
			$('.subject').click(function(e) {
				e.preventDefault();
				subj=$(this).html();
				head="<h3 class='text-center' id='selectedsubject'>" + subj + "</h3>";
				$.ajax({
					url: "content/techref/toc_" + subj.toLowerCase() + ".html", 
					success: function(data) {
						$("#toc").html(head + data);
					},
					error: function(data) {
						$("#toc").html(head + "<p class='text-center'>Not Yet Available</p>");
					}
				});
			});
			
		</script>
	
	</body>
	
</html>