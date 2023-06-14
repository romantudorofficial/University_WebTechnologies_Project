<?php
//getting the variables
$titles = $_POST['title'];
$contents = $_POST['content'];
$question = $_POST['question'];
$options = $_POST['options'];
$answer = $_POST['answer'];
$image = null;
if(!empty($_REQUEST['image'])){
    $image = $_POST['image'];
}
foreach ($titles as $value) {
    echo $value . '<br />';
}
echo $question;
foreach ($options as $value) {
    echo $value . '<br />';
}
?>