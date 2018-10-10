<?php
$spojenie = mysqli_connect("localhost", "root", "") or die ('Prihlasovacie udaje su zle');
mysqli_select_db($spojenie,"Ovi") or die ('Zle zadana databaza)<br />'.mysqli_error());
mysqli_query($spojenie,"SET NAMES 'cp1250'");
?>