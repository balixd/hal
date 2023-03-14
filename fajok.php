<?php
require_once 'db.php';
$sql="SELECT halid,nev from faj order by nev";
$stmt=$db->query($sql);
echo json_encode($stmt->fetchAll());
?>