<?php
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");

include_once '../../config/Database.php';
include_once '../../classes/Content.php';

$database = new Database();
$url = $database->getUriSegments();
$db = $database->getConnection();

$content = new Content($database);


if (isset($_REQUEST['id'])) {
    $id = $_GET['id'];
    $itemRecords = $content->getContent($id);
    http_response_code(200);
    echo json_encode($itemRecords);
} else {
    http_response_code(404);
    echo json_encode(
        array("message" => "No item found.")
    );
}
?>