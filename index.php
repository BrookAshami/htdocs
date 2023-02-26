<!DOCTYPE html PUBLIC "-//W3C//DTD SHTML 1.1//EN" "http://www.w3.org/TR/xthml11/DTD/xthml11.dtd">
<html>
    <head>
		<title> my First Site </title>
		
		<link rel="stylesheet" href="css/style.css" type="text/css" >
		<script src="js/jquery.js"></script>
	</head>


	<body>
		<div id="wrapper">
		    <div id="header">
			    <h1> Header </h1>
				<div id="nav">				
					<a href="/html/home.php">Home</a> |  
					<a href="/html/about.html">About</a> |
					<a href="/html/register.html">Register</a> |
					<a href="/html/content.html">Content</a> |
					<a href="/html/resource.html">Resource</a>   |
					<a href="/html/contact-us.html">Contact Us</a>	
				</div>
			</div>
			<div id="main">
				<div id="content">
					<h1>My new Web sit is working!</h1>
					<P>Choose  your favou web language</P>
					<form>
						<input type="radio" id="html" name="fav_language" value="HTML">
						<label for="html"> HTML</label> <br>
						<input type="radio" id="css" name="fav_language" value="css">
						<label for="css"> CSS</label> <br>
						<input type="radio" id="JS" name="fav_language" value="JS">
						<label for="css"> Java Script</label> <br>
					</form>
					<p>Checkboxes let a user select ZERO or MORE option of a limited number of chices.</p>
					<form>
						<input type="checkbox" id="vehicle1" name="vehicle1" value="Bike">
						<label for="vehicle1">I have a bike</label> <br>
						<input type="checkbox" id="vehicle2" name="vehicle2" value="Car">
						<label for="vehicle2"> I have a car</label> <br>
						<input type="checkbox" id="vehicle3" name="vehicle3" value="Boat">
						<label for="vehicle3"> I have a boat</label>
					</form>

					<p>define button</p>
					<input type="button" onclick="alert('Hello Brook!')" value="Click Me!"> <br>
					
					<p>Use 'select' element define a drop-down list</p>
					<label for="lang"> Choose a language</label>
					<select id="lang" name="lang">
						<option value="php">PHP</option>
						<option value="python">Python</option>
						<option value="JS">Java Script</option>
						<option value="html">HTML</option>
					</select>
					<p>The 'textarea' element define a multi-line input field (a text area</p>
					<textarea name="message" rows="8" cols="40">
						The child was playing on the garden
					</textarea>
				</div>
				<div id="sidebar">					
					<h1> side bar </h1>
					
					<form name="frmContact" action="action_page.php" method="post">
						<fieldset> 
							<legend>Personal data</legend>						
							<label for="fname">First Name :</label> 
							<input type="text" name="fName" id="fName" value="brook"> <br>
							<label for="lname">Lase Name :</label> 
							<input type="text" name="lName" id="lName" value="ashami"> <br> 
							<label for="username">Usert Name :</label> 
							<input type="text" name="userName" id="userName" value="bashami"> <br>
							<label for="pw">Password :</label> 
							<input type="password" name="PW" id="PW" value="passw0rd"> <br>
							<label for="confirmpassword">Confirm PW :</label> 
							<input type="password" name="confirmPW" id="cofirmPW" value="passw0rd"> <br>
							<label for="email">Email :</label> 
							<input type="email" id="email" name="email" id="email" value="gashami@hotmail.com"> <br> 
							<label for="Phone"> Phone :</label> 
							<input type="text" name="phone" id="phone" value="408 123 4567"> <br> <br>
							<input type="submit" value="Submit">
					  </fieldset>
					</form>
				</div>

				<div  id="footer">
				    <h1> footer </h1>
					<marquee direction="right"> This is basic example of marquee</marquee>
				</div>
			</div>

	    </div>


	</body>


</html>
