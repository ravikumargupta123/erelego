<?php
include ('connection.php');
?>

<!doctype html>

<html lang="en-us">
	<head>
		<meta charset="utf-8">
		<meta name="veiwport" content="width=width-device,initial-scale=1.0">
		<title>green travel</title>
        <link rel="stylesheet" href="mystyle.css">
		<link rel="stylesheet" type="text/css" href="w3.css">
		
	</head>
	<body>
		<div class="w3-container red" position="fixed" >

        <span onclick="this.parentElement.style.display='none'" class="w3-closebtn">X</span>

        <p>welcome to green travel . get free coupon of worth Rs 500 on first booking</p></div>
	    <header class="w3-container yellow">
	    	<figure>
				<img src="index.png" alt="GREEN TRAVEL LOGO" width="70" height="70">
			</figure>
	    	<table id='tabl'>
	    	
				<tr>
					<th>
						<label for="email">Email or Phone</label>
					</th>
					<th >
						<label for="pass">Password</label>
				    </th>
			    </tr>
				<tr>
					<td>
						<input name="email" type="text" placeholder="email" required>
					</td>
					<td>
						
						<input name="password" type="password" placeholder="password" required>
					</td>
				</tr>
				<tr>
					<td>
						<input value="Log In" type="submit">
					</td>
					<td>
						<a href="sign_up.php"><b>Not registered (sign up)</b></a>
						<a href="sign_up2.php"><b>Not registered (sign2 up)</b></a>
					</td>
				</tr>
	
			</table>
	    </header>    
	    <nav class="w3-topnav w3-container teal">
	        <ul>
	        	<li> <a href="home">HOME</a> </li>
	        	<li> <a href="about_us"> ABOUT US</a> </li>
	        	<li> <a href="help">HELP</a> </li>
	        </ul>
	    </nav>
	    <section class="w3-container w3-border ">
	        	
<table id="data">
	<tr>
		<th>username</th>
		<th>password</th>
		<th>email</th>
		<th>sex</th>
		<th>gender</th>
		<th>category</th>
	</tr>
	<?php
 $query = mysql_query("select * from personal_information order by id");

while ($result= mysql_fetch_array($query)) {
?>
	<tr>
		<td><?php echo $result['username'];?></td>
		<td><?php echo $result['psw'] ;?></td>
		<td><?php echo $result['email'];?></td>
		<td><?php echo $result['sex'];?></td>
		<td><?php echo $result['category'];?></td>
		<td><?php echo $result['message'];?></td>
	</tr>
	
	<?php } ?>

</table>
	   
	        	<article>
	        	</article>
	        	<aside></aside>
	    </section>
	    <footer class="w3-container teal"><p>&copy; 2015 green travel . All rights reserved.</p></footer>
       
	</body>
</html>
