<?php
//creating the good order of contents
function createTheRightOrder($elements, $titles, $contents, $images, $question, $options, $answer)
{
    $i_title = 0;
    $i_content = 0;
    $i_image = 0;
    $i_final = 0;
    $final = null;
    foreach ($elements as $element) {
        if ($element == "title") {
            if (!($titles[$i_title] == "" || $titles[$i_title] == null)) {
                $final[$i_final] = $titles[$i_title];
                $i_final = $i_final + 1;
            }
            $i_title = $i_title + 1;
        } else if ($element == "content") {
            if (!($contents[$i_content] == "" || $contents[$i_content] == null)) {
                $final[$i_final] = $contents[$i_content];
                if (strstr($final[$i_final], "\n")) {
                    $final[$i_final] = str_replace("\n", "<br>", $final[$i_final]);
                }
                $i_final = $i_final + 1;
            }
            $i_content = $i_content + 1;
        } else if ($element == "image") {
            if (!($images[$i_image] == "" || $images[$i_image] == null)) {
                $final[$i_final] = $images[$i_image];
                $i_final = $i_final + 1;
            }
            $i_image = $i_image + 1;
        } else if ($element == "question") {
            break;
        }
    }
    if (!($question == "" || $question == null)) {
        $final[$i_final] = $question;
        $i_final = $i_final + 1;
    }
    foreach ($options as $element) {
        if (!($element == "" || $element == null)) {
            $final[$i_final] = $element;
            $i_final = $i_final + 1;
        }
    }
    if (!($answer == "" || $answer == null)) {
        $final[$i_final] = $answer;
        $i_final = $i_final + 1;
    }
    return $final;
}

function removingEmptySpaces($elements, $titles, $contents, $images, $question, $options, $answer)
{
    $i_title = 0;
    $i_content = 0;
    $i_image = 0;
    $i_final = 0;
    foreach ($elements as $element) {
        if ($element == "title") {
            if ($titles[$i_title] == "" || $titles[$i_title] == null) {
                unset($elements[$i_final]);
            }
            $i_title = $i_title + 1;
        } else if ($element == "content") {
            if ($contents[$i_content] == "" || $contents[$i_content] == null) {
                unset($elements[$i_final]);
            }
            $i_content = $i_content + 1;
        } else if ($element == "image") {
            if ($images[$i_image] == "" || $images[$i_image] == null) {
                unset($elements[$i_final]);
            }
            $i_image = $i_image + 1;
        } else if ($element == "question") {
            break;
        }
        $i_final = $i_final + 1;
    }
    if ($question == "" || $question == null) {
        unset($elements[$i_final]);
    }
    $i_final = $i_final + 1;
    foreach ($options as $element) {
        if ($element == "" || $element == null) {
            unset($elements[$i_final]);
        }

        $i_final = $i_final + 1;
    }
    if ($answer == "" || $answer == null) {
        unset($elements[$i_final]);
    }
    $i = 0;
    foreach ($elements as $element) {
        $newArray[$i] = $element;
        $i = $i + 1;
    }
    return $newArray;
}

function checkingElements($elements)
{
    if (!in_array("title", $elements)) {
        return false;
    }
    if (!in_array("answer", $elements)) {
        return false;
    }
    if (!in_array("question", $elements)) {
        return false;
    }
    if (!in_array("option", $elements)) {
        return false;
    }
    if (!in_array("content", $elements)) {
        return false;
    }
    $counter = array_count_values($elements);
    if ($counter['option'] < 2) {
        return false;
    }
    return true;
}
function checkQuestionValue($elements, $result)
{
    $counter = array_count_values($elements);
    $option_number = $counter['option'];
    $key = array_search('answer', $elements);
    $value_answer = $result[$key];
    if (!(is_numeric($value_answer))) {
        return false;
    }
    if ($value_answer > $option_number) {
        return false;
    }
    return true;
}
function checkSimilarity($options)
{
    $i = 0;
    $j = 0;
    foreach ($options as $option1) {
        $j = 0;
        foreach ($options as $option2) {
            if ($i != $j) {
                if ($option1 == $option2 && ($option1 != "" && $option1 != null)) {
                    return true;
                }
            }
            $j = $j + 1;
        }
        $i = $i + 1;
    }
    return false;
}

function sendingViaCurl($elements, $result, $idLesson)
{
    $file_name = "./adding_in_db.php";
    //The url you wish to send the POST request to
    $url = $file_name;

    //The data you want to send via POST
    $fields = [
        'elements' => $elements,
        'content' => $result,
        'idLesson' => $idLesson
    ];

    //url-ify the data for the POST
    $fields_string = http_build_query($fields);

    //open connection
    $ch = curl_init();

    //set the url, number of POST vars, POST data
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_POST, true);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $fields_string);

    //So that curl_exec returns the contents of the cURL; rather than echoing it
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

    //execute post
    $result = curl_exec($ch);
    echo $result;

    curl_close($ch);
}

function addingInDB($elements, $result, $lessonId)
{
    include_once '../../../db/getting_info.php';
    include_once '../../../db/adding_deleting.php';
    addContent($lessonId, $elements, $result);

    /*$lesson = getContent($lessonId);
    $elementNew = unserialize($lesson['contentType']);
    $resulttNew = unserialize($lesson['contentLesson']);
    foreach ($elementNew as $content) {
        echo $content . "<br>";
    }
    $idQuestion = array_search("question",$elementNew);
    echo "the question is:<br>".$resulttNew[$idQuestion];*/

}


//getting the variables
$titles = $_POST['title'];
$contents = $_POST['content'];
$question = $_POST['question'];
$options = $_POST['options'];
$answer = $_POST['answer'];
$images = $_POST['image'];
$id = $_GET['id'];

//checking if the options are not identical
$similar = checkSimilarity($options);

if ($similar) {
    header("Location: ../content.php?error=-2", true, 303);
} else {
    //getting the order
    $elements = $_POST['elements'];
    $result = createTheRightOrder($elements, $titles, $contents, $images, $question, $options, $answer);
    $elements = removingEmptySpaces($elements, $titles, $contents, $images, $question, $options, $answer);

    //checking if it has a question, a valid answer , a title , content [image is not mandatory]
    if ($elements == null) {
        header("Location: ../content.php?id=" . $id . "&error=0", true, 303);
    } else {
        $checker = checkingElements($elements);
        if ($checker) {
            //last check
            $last = checkQuestionValue($elements, $result);
            if ($last) {
                //the actual code
                //later using curl
                //header("Location: ./adding_in_db.php?id=" . $id, true, 303);
                //sendingViaCurl($elements, $result, $id);
                addingInDB($elements, $result, $id);
            } else {
                header("Location: ../content.php?id=" . $id . "&error=-3", true, 303);
            }
        } else {
            header("Location: ../content.php?id=" . $id . "&error=-1", true, 303);
        }
    }
}
?>