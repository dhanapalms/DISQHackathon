<html>
   
   <head>
      <title>Update Event</title>
   </head>
   
   <body>
      <?php
         if(isset($_POST['update'])) {
            $dbhost = 'localhost';
            $dbuser = 'root';
            $dbpass = '';
            
            $conn = mysql_connect($dbhost, $dbuser, $dbpass);
            
            if(! $conn ) {
               die('Could not connect: ' . mysql_error());
            }
            
            mysql_select_db('event');
            $email = $_POST['emailid'];
            //$passwd = $_POST['paswd'];
            $name = $_POST['name'];
            $eventname = $_POST['eventname'];
			
            $desc = $_POST['desc'];
            $loc = $_POST['loc'];
			
            $dat = $_POST['dat'];
			
            $gender = $_POST['gender'];
            
            $sql = "UPDATE registered_users SET name=$name,eventname=$eventname,description=$desc,location=$loc,eventdate=$dat,gender=$gen WHERE email=$_POST['emailid']";
            mysql_select_db('event');
            $retval = mysql_query( $sql, $conn );
            
            if(! $retval ) {
               die('Could not update data: ' . mysql_error());
            }
            echo "Updated data successfully\n";
            
            mysql_close($conn);
         }else {
            ?>
               <form method = "post" action = "<?php $_PHP_SELF ?>">
                  <table width = "400" border =" 0" cellspacing = "1" 
                     cellpadding = "2">
                  
                     <tr>
                        <td width = "100">EmailID</td>
                        <td><input name = "emailid" type = "text" 
                           id = "emp_id"></td>
                     </tr>
                  
                    
					 
					 
					 
					 
					 <tr>
<td>Name</td>
<td><input type="text" class="demoInputBox" name="name" value="<?php if(isset($_POST['userName'])) echo $_POST['userName']; ?>"></td>
</tr>
<tr>
<td>Event Name</td>
<td><input type="text" class="demoInputBox" name="eventname" value="<?php if(isset($_POST['userName'])) echo $_POST['userName']; ?>"></td>
</tr>
<tr>
<td>Description</td>
<td><input type="text" class="demoInputBox" name="desc" value="<?php if(isset($_POST['firstName'])) echo $_POST['firstName']; ?>"></td>
</tr>
<tr>
<td>Location</td>
<td><input type="text" class="demoInputBox" name="loc" value="<?php if(isset($_POST['lastName'])) echo $_POST['lastName']; ?>"></td>
</tr>
<tr>
<td>Event Date</td>
<td><input type="Date" class="demoInputBox" name="dat" value="<?php if(isset($_POST['lastName'])) echo $_POST['lastName']; ?>"></td>
</tr>
<tr>
<td>Gender</td>
<td><input type="radio" name="gender" value="Male" <?php if(isset($_POST['gender']) && $_POST['gender']=="Male") { ?>checked<?php  } ?>> Male
<input type="radio" name="gender" value="Female" <?php if(isset($_POST['gender']) && $_POST['gender']=="Female") { ?>checked<?php  } ?>> Female
</td>
</tr>
					 
					 
					 
                  
                     <tr>
                        <td width = "100"> </td>
                        <td> </td>
                     </tr>
                  
                     <tr>
                        <td width = "100"> </td>
                        <td>
                           <input name = "update" type = "submit" 
                              id = "update" value = "Update">
                        </td>
                     </tr>
                  
                  </table>
               </form>
            <?php
         }
      ?>
      
   </body>
</html>