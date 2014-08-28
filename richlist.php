
<?php
$list = file_get_contents('list.txt');
$data = explode("\n", $list);
$count = count($data);
?>
<html>
	<head>
		<meta charset="ISO-8859-1">
		<title>MIL Rich List</title>
		<link rel="stylesheet" type="text/css" href="styles.css" title="Default Styles" media="screen"/>
		
	</head>
	
	<body link="#E2E2E2" vlink="#ADABAB">
	
	<div class="container">
	
		<header>
		
				<div class="logoContainer">
					<img src="logo.png" alt="MillenniumCoin Logo" style="width:130%;">
				</div>

				<div class="button">
					<p><a href ="http://explorer.millenniumcoin.pw/chain/MillenniumCoin">Back to Block Explorer</a></p>
				</div>
				
			</header>
			<article style="color:#ffffff";>
				<p>
					<div align="center"><img src="mil.png" style="width:10%";></div>
					<hr/>
					<div align="center"><h1>MillenniumCoin Rich List Top 100 (Updated hourly)</h1>
					<hr/>
					<p>
						<table style="width:500px; color:#ffffff";> 

						<?php
						for($i = 1; $i < $count; $i += 1) {
						   $pair = explode(" ", $data[$i - 1]);	
						   echo "<tr><td>".$i.") </td><td><a href=http://explorer.millenniumcoin.pw/address/".$pair[0].">".
						   $pair[0]."</a></td><td>".$pair[1]."</td><td> MIL </td></tr>";
						}
						?>
						</table>
				<br/><br/></div>
					</article>
			
						
					</div>
				</body>
	
			</html>			
						
						
						
						
						
						
						
						
						
						
