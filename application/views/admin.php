<HTML>
	<head>
		<title>ASGARD</title>
	</head>
	<body>
		<div style="text-align:center; vertical-align:middle; padding: 10%;">
			<form action="/listing" method="POST">	<input type="text" name="searched" style="width=40%" />	<input type="submit" value="Search" />	</form>
			<table border="1" style="width:100%">
				<tr style="background-color:#D3D3D3;">
					<td><h3 style="margin:3; text-align:center;">Acronym</h3></td>
					<td><h3 style="margin:3; text-align:center;">Expansion</h3></td>
					<td><h3 style="margin:3; text-align:center;">Description</h3></td>
					<td><h3 style="margin:3; text-align:center;">Add</h3></td>
				</tr>
				{item}
				<tr>
					<td>{acronym}</td>
					<td>{expansion}</td>
					<td>{description}</td>
					<td><form action="/admin/confirm/{description_id}" method="POST">	<input type="submit" value="Confirm" />	</form></td>
				</tr>
				{/item}
			</table>
		</div>
	</body>
</HTML>