<!DOCTYPE html>
<html>
<head>
	<title>Pengunjung</title>
	<link rel="stylesheet" href="css/bootstrap.css">
	<style type="text/css">
		body
		{
			background-color: #FFF;
		    font-family: 'Poppins', sans-serif;
		}
		.container{margin: auto; width: 550px;}
		h3{text-align: center}
		td{text-align: center;}
		p{font-weight: bold; color: #ff0505}
		.table{margin-bottom: 10px;}
		
	</style>
</head>
<body>
<?php
 session_start();
 include(__DIR__.'../../counter.php');
?>
<div class="container">
	<header>
		<h3>informasi Visitor</h3>
	</header>
	<article>
<!-- untuk mengetahui pengunjung pada saat ini -->
<table class="table table-bordered">
	<tr>
		<th>Browser</th>
		<th>Ip</th>
		<th>Jml Pegunjung Hari ini</th>
		<th>Jml Pengunjung Kemarin</th>
		<th>Total pengunjung</th>
	</tr>

	<tr>
		<td>
			<?php 
			 switch($browser){
			 case "Firefox" : echo "".$browser.""; 
			 	break;
			 case "Chrome/Opera" : echo "".$browser.""; 
			 	break;
             case "Edge" : echo "".$browser.""; 
			 	break;
			 case "IE" : echo "".$browser.""; 
			 	break;
			 } ?>
		</td>
		<td>
			<p><?php echo "".$_SERVER['REMOTE_ADDR']."";?></p>
		</td>
		<td>
			 <p><?php echo "".$hari_ini['hari_ini'].""; ?></p>
		</td>
		<td>
			<p><?php echo "".$kemarin['kemarin'].""; ?></p>
		</td>
		<td>
			<p><?php echo "".$sql['total']."";?></p>
		</td>
	</tr>
</table>
	</article>
</div>
</body>
</html>