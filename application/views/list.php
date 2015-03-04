<HTML>
	<head>
		<title>ASGARD</title>
	</head>
	<body>
		<div style="text-align:center; vertical-align:middle; padding: 10%;">
			<input type="text" /> <button type="button">Search</button>
			<h2>{acronym}</h2>
			<button type="button" style="width:100px; height:50px;">Add</button>
			<br /> <br />
			<table border="1" style="width:100%">
				<tr style="background-color:#D3D3D3;">
					<td><h3 style="margin:3; text-align:center;">Expansion</h3></td>
					<td><h3 style="margin:3; text-align:center;">Description</h3></td>
				</tr>
				{items}
				<tr>
					<td>{expansion}</td>
					<td>{description}</td>
				</tr>
				{/items}
			</table>
		</div>
	</body>
</HTML>