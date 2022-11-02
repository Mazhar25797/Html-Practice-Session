<?php  
	$type = "circle";
?>
<html>
	<head>
		<title>Generate List</title>
	</head>
	<body>
		<ul type="<?php echo $type ?>">
			<?php 
				if($type == "square"){ 
					echo "Even Numbers : ";
					for($i=2 ;$i<=10; $i+=2){ ?>
				<li><?php echo $i; ?></li>

			<?php 
					} 
				}else if($type == "disc"){
					echo "Odd Numbers : ";
					for($i=1 ;$i<=10; $i+=2){ ?>
				<li><?php echo $i; ?></li>
			<?php 
					}
				}else if($type == "circle"){
					echo "Square Numbers : ";
					for($i=1 ;$i<=5; $i++){ ?>
				<li><?php echo $i*$i; ?></li>
			<?php	
					}
				}else{
					echo "Not a valid type";
				}
			?>
		</ul>
	</body>
</html>

