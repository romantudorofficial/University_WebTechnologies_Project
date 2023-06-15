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
//getting the variables
$titles = $_POST['title'];
$contents = $_POST['content'];
$question = $_POST['question'];
$options = $_POST['options'];
$answer = $_POST['answer'];
$images = $_POST['image'];

//checking if the options are not identical
$similar = checkSimilarity($options);

if ($similar) {
    echo "oh no";
} else {
    //getting the order
    $elements = $_POST['elements'];
    $result = createTheRightOrder($elements, $titles, $contents, $images, $question, $options, $answer);
    $elements = removingEmptySpaces($elements, $titles, $contents, $images, $question, $options, $answer);

    //checking if it has a question, a valid answer , a title , content [image is not mandatory]
    if ($elements == null) {
        echo 'not good';
    } else {
        $checker = checkingElements($elements);
        if ($checker) {
            //last check
            $last = checkQuestionValue($elements, $result);
            if ($last) {
                //the actual code
                echo 'good lesson <3';
            } else {
                echo 'suepr bad';
            }
        } else {
            echo "bad bad";
        }
    }
}
?>