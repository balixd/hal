<?php
require_once 'db.php';
extract($_GET);
$sql="SELECT tajnev from nev where halid={$id}";
$stmt=$db->query($sql);
echo json_encode($stmt->fetchAll());
?>