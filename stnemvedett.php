<?php
require_once 'db.php';
$sql="SELECT COUNT(*) as nr,gyakorisag from faj where vedett=0 GROUP BY gyakorisag";
$stmt=$db->query($sql);
echo json_encode($stmt->fetchAll());
?>