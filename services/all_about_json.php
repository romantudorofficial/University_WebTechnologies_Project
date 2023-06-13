<?php
function gettingJson()
{
    $file = file_get_contents("../files/checker.json");
    $jsonFile = json_decode($file, true);
    return $jsonFile;
}
function checking_email($category, $lesson, $save)
{
    $jsonArray = decodingJSON();
    $email = $_COOKIE['Email'];
    return existCategoryLessonEmail($jsonArray, $category, $lesson, $email, $save);

}
function decodingJSON()
{
    $jsonFile = gettingJson();
    $i = 0;
    foreach ($jsonFile as $element) {
        $array = (array) $element;
        $result[$i]['nameCategory'] = $array['nameCategory'];
        //for getting the lessons
        $j = 0;
        foreach ($array['lessons'] as $lesson) {
            $arrayForLessons = (array) $lesson;
            $result[$i]['lessons'][$j]['nameLesson'] = $arrayForLessons['nameLesson'];
            //for getting the emails
            $k = 0;
            foreach ($arrayForLessons['email'] as $email) {
                $result[$i]['lessons'][$j]['email'][$k] = $email;
                $k = $k + 1;
            }
            $j = $j + 1;
        }
        $i = $i + 1;
    }
    //echo var_dump($result);
    return $result;
}
function existCategoryLessonEmail($jsonFile, $category, $lesson, $email, $save)
{
    //local variables
    $counterCategory = 0;
    $counterEmails = 0;
    $counterLesson = 0;
    //checks category
    //$ok=-2;
    foreach ($jsonFile as $test) {
        //var_dump($test);
        //echo "YOLO<br>";
        if ($test['nameCategory'] == $category) {
            //echo "YES, category <br>";
            //$ok=-1;
            //now checking lessons
            foreach ($test['lessons'] as $lessons) {
                if ($lessons['nameLesson'] == $lesson) {
                    //echo "YES, lesson <br>";
                    //now checking emails
                    // $ok=0;
                    foreach ($lessons['email'] as $emails) {
                        if ($emails == $email) {
                            //echo "YES, email <br>";
                            // $ok=1;
                            return 1;
                        }
                        $counterEmails = $counterEmails + 1;
                    }
                    if ($save>0) {
                        addEmail($jsonFile, $email, $counterCategory, $counterLesson, $counterEmails);
                    }
                    return 0;
                }
                $counterLesson = $counterLesson + 1;
            }
            if ($save>0) {
                addLesson($jsonFile, $lesson, $email, $counterCategory, $counterLesson);
            }
            return -1;
        }
        $counterCategory = $counterCategory + 1;
    }
    if ($save>0) {
        addCategory($jsonFile, $category, $lesson, $email, $counterCategory);
    }
    return -2;
}
function addCategory($jsonFile, $category, $lesson, $email, $idCategory)
{
    $jsonFile[$idCategory]['nameCategory'] = $category;
    $jsonFile[$idCategory]['lessons'][0]['nameLesson'] = $lesson;
    $jsonFile[$idCategory]['lessons'][0]['email'][0] = $email;
    savingInJson($jsonFile);
}
function addLesson($jsonFile, $lesson, $email, $idCategory, $idLesson)
{
    $jsonFile[$idCategory]['lessons'][$idLesson]['nameLesson'] = $lesson;
    $jsonFile[$idCategory]['lessons'][$idLesson]['email'][0] = $email;
    savingInJson($jsonFile);
}

function addEmail($jsonFile, $email, $idCategory, $idLesson, $idEmail)
{
    $jsonFile[$idCategory]['lessons'][$idLesson]['email'][$idEmail] = $email;
    savingInJson($jsonFile);
}
function savingInJson($jsonArray)
{
    $jsonFile = json_encode($jsonArray, JSON_PRETTY_PRINT);
    file_put_contents("../files/checker.json", $jsonFile);
}

?>