<?php 

if(isset($_GET['accept-cookies'])){
setcookie('accept-cookies', 'true', time() + 31556925);
header('Location: ./');
	
}
?>



<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Banner</title>
	<link rel="stylesheet" href="style.css">
	  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
</head>
<body>
	<?php 
	if(!isset($_COOKIE['accept-cookies'])){

   ?> 

     <div class="cookie-banner">
	<div class="container">
		<p>
			We use cookies to ensure that we give you the best experience on our website. If you continue without changing your settings, we'll assume that you are happy to receive all cookies from this website. If you would like to change your preferences you may do so by following the instructions <a href="">here</a>
			<a href="?accept-cookies" class="button">Accept</a>
		</p>
	</div>
</div>
<?php 
}
   ?>
   <p>Cookie works!</p>
<script src="script.js"></script>
</body>
</html>