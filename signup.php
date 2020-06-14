<!DOCTYPE html>
<html>
<head>
 <link rel="icon" type="image/png" href="../resource/icons/main.png">
	<title>CURAR FORM</title>
	<link rel="stylesheet" type="text/css" href="../css/reg.css">
	<style> 
        .foot{
            display: block;
            text-align: center;
            }
    </style>
</head>
<body>
	<form>
		<table align="center" cellspacing="30">
			
			<th align="center" colspan="2">
			<div class="reg-head">	Registration Form</div>
			</th>
			
			<tr>
				<td>
					Name:-<td> <input type="text" name="n1" placeholder="Enter your name"></td>
				</td>
			</tr>
			<tr>
				<td>
					Email:-<td> <input type="email" name="n2" placeholder="Enter your email id"></td>
				</td>
			</tr>
			<tr>
				<td>
					Mobile Number:- <td><input type="number" name="n3" placeholder="Enter mobile number"></td>
				</td>
			</tr>
			<tr>
				<td>
					Password:- <td><input type="password" name="n4" placeholder="Enter your password"></td>
				</td>
			</tr>
			<tr>
				<td>
					Confirm Password:- <td><input type="password" name="n5" placeholder="Enter your password"></td>
				</td>
			</tr>
			<tr>
				<td align="center" colspan="2">
					<input type="submit" value="Join Us">
				</td>
			</tr>
            			
		</table>
	</form>
    
<?php
mysql_connect("localhost","root","") or die("not connected");
mysql_select_db("curar") or die("no db found");
  if(isset($_POST['submit']))
  {

 $name=$_POST['Name'];
  $email=$_POST['Email'];
   $mobile no=$_POST['Contact'];
      
       $password=$_POST['Password'];
 $query="insert into data(Name,Email,Contact,Password) values('$Name','$Email','$Contact','$Password')";
 if(mysql_query($query))
 {

 	echo "THANK YOU";
 }

  }

?>
	    <div class="foot"><a href="home.html"><img src="../resource/images/logoblack.png"></a></div>
</body>
</html>