<?php
include_once '../config/Database.php';
class Category
{
    private $id_category;
    private $categoryName;
    private $con;
    function __construct(Database $db)
    {
        $this->con = $db->getConnection();
    }

    function getCategories()
    {
        $stmt = $this->con->prepare("SELECT * FROM categories where type not like 'active' order by lower(categoryName)");
        $stmt->execute();
        $result = $stmt->get_result();
        return $result;
    }
    function getCategoryId($id)
    {
        $stmt = $this->con->prepare("SELECT * FROM categories where id_category =" . $id);
        $stmt->execute();
        $result = $stmt->get_result();
        return $result;
    }
}
?>