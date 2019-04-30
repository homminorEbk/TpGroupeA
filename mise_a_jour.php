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
					 <li><a href="modifier.php"> Modifier Utilisateur</a></li>
					 <li><a href="suppression.php"> Supprimer Utilisateur</a></li>
		
		<li><input  name="Ser" type="Search" value="" placeholder="Rechercher"> </li>
		</ul> 
		</div>
	    </div>
		
		<div id="ligne">    </div>
	
<div id="corp">
	<nav id="gras_Titre">Modification d'un Utilisateur</nav>
		
		
	
		
		<nav id="Formulaire">
			<form method="post" action="enregistrement.php">
		<?php 
		

	$conn=mysqli_connect("localhost","root","","tpgroupea");
if ($conn)
{
	$exe=mysqli_query($conn,"Select * From users");
  $i=0;
echo"<ul><li>Identifiant</li><select name='monid'> ";
  while ($ligne=mysqli_fetch_array($exe))
	{$i=$i+1;
 echo"<option value=".$ligne['id'].">".$ligne['id']."</option>";  
	}
	echo"</select> ";
	}
else 
echo 'erreur'.mysqli_error();
	?>	
			
					 <li>Nom Utilisateur</li>
					 <li><input  class="btmspace" name="nom" type="text" value=""required></li>
					 <li>Nom de Famille</li>
					 <li><input  class="btmspace" name="nomfamille" type="text" value=""  required></li>
					 <li>Age</li>
					 <li><input  class="btmspace" name="age" type="text" required></li>
					 <li>Adresse</li>
					 <li><input  class="btmspace" name="adresse" type="text" value="" required></li>
					<li>
					
				</ul> 
			
		</nav>
		
		<nav class="button_">
						<button id="Save_" type="submit" value="submit">Valider</button>
						<button  id="annuler_" type="reset" value="submit">Annuler</button>
				</form>		
					</nav>
		
	    </div>
		

	</body>
	
	
	
	
	
		</div>
		<div id="pied">
	Copyright &copy; 2019 By TTB programming Club
	    </div>

	</body>
	
	
</html>