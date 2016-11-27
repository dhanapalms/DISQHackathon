.<?php
session_start();
$msg="";
$con=mysqli_connect("localhost","root","");
mysqli_select_db($con,"event");
$user=$_SESSION['name'];
$sql="select * from registered_users where name='".$user."'";
$result=mysqli_query($con,$sql);
$row=mysqli_fetch_array($result);
$a=$row[0];
$b=$row[1];
$c=$row[2];
$d=$row[3];
$e=$row[4];
$f=$row[5];
mysqli_close($con);
if(isset($_POST['submit']))
{
$a=$_POST['name'];
$d=$_POST['eventname'];
$c=$_POST['description'];
$e=$_POST['location'];
$f=$_POST['eventdate'];
$g=$_POST['email'];
$con=mysqli_connect("localhost","root","");
mysqli_select_db($con,"event");
$sqll="update registered_users set name='$a',eventname='$b',description='$c',location='$e',eventdate='$f',email='$g' where username='".$user."'";
$_SESSION['name']=$a;
if(mysqli_query($con,$sqll))
{
$msg="The details are updated successfully!!!";
}
else
{
$msg="Updating error has been found!!!";
}
	mysqli_close($con);
	
}
?>
<html>
<head>
<title>modify</title>  
<link rel="stylesheet" href="http://localhost/OSPP/Project/log1/bootstrap.min.css">
    <link href="signin.css" rel="stylesheet">
</head>
<body>
<font color="blue"><h2>Modify Details:</font></h2>
<form method="POST" action=" ">
<center><br><label>
<?php echo "<font color='red'>".$msg."</font><br><br>";?>
<table border="0" width="130%" height="80%" ><tr><td>
        Name:</td><td> <input type="text" class="form-control" name="name" value="<?php echo $a;?>" placeholder="Name" required autofocus></td></tr>
	<tr><td>EventName:</td><td> <input type="text" class="form-control" name="age" value="<?php echo $d;?>" placeholder="Eventname" required ></td></tr>
	<tr><td>Description:</td><td> <textarea rows='5' cols='5' class="form-control" name="address" placeholder="Description" required ><?php echo $c;?></textarea></td></tr>
        <tr><td>Location</td><td> <input type="text" class="form-control" name="sex" value="<?php echo $e;?>" placeholder="Locatin" required ></td></tr>
	<tr><td>Eventdate</td><td> <input type="date" class="form-control" name="email" value="<?php echo $f;?>" placeholder="Eventdate" required></td></tr>
	<tr><td>Email</td><td> <input type="password" class="form-control" value="<?php echo $b;?>" name="pass" placeholder="Email" required ></td></tr>

 <tr><td colspan="2"><button class="btn btn-lg btn-primary btn-block" name="submit" type="submit">UPDATE</button></td></tr>
 </table></label>
 </center>
</form>
</body>
</html>

