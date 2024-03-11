<head>
    <link rel="icon" href="./imgs/cart.png" type="image/icon type">
    <title>Boofer's Paradise !</title>
	<link href="./css/style.css" type="text/css" rel="stylesheet">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	
	<link href="https://fonts.googleapis.com/css?family=Agdasima:400,500,600" rel="stylesheet">
</head>

<body style="background-color:#333333;padding:0;margin:0;">
<center>
	<div name="header" style="background-color:#18181A;height:100px;">
		<br>
		<img src="./imgs/cart.png" style="height:40px;"/>
		<br>
		<img src="./imgs/name_s2.png" style="height:30px;"/>
	</div>
</center>	
	<div name="sections_imgs" style="position:relative;top:3px;display:flex;justify-content:space-evenly;">
		<a href="./index.php"><img href="./index.php" src="./imgs/sect_selected.png" style="width:68px;height:30px;"/></a>		
		<a href="./index.php"><img href="./index.php" src="./imgs/sect_idle.png" style="width:68px;height:30px;"/></a>				
		<a href="./index.php"><img href="./index.php" src="./imgs/sect_idle.png" style="width:68px;height:30px;"/></a>		
		<a href="./index.php"><img href="./index.php" src="./imgs/sect_idle.png" style="width:68px;height:30px;"/></a>
	</div>
	<div name="sections_labels" style="position:relative;bottom:23px;display:flex;justify-content:space-evenly;">
		<a href="./index.php" style="color:white;display:inline;width:68px;text-align:center;text-decoration:none;font-family:Agdasima;font-size:17px;">Account</a>	
		<a href="./index.php" style="color:white;display:inline;width:68px;text-align:center;text-decoration:none;font-family:Agdasima;font-size:17px;">Shop</a>
		<a href="./index.php" style="color:white;display:inline;width:68px;text-align:center;text-decoration:none;font-family:Agdasima;font-size:17px;">Contact Us</a>
		<a href="./index.php" style="color:white;display:inline;width:68px;text-align:center;text-decoration:none;font-family:Agdasima;font-size:17px;">Help</a>
	</div>
	
	<br>
	<br>
	<p style="color:white;font-weight:600;"><i>Welcome back @username</i></p>
	<br>
	<br>
	<br>
	<br>
	<img src="./imgs/cart.png" style="height:80px;"/>
	<br>
	<img src="./imgs/name.png" style="height:40px;"/>
	<br>
	<br>
	<br>
	<button style="border-width: 2px;width:120px;height:36px;background-color:#C55A11;border-color:#FFFFFF;border-radius:10px;cursor:pointer;font-size:15px;font-family:'Lato';font-weight:600;color:#FFFFFF;padding-left:10px;padding-right:10px;" onclick="redirect()">LAUNCH</button>

<script>
	function redirect(){
		window.location.href = 'account.php';
	}
</script>

</body>