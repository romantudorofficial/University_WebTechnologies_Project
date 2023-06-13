<!DOCTYPE html>
<html>
<head>
</head>
<body>
<?php
include '../../db/connection.php';

$q = $_REQUEST["q"];
$con = connect();
if (!$con) {
    die('Could not connect: ' . mysqli_error($con));
}

mysqli_select_db($con, "project");
$sql="SELECT description FROM suggestions WHERE category_name = '".$q."'";
$result = mysqli_query($con,$sql);

while($row = mysqli_fetch_array($result)) {
    echo "<div>
    <input type='checkbox' name='suggestion' value='" . $row['description'] . "'>
    <label for='" . $row['description'] . "'>". $row['description'] . "</label>
    </div>";
}

?>
<body>
</html>
