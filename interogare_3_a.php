<!DOCTYPE html>
<html>
<head>
<style type="text/css">
.navbar {
  overflow: hidden;
  background-color: #333;
   border-radius: 25px;
margin:2px;

}

.navbar a {
  float: left;
  font-size: 16px;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
 
  
}

.dropdown {
  float: left;
  overflow: hidden;
  border-radius: 25px;
}

.dropdown .dropbtn {
  font-size: 16px;  
  border: none;
  outline: none;
  color: white;
  padding: 14px 16px;
  background-color: inherit;
  font-family: inherit;
  margin: 0;
  
}

.navbar a:hover, .dropdown:hover .dropbtn {
  background-color: red;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f9f9f9;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
    border-radius: 25px;
}

.dropdown-content a {
  float: none;
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
  text-align: center;
    border-radius: 25px;
}

.dropdown-content a:hover {
  background-color: #ddd;
}

.dropdown:hover .dropdown-content {
  display: block;
}
.exterior{
float: right;

}
.topnav-centered{
  margin-left: 50%; 

  }
.active{
 border-radius: 25px;
 background-color: green;
 }
table{ 
border-collapse: collapse;
width: 100%;
color: #d96459;
font-family: monospace;
font-size: 25px;
text-align: left;
}
th{
background-color: #588c7e;
color:white;
}
tr:nth-child(even) {background-color: #f2f2f2}
.cerinta{

margin-top:10%;
border-style: dashed;
height:40px;
border-color:black;
background-color:pink;
display: flex;
  justify-content: center;
  align-items: center;
font-family: Comic Sans MS;
                font-size:      20px;
                font-weight:    bold;
border-radius:25px;
}

</style>
<title>Interogare_3_a</title>
</head>
<body>

<div class="navbar">


  <!-- Centered link -->
 
  <div class="dropdown">
    <button class="dropbtn">Products
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <a href="insertprodus.php">Insert</a>
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
    <div class="dropdown-content">
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
<table>
<tr>
<th>Model</th>
<th>Culoare</th>
<th>Tip</th>
</tr>
<?php
$conn=mysqli_connect("localhost","root","","proiect_bd");
if($conn-> connect_error){
die("Eroare la conexiune:".$conn->connect_error);
}
$sql = "SELECT MODEL,CULOARE,TIP FROM tabela_imprimanta WHERE CULOARE LIKE 'D' ORDER BY TIP";
$result= $conn-> query($sql);
if($result-> num_rows > 0){
while($row = $result-> fetch_assoc()){
echo "<tr><td>".$row["MODEL"]."</td><td>".$row["CULOARE"]."</td><td>".$row["TIP"]."</td></tr>";
}
echo "</table>";
}
else
{ echo "0 result";
}
$conn->close();
?>
</table>

<div style="width:50%;margin:10px auto" class="cerinta">
S?? se g??seasc?? detaliile imprimantelor color ordonat cresc??tor dup?? tip.
</div>
</body>
</html>