<h1 style="text-align: center; background-color: #4CAF50;">Klienti</h1>
<div style="background-color: #E0E0E0;" align="left">
<?php
require 'Conection.php';
$query = mysqli_query($spojenie,"SELECT * FROM Klienti") or die (mysqli_error());
while($row = mysqli_fetch_object($query)){
    echo $row->ID;
    echo "</br>";
    echo $row->Name;
    echo "</br>";
    echo $row->Surname;
    echo "</br>";
    echo $row->PSC;
    echo "</br>";
    echo $row->City;
    echo "</br>";
    echo $row->Ulica;
    echo "</br>";
    echo "</br>";

}
?>
</div>

