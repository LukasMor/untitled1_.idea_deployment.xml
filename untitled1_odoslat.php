<?php
require 'Conection.php';
ob_start();
if (isset($_POST['sent'])) {
    $Name = trim($_POST['Name']);
    $Surname = trim($_POST['Surname']);
    $PSC = trim($_POST['PSC']);
    $City = trim($_POST['City']);
    $Ulica = trim($_POST['Ulica']);

    $odoslat = mysqli_query($spojenie,"INSERT INTO Klienti (Name, Surname, PSC, City, Ulica)
			VALUES ('$Name', '$Surname', '$PSC', '$City', '$Ulica')");
}

ob_end_flush();
?>