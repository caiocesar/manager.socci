<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="utf-8" />


<!-- Apple iOS Web App Settings -->
<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1" />
<meta name="apple-mobile-web-app-capable" content="yes">
<meta name="apple-mobile-web-app-status-bar-style" content="black">
<link rel="apple-touch-icon" href="img/apple-touch-logo.png"/>
<script type="text/javascript"> 
	(function () {
		var filename = navigator.platform === 'iPad' ?
	   		'splash-screen-768x1004.png' : 'splash-screen-640x920.png';
	  	document.write(
	    	'<link rel="apple-touch-startup-image" ' +
	          'href="img/' + filename + '" />' );
	})();
</script>
<!-- END Apple iOS Web App Settings -->

<title>Socci Manager</title>

<!--	Load the master stylesheet
		Note: This is a PHP file that loads like a CSS file. This way, we can include
		a custom color very quickly and easily. -->
<link rel="stylesheet" href="css/master51a5.css?color=454E51&amp;login=true" type="text/css" media="screen" />


</head>
<body>

<!-- This is the login page, so it has a few custom CSS styles. -->
	
<div id="login-wrapper">

	<!-- Display the Logo -->
	<div id="logo"><h1>Socci WebManager</h1></div>
	
	<!-- Start the white form block -->
	<div id="login-form">
		
		<!-- An error alert example -->
		<div class="alert-wrapper error">
			<div class="alert-text">
				This is an error alert!
				<a href="#" class="close">Close</a>
			</div>
		</div>
		
		<!-- Start the actual form, link it to the dashboard.
			 You'll need to enter your own custom login script here -->
		<form class="styled" action="dashboard.html" method="post">
		
			<!-- Username Field -->
			<label for="username">
				<span>Login:</span>
				<input class="textbox" type="text" name="username" value="" />
			</label>
			
			<!-- Password Field -->
			<label for="password">
				<span>Senha:</span>
				<input class="textbox" type="password" name="password" value="" />
			</label>
			
			<!-- Login button with custom CSS classes -->
			<input class="button red small" type="submit" value="Login" />
			
		</form>
		
	</div>
	
	<!-- Some footer text, totally optional of course -->
	<div class="under-form">Copyright &copy;2011 Company Name</div>

</div>

<!-- Load the jQuery Library and custom.js for the error alerts.
	 You can remove this block if you don't need error alerts on the login form page. -->
<script src="js/jquery/1.6.2/jquery.min.js"></script>
<script src="js/custom.js"></script>

</body>

<!-- Mirrored from demo.scheetzdesigns.com/adminpro/index.php by HTTrack Website Copier/3.x [XR&CO'2008], Tue, 25 Oct 2011 02:46:21 GMT -->
</html>
