<?php
require_once "autoload.php";
$conn = mysqli_connect("localhost", "root", "lars123", "steden");

$filename = "btw.csv";
$fp = fopen('php://output', 'w');

$query = "SELECT COLUMN_NAME FROM INFORMATION_SCHEMA.COLUMNS WHERE TABLE_NAME='eu_btw_codes'";
$result = mysqli_query($conn,$query);
while ($row = mysqli_fetch_row($result)) {
	$header[] = $row[0];
}

header('Content-type: application/csv');
header('Content-Disposition: attachment; filename='.$filename);
fputcsv($fp, $header);

$query = "SELECT * FROM eu_btw_codes";
$result = mysqli_query($conn, $query);
while($row = mysqli_fetch_row($result)) {
	fputcsv($fp, $row);
}
exit;
?>

