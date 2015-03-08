<HTML>
	<head>
		<title>ASGARD</title>
	</head>
	<body>
		<div style="text-align:center; vertical-align:middle; padding: 10%;">
			<form action="/listing" method="POST">	<input type="text" name="searched" style="width=40%" />	<input type="submit" value="Search" />	</form>
			<h2>{acronym}</h2>
			<br /> <br />
			<table border="1" style="width:100%">
				<tr style="background-color:#D3D3D3;">
					<td>Expansion</td>
					<td>Description</td>
				</tr>
				{items}
				<tr>
					<td>{expansion}</td>
					<td>{description}</td>
				</tr>
				{/items}
			</table>
			<br />
			<form action="add/form/{id}" method="POST">	<input type="submit" value="Add an Expansion" />	</form>
		</div>
	</body>
</HTML>