
var finishedLesson = false;

function showFinished(checker) {
    if (checker == 1) {
        document.getElementById("finished").innerHTML = "The lesson is finished!";
        document.getElementById("finished").style.color = "red";
    }
}
function returnPair() {
    var results = document.getElementsByClassName("active");
    var ceva = [];
    var i = 0;
    for (i = 0; i < results.length; i++) {
        ceva[i] = results.item(i).innerHTML;
    }
    return ceva;
}
function sendUsingAjax(caseSave) {
    var results = returnPair();
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
            if (caseSave == 0) {
                myFunction(this.responseText);
            }
            else if (caseSave == -1) {
                showFinished(this.responseText);
                window.finishedLesson = this.response == 1 ? true : false;
            }
        }
    };
    xmlhttp.open("GET", "http://localhost/University_WebTechnologies_Project/services/connectionFrontBack.php?c=" + results[0] + "&l=" + results[1] + "&save=" + caseSave, true);
    xmlhttp.send();
}

//variables that help for saving info
var answeredCorrectly = false;

function checkAnswer(answer) {
    if (!finishedLesson) {
        if (answer) {
            sendUsingAjax(1);
            document.getElementById("answer").innerHTML = "Congratulations! You completed this lesson!";
            document.getElementById("answer").style.color = "blue";
            showFinished(1);
        }
        else {
            document.getElementById("answer").innerHTML = "You must answer this question CORRECTLY";
            document.getElementById("answer").style.color = "red";
        }
    }
    else {
        document.getElementById("answer").innerHTML = "You already completed this lesson!";
        document.getElementById("answer").style.color = "green";
    }
}