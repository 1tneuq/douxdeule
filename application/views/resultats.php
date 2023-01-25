
	<style>
		table.Tablo {
		width: 100%;
		background-color: #ffffff;
		border-collapse: collapse;
		border-width: 1px;
		border-color: #a4a4a2;
		border-style: solid;
		color: #000000;
		}

		table.Tablo td, table.Tablo th {
		border-width: 1px;
		border-color: #a4a4a2;
		border-style: solid;
		padding: 3px;
		}

		table.Tablo thead {
		background-color: #fafafa;
		}

		.titre{
			text-align:center;
		}
	</style>

	<h1 class="titre">Résultats du sondage</h1>
<table class="Tablo">
	<thead>
		<tr>
		<th>Participants</th>
		<th>Début</th>
		<th>Fin</th>
		</tr>
	</thead>
	<tbody>
		<tr>
			<td><?php echo $data["can"]; ?></td>
			<td><?php echo $data["date1"]; ?></td>
			<td><?php echo $data["date2"]; ?></td>
		</tr>
	</tbody>
</table>
