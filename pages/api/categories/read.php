<?php
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");

include_once '../config/Database.php';
include_once '../classes/Category.php';
include_once '../classes/Lesson.php';

$database = new Database();
$url = $database->getUriSegments();
$db = $database->getConnection();

$category = new Category($database);

$result = $category->getCategories();
if (array_search('categories', $url) == 4) {
    $checker = isset($_REQUEST['id_cat']);
    if ($checker) {
        $id = $_GET['id_cat'];
        $lessonsOfACategory = array();
        $lessonsOfACategory["lessons"] = array();
        $lesson = new Lesson($database);
        echo json_encode( $lesson->getLessons($id));
    } else {
        $itemRecords = array();
        $itemRecords["categories"] = array();
        while ($item = $result->fetch_assoc()) {
            extract($item);
            $itemDetails = array(
                "id_category" => $id_category,
                "categoryName" => $categoryName
            );
            array_push($itemRecords["categories"], $itemDetails);
        }
        http_response_code(200);
        echo json_encode($itemRecords);
    }
} else {
    http_response_code(404);
    echo json_encode(
        array("message" => "No item found.")
    );
}
?>