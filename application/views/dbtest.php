<HTML>
	<head>
		<title>ASGARD</title>
	</head>
	<body>
		<div style="text-align:center; vertical-align:middle; padding: 10%;">
			<?php foreach ($description as $desc): ?>
				<h2>
					<?php foreach ($desc as $item) : 
							echo $item; 
							echo ', <br />'; 
					endforeach; ?>
				</h2><br />
			<?php endforeach; ?>
		</div>
	</body>
</HTML>