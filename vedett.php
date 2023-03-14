<?php
require_once 'db.php';
$sql="SELECT nev,feljegy, gyakorisag from faj where vedett=1 order by nev ";
$stmt=$db->query($sql);
echo json_encode($stmt->fetchAll());
?>