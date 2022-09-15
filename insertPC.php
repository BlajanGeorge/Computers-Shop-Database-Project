<?php
if (isset($_POST['submit'])) {
	// creare variabile cu nume scurte

$Model=(int) $_POST['MODEL'];
$Viteza=$_POST['VITEZA'];
$Ram=(int) $_POST['RAM'];
$Hdd=(int) $_POST['HDD'];


if (!$Model || !$Viteza || !$Ram || !$Hdd)
{
echo 'Nu ati introdus datele.';
exit;
}

// if (!get_magic_quotes_gpc()) {
// $Model = addslashes($Model);
// }

// se precizează că se foloseşte PEAR DB
$user = 'root';
$pass = '';
$host = 'localhost';
$db_name = 'proiect_bd';
// conectare la BD
$connect = mysqli_connect($host, $user, $pass, $db_name);
// se verifică dacă a funcţionat conectarea
if ($connect->connect_error)
{
die ('Eroare la conectare:' . $connect->connect_error);
exit;
}

// se emite interogarea
$query = "INSERT INTO tabela_pc (MODEL, VITEZA, RAM, HD) VALUES ({$Model}, {$Viteza}, {$Ram},{$Hdd})";

mysqli_query($connect, $query);


 
// $stmt = mysqli_prepare($connect,$query);

// $stmt->execute();
// echo $stmt->affected_rows.' Nota adaugata in BD.';
// $stmt->close();


// deconectarea de la BD
mysqli_close($connect);
}
?>

<!DOCTYPE html>
<html>
<head>
<title>Insert Product</title>

<?php include '_partials/head.php'; ?>
<style>
.introdus{
	margin-top: 15%;
	margin-left:10%;
	color:white
	
}
.add-button{
	  background-color: #f44336;
  border: none;
  color: white;
  padding: 12px 24px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
margin-left:7%;
}
</style>
</head>
<body>


<div class="navbar">


  <!-- Centered link -->
 
  <div class="dropdown">
    <button class="dropbtn">Products
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <a href="insertProdus.php">Insert</a>
      <a href="deleteProdus.php">Delete</a>
	  <a href="afisareProduse.php">Display</a>
	
  </div>
  </div>
  <div class="dropdown">
    <button class="dropbtn">PCs
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <a href="insertPC.php">Insert</a>
      <a href="deletePC.php">Delete</a>
	   <a href="afisarePcuri.php">Display</a>
    </div>
  </div> 
   <div class="topnav-centered">
    <a href="Proiect.html" class="active">Home</a>
  </div>
  <div class="exterior">
  <div class="dropdown">
    <button class="dropbtn">Laptops 
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content" style="right: 0;">
   <a href="insertLaptop.php">Insert</a>
      <a href="deleteLaptop.php">Delete</a>
	   <a href="afisareLaptopuri.php">Display</a>
    </div>
  </div> 
  </div>
  <div class="exterior">
  <div class="dropdown">
    <button class="dropbtn">Printers
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
   <a href="insertImprimanta.php">Insert</a>
      <a href="deleteImprimanta.php">Delete</a>
	   <a href="afisareImprimante.php">Display</a>
    </div>
  </div> 
  </div>
</div>  
</div>
<div class="introdus">
<form method="post" action=""> 

<input type="hidden" name="submitted" value="true" />
<fieldset>
<legend>New PC</legend>
<label>Model:<input type="integer" name="MODEL" /></label>
<label>Viteza:<input type="float" name="VITEZA" /><label>
<label>RAM:<input type="integer" name="RAM" /><label>
<label>HDD:<input type="integer" name="HDD" /><label>


</fieldset>
<br />
<input type="submit" name="submit" value="add new PC" class="add-button"/>
</form>
</div>


<div class="glowing">
<span style="--i:1;"></span>
<span style="--i:2;"></span>
<span style="--i:3;"></span>
</div>
<div class="glowing">

<span style="--i:1;"></span>
<span style="--i:2;"></span>
<span style="--i:3;"></span>
</div>
<div class="glowing">
<span style="--i:1;"></span>
<span style="--i:2;"></span>
<span style="--i:3;"></span>
</div>
<div class="glowing">
<span style="--i:1;"></span>
<span style="--i:2;"></span>
<span style="--i:3;"></span>
</div>


</body>
</html>