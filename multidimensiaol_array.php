<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Arrays</title>
		<style>
			table {
				border-collapse: collapse;
			}

			table, td, th {
				border: 1px solid black;
				padding: 20px;
			}
		</style>
	</head>
<body>
	<table>
		<tr>
			<th></th>
			<th>0</th>
			<th>1</th>
			<th>2</th>
		</tr>
<script type="text/javascript">
		var numbers = [[9, 21, 14], [11, 5, 27], [29, 17, 6]];
		var totaal = 0;

		function totalTable(value) {
		for (var a = 0; a < value.length; a++) {
			for (b = 0; b < value[a].length; b++) {
				totaal += value[a][b];
			}
		}
		return totaal;
		}

		for (var a = 0; a < numbers.length; a++) {
			document.write("<tr><td><b>"+ a + "</b></td>");
			for (b = 0; b < numbers[a].length; b++) {
			document.write("<td>"+ numbers[a][b] + "</td>");
			}
			document.write("</tr>");
		}

		function totalRow(index) {
			var totaal2 = 0;
			for (var b = 0; b < numbers[index].length; b++) {
				totaal2 += numbers[index][b];
			}
			return "Totaal van rij " + index +" is: " + totaal2 + "<br>";
		}

		document.write(totalRow(0));
		document.write(totalRow(1));
		document.write(totalRow(2));
		document.write("Totaal array is: " + totalTable(numbers) + "<br>");

</script>
</table>
</body>
</html>
