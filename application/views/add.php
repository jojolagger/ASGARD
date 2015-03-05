<HTML>
	<head>
		<title>ASGARD</title>
	</head>
	<body>
		<div style="text-align:center; vertical-align:middle; padding: 10%;">
			<form action="/listing" method="POST">	<input type="text" style="width=40%" />	<input type="submit" value="Search" />	</form>
			<h2>{acronym}</h2>
			
			<form action="/add/submit" method="POST">
			Expansion  <input type="text" />
			<br />
			Description <input type="text" />
			<br />
			<input type="submit" value="Add">
			</form>
			
		</div>
	</body>
</HTML>