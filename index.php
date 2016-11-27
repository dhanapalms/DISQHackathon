<!DOCTYPE html>
<html>
<head>

<!-- your webpage info goes here -->

    <title>My First Website</title>
	
	<meta name="author" content="your name" />
	<meta name="description" content="" />

<!-- you should always add your stylesheet (css) in the head tag so that it starts loading before the page html is being displayed -->	
	<link rel="stylesheet" href="style.css" type="text/css" />
	
</head>
<body>

<!-- webpage content goes here in the body -->

	<div id="page">
		<div id="logo">
			<h1><a href="/" id="logoLink">EVENT REGISTRATION PORTAL</a></h1>
		</div>
		<div id="nav">
			<ul>
				<li><a href="#/home.html">Home</a></li>
				<li><a href="update.php">Update</a></li>
				<li><a href="register.php">Register</a></li>
			</ul>	
		</div>
		<div id="content">
			<h2>List of Events</h2>
		
			
			<?php
			
			            $dbhost = 'localhost';
            $dbuser = 'root';
            $dbpass = '';
            
            $conn = mysql_connect($dbhost, $dbuser, $dbpass);
            
            if(! $conn ) {
               die('Could not connect: ' . mysql_error());
            }
            
            mysql_select_db('event');
			
			$sql="SELECT name,eventname,description,location,eventdate FROM registered_users";
			$result=mysql_query($sql);
			?>
			<table border="2">
   <tr>
      <th>Name</th>
      <th>EventName</th>
      <th>Description</th>
      <th>Location</th>
      <th>Eventdate</th>
    </tr>
	
	 <?php
    while ($array = mysql_fetch_array($result));
    {
        print "<tr> <td>";
        echo $array['name']; 
        print "</td> <td>";
        echo $array['eventname']; 
        print "</td> <td>";
        echo $array[]; 
        print "</td> <td>";
        echo $array[3]; 
        print "</td> </tr>";
        echo $array[4]; 
        print "</td> </tr>";
    }
?>
			
			
			
		</div>
		<div id="footer">
			<p>
				Webpage made by <a href="/" target="_blank">[sdhanapalms@gmail.com]</a>
			</p>
		</div>
	</div>
</body>
</html>