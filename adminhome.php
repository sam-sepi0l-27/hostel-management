	<?php
		include("dbconnect.php");
		extract($_POST);
		session_start();
		if(isset($_POST['btn']))
		{
		
		$max_qry = mysqli_query($connect,"select max(id) from stud");
			$max_row = mysqli_fetch_array($max_qry); 
			$id=$max_row['max(id)']+1;
		$qry=mysqli_query($connect,"insert into stud values('$id','$name','$reg','$gender','$age','$email','$phone','$dept','$cls','$hn','$room')");
			if($qry)
			{
				
				echo "<script>alert('Hostel Assigned to Students')</script>";
			
			} 
			else
			{
				echo "<script>alert('Enter the correct fields')</script>"; 
				
			
			}
			}
		?>
	
	<html>
	<head>
	  <title>Hostel</title>
	  <meta name="description" content="website description" />
	  <link rel="stylesheet" href="indexstyle.css">
	  <link rel="stylesheet" href="font.css">
	  <link rel="stylesheet" href="gradient.css">
	</head>
	<body>
	<div id="grad1">
	  <table width="100%" border="0">
		<tr>
		  <th height="73" bgcolor="#ccffff" scope="col"><h1>Hostel Information Management System</h1>
		  </th>
		</tr>
	  </table>
	  <table width="100%" border="0">
		 <tr>
		  <th scope="col"><a href="adminhome.php" class="button pulse">Admin Home</a></th>
		  <th scope="col"><a href="hostel.php" class="button pulse">Hostel</a></th>
		  <th scope="col"><a href="amnt.php" class="button pulse">Monthly Amount</a></th>
		  <th scope="col"><a href="viewstud.php" class="button pulse">View Students</a></th>
		  <th scope="col"><a href="viewf.php" class="button pulse">View Feedbacks</a></th>
		  <th scope="col"><a href="index.php" class="button pulse">LogOut</a></th>
		</tr>
	  </table>
	  
	
	  
	  
	  <p>&nbsp;</p>
	  <div id="content">
	   
	
	<br>
	<br>
	<br>
	
	
	
	
			 <form id="f1" name="f1" method="post" action="#" onSubmit="return vali()">
	  <table width="35%" border="0" align="center">
		
	   <tr>
		 <td colspan="2" align="center"><strong><h3>Student Registration</h3></strong></td>
		</tr>
		<tr>
		 <td colspan="2" align="center">&nbsp;</td>
		</tr>
		<tr>
		  <td width="37%" align="justify"><span class="style6" >Name</td>
		  <td width="63%">
		  <input name="name" type="text" id="name" onChange="return name ()"/></td>
		</tr>
		  <tr>
		 <td>&nbsp;</td>
		  <td>&nbsp;</td>
		</tr>
		 <tr>
		  <td align="justify">  Register Number</td>
		  <td>
			<input name="reg" type="text" id="reg" required/>
		  </td>
		</tr>
		  <tr>
		 <td>&nbsp;</td>
		  <td>&nbsp;</td>
		</tr>
		<tr>
		  <td align="justify">  Gender</td>
		  <td><input name="gender" type="radio" value="male"  required/>
			Male
			  <input name="gender" type="radio" value="female" /> 
			  Female</td>
		</tr>
		 <tr>
		 <td>&nbsp;</td>
		  <td>&nbsp;</td>
		</tr>
		<tr>
		  <td align="justify">  Age</td>
		  <td><input name="age" type="text" id="age"  /></td>
		</tr>
		
		  <tr>
		 <td>&nbsp;</td>
		  <td>&nbsp;</td>
		</tr>
		<tr>
		  <td align="justify">  Email Id </td>
		  <td><input name="email" type="email" id="email"  required/></td>
		</tr>
			  <tr>
		 <td>&nbsp;</td>
		  <td>&nbsp;</td>
		</tr>
		
		  <tr>
		  <td align="justify">  Contact Number </td>
		  <td><input name="phone" type="text" id="phone"  /></td>
		  </tr>
		  <tr>
		 <td>&nbsp;</td>
		  <td>&nbsp;</td>
		</tr>
		
			  <tr>
		  <td align="justify">  Department </td>
		  <td><input name="dept" type="text" id="dept"  /></td>
		   </tr>
		  <tr>
		 <td>&nbsp;</td>
		  <td>&nbsp;</td>
		</tr>
		  <tr>
		  <td align="justify">  Class </td>
		  <td><input name="cls" type="text" id="cls"  /></td>
		 
		</tr>
		  <tr>
		 <td>&nbsp;</td>
		  <td>&nbsp;</td>
		</tr>
			 <tr>
		 
		  <td align="justify">  Year Of Passing </td>
		  <td><input name="year" type="text" id="year"  /></td>
		 
		</tr>
		  <tr>
		 <td>&nbsp;</td>
		  <td>&nbsp;</td>
		</tr>
		 <tr>
		  <td align="justify">  Hostal Name</td>
		  <td><select name="hn">
		  <option value="">Select Hostel</option>
		  <?php
		  $qry=mysqli_query($connect,"select hname from hostel");
		  while($rw=mysqli_fetch_assoc($qry))
		  {
		  ?>
		  <option value="<?php echo $rw['hname'];?>"> <?php echo $rw['hname'];?></option>
		  <?php
		  } 
		  ?>
		  </select>
		  </td>
		 
		</tr>
		 <tr>
		 <td>&nbsp;</td>
		  <td>&nbsp;</td>
		</tr>
		 <tr>
		 
		  <td align="justify">  Room No</td>
		  <td><input name="room" type="text" id="room"/></td>
		</tr>
			<td>&nbsp;</td>
		  <td><input name="btn" type="submit" id="btn" value="Submit" />
			<input type="reset" name="Submit2" value="Reset" /></td>
		</tr>
	  </table>
	</form>
	
	
	 <marquee scrollamount="10"><h1><font color="#80bfff">Hostel Information Management System</h1></marquee>
	  
	<table width="100%" border="0">
		<tr>
		  <th height="73" bgcolor="#666666" scope="col"><p> Hostel management</p>
		  </th>
		</tr>
	</table>
	
	</div>
	</body>
	</html>
	
	
