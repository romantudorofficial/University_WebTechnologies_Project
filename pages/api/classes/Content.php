<?php
include_once '../../config/Database.php';
class Content
{
    private $id_content;
    private $id_lesson;
    private $contentLesson;
    private $contentType;
    private $con;
    function __construct(Database $db)
    {
        $this->con = $db->getConnection();
    }
    function parsingJson($result)
    {
        $itemRecords = array();
        $itemRecords["content"] = array();
        while ($item = $result->fetch_assoc()) {
            extract($item);
            $itemDetails = array(
                "id_content" => $id_content,
                "id_lesson" => $id_lesson,
                "contentLesson" => $contentLesson,
                "contentType" => $contentType
            );
            array_push($itemRecords["content"], $itemDetails);
        }
        return $itemRecords;
    }

    function getContent($id_lesson)
    {
        $stmt = $this->con->prepare("SELECT * FROM content where id_lesson = ?");
        $stmt->bind_param("i", $id_lesson);
        $stmt->execute();
        $result = $stmt->get_result();
        return $this->parsingJson($result);
    }
}
?>