
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>



	<h1>Hello Hamzeh</h1>
	<table border="4">
		<tr>
			<th>Employee Name</th>
		</tr>
		<?php
		
/*foreach ($employees as $employees) {
	echo "<tr>";
	echo "<td>$employees</td>";
	echo "</tr>";
} */

		?>
		@foreach($employees as $employees)
		<tr>
		<td>{{$employees}}</td>
		</tr>
		@endforeach	
	</table>

</body>
</html>