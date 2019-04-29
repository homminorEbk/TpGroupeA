<?php 
$conn=mysqli_connect("localhost","root","","tpgroupea");
if ($conn)
{
 $id=$_POST['id'];
 $nom=$_POST['nom'];
 $nomfamille=$_POST['nomfamille'];
 $age=$_POST['age'];
 $adresse=$_POST['adresse'];
try {
 $req = mysqli_query($conn,"insert into users(id,nom,nomfamille,age,adresse) values ('$id','$nom','$nomfamille','$age','$adresse')");
 header("Location:index.html");
}
catch (mysqli_sql_exception $e)
{
echo $e; 
}

}
else 
echo 'erreur'.mysql_error();
?>