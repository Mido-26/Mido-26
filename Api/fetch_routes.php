<?php
require_once 'conn.php';

$sql = "SELECT id, origin, destination FROM route";
$result = mysqli_query($conn, $sql);
$routes = array();

while ($row = mysqli_fetch_assoc($result)) {
    $routes[] = $row;
}

echo json_encode($routes);
?>
