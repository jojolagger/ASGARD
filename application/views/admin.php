<HTML>
	<head>
		<title>ASGARD</title>
	</head>
	<body>
		<div style="text-align:center; vertical-align:middle; padding: 10%;">
			<input type="text" /> <button type="button">Search</button> <br /> <br />
			<table border="1" style="width:100%">
				<tr style="background-color:#D3D3D3;">
					<td><h3 style="margin:3; text-align:center;">Acronym</h3></td>
					<td><h3 style="margin:3; text-align:center;">Expansion</h3></td>
					<td><h3 style="margin:3; text-align:center;">Description</h3></td>
					<td><h3 style="margin:3; text-align:center;">Add</h3></td>
					<td><h3 style="margin:3; text-align:center;">Delete</h3></td>
				</tr>
				{item}
				<tr>
					<td>{acronym}</td>
					<td>{expansion}</td>
					<td>{description}</td>
					<td><button type="button" style="width:100%; height:30px; padding:0; margin:0;">Add</button></td>
					<td><button type="button" style="width:100%; height:30px; padding:0; margin:0;">Delete</button></td>
				</tr>
				{/item}
			</table>
		</div>
	</body>
</HTML>