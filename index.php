<!DOCTYPE html>
<html>
<head>

<!-- your webpage info goes here -->

    <title>My First Website</title>
	
	<meta name="author" content="your name" />
	<meta name="description" content="" />

<!-- you should always add your stylesheet (css) in the head tag so that it starts loading before the page html is being displayed -->	
	<link rel="stylesheet" href="style.css" type="text/css" />
	
	<script>
	var dateObj = new Date();
var month = dateObj.getUTCMonth() + 1; //months from 1-12
var day = dateObj.getUTCDate();
var year = dateObj.getUTCFullYear();

var newdate = year + "/" + month + "/" + day;
alert(newdate);
	</script>
	
	
	
	

</head>
<body>

<!-- webpage content goes here in the body -->

	<div id="page">
		<div id="logo">
			<h1><a href="/" id="logoLink" ><font color="FF00CC">EVENT REGISTRATION PORTAL</font></a></h1>
		</div>
		<div id="nav">
			<ul>
				<li><a href="#/home.html">Home</a></li>
				<li><a href="modify.php">Update</a></li>
				<li><a href="register.php">Register</a></li>
			</ul>	
		</div>
		<div id="content">
			<h2>List of Events</h2>
		
					<table border="2">
   <tr>
      <th>Name</th>
      <th>EventName</th>
      <th>Description</th>
      <th>Location</th>
      <th>Eventdate</th>
	  <th> Register</th>
    </tr>
	
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
            mysql_select_db('event');
			$result=mysql_query($sql,$conn);
			
            mysql_select_db('event');
    while ($array = mysql_fetch_array($result))
    {
        print "<tr> <td>";
        echo $array['name']; 
        print "</td> <td>";
        echo $array['eventname']; 
        print "</td> <td>";
        echo $array['description']; 
        print "</td> <td>";
        echo $array['location']; 
        print "</td> <td>";
        echo $array['eventdate']; 
        print "</td> <td>";
		$x=$array['eventname'];
	   echo "<a href='register.php?val=$x' style='background-color:#ffffa0'>Register</a>";
		echo "</tr>";
    }
	
	

?>



</table>
			
			

		</div>
		<div id="footer">
			<p>
				Webpage made by <a href="/" target="_blank">[sdhanapalms@gmail.com]</a>
			</p>
		</div>
	</div>
</body>
</html>


				<?php

	if (isset($_POST['checksub'])){
echo $_POST['register']; // Displays value of checked checkbox.
}
?>	