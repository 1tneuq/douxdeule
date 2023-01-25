
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
</style>

<h1 class="titr">Mes sondages</h1>
<table class="Tablo">
	<thead>
		<tr>
			<th>Créateur</th>
			<th>Titre</th>
			<th>Lieu</th>
			<th>Date</th>
			<th>Note</th>
			<th>Clé</th>
			<th></th>
		</tr>
	</thead>
  <tbody>
	<?php foreach($data as $item){ ?>
		<tr>
			<td><?php echo $item["pseudo"];  ?></td>
			<td><?php echo $item["titre"];  ?></td>
			<td><?php echo $item["lieu"];  ?></td>
			<td><?php echo $item["date1"];  ?></td>
			<td><?php echo $item["note"];  ?></td>
			<td><a href="<?php echo base_url("welcome/reponse/".$item["invitation"]); ?>"><?php echo $item["invitation"];  ?></a></td>
			<td>
			<a href="<?php echo base_url("welcome/resultat/".$item["id"]) ?>" ><button>Résultats</button></a>
			<a href="<?php echo base_url("welcome/supprimer/".$item["id"]); ?>" ><button>Supprimer</button></a>
			</td>
		</tr>
	<?php } ?>
  </tbody>
</table>

<style>
	.titr{
		text-align: center;
	}
</style>
