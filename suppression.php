<html>
	<link rel="stylesheet" type="text/css" href="moncss.css">
	<head>
	<body>
	<div id="contenaire">	
		<div id="titre">
			<div class="montitre">L2 ISI - ISCI</div>
		<div class="liens">
		<ul>
					 <li><a href="index.html"> Enregistrement Utilisateur</a></li>
					 <li><a href="liste.php"> Liste des Utilisateurs</a></li>
					 <li><a href=""> Modifier Utilisateur</a></li>
					 <li><a href="suppression.php"> Supprimer Utilisateur</a></li>
		
		<li><input  name="Ser" type="Search" value="" placeholder="Rechercher"> </li>
		</ul> 
		</div>
	    </div>
		
		<div id="ligne">    </div>
		<table>
		<tr id="entete">
		<td> Num</td>
		<td> ID</td>
		<td> NOM</td>
		<td> NOM FAMILLE</td>
		<td> AGE</td>
		<td> ADRESSE</td>
		<td> Supprimer</td>
		</tr>
		<?php 
		$conn=mysqli_connect("localhost","root","","tpgroupea");
		
		
if ($conn)
{
	aff();
}
else 
echo 'erreur'.mysqli_error();

function aff()
{
$conn=mysqli_connect("localhost","root","","tpgroupea");
$exe=mysqli_query($conn,"Select * From users");
  $i=0;
   while ($ligne=mysqli_fetch_array($exe))
	{$i=$i+1;
 echo"<tr>
	<td>".$i."</td>
	<td>".$ligne['id']."</td>	
	<td>".$ligne['nom']."</td>
	<td>".$ligne['nomfamille']."</td>
	<td>".$ligne['age']."</td>
	<td>".$ligne['adresse']."</td>
	<td>";

	echo "<a href=supp.php?id=".$ligne['id']."> Supprimer</a>";
	
	echo "</td>
	</tr>";  
	}
	
}
	?>
	</table>

	
		</div>
		<div id="pied">
	Copyright &copy; 2019 By TTB programming Club
	    </div>

	</body>
	
	
</html>