<?php
include_once '../config/Database.php';
class Lesson
{
    private $id_category;
    private $id_lesson;
    private $lessonName;
    private $difficulty;
    private $con;
    function __construct(Database $db)
    {
        $this->con = $db->getConnection();
    }
    function parsingJson($result)
    {
        $itemRecords = array();
        $itemRecords["lessons"] = array();
        while ($item = $result->fetch_assoc()) {
            extract($item);
            $itemDetails = array(
                "id_category" => $id_category,
                "id_lesson" => $id_lesson,
                "lessonName" => $lessonName,
                "difficulty" => $difficulty
            );
            array_push($itemRecords["lessons"], $itemDetails);
        }
        return $itemRecords;
    }

    function getLessons($id_category)
    {
        $result = [];
        $resultEasy = $this->parsingJson($this->getEasyLessons($id_category));
        if ($resultEasy['lessons'] != null) {
            $result = $result + $resultEasy;
        }
        $resultMedium = $this->parsingJson($this->getMediumLessons($id_category));
        if ($resultMedium['lessons'] != null) {
            $result = $result + $resultMedium;
        }
        $resultHard = $this->parsingJson($this->getHardLessons($id_category));
        if ($resultHard['lessons'] != null) {
            $result = $result + $resultHard;
        }
        return $result;
    }
    function getEasyLessons($id_category)
    {
        $stmt = $this->con->prepare("SELECT * FROM lessons where type not like 'active' and difficulty='easy' and id_category = ? order by lower(lessonName)");
        $stmt->bind_param("i", $id_category);
        $stmt->execute();
        $result = $stmt->get_result();
        return $result;
    }
    function getMediumLessons($id_category)
    {
        $stmt = $this->con->prepare("SELECT * FROM lessons where type not like 'active' and difficulty='medium' and id_category = ? order by lower(lessonName)");
        $stmt->bind_param("i", $id_category);
        $stmt->execute();
        $result = $stmt->get_result();
        return $result;
    }
    function getHardLessons($id_category)
    {
        $stmt = $this->con->prepare("SELECT * FROM lessons where type not like 'active' and difficulty='hard' and id_category = ? order by lower(lessonName)");
        $stmt->bind_param("i", $id_category);
        $stmt->execute();
        $result = $stmt->get_result();
        return $result;
    }
}
?>