
function callShowLessons() {
    var category = returnSelectedCategory();
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
            createDiv(this.responseText);
        }
    };
    xmlhttp.open("GET", "http://localhost/University_WebTechnologies_Project/pages/admin/delete_mvc/categoryLesson.php?category=" + category, true);
    xmlhttp.send();
}

function createDiv(lesson) {
    var select = document.querySelector("#lesson");
    var len = select.length;
    while (len--) {
        select.remove(len);
    }
    if (lesson.length == 0) {
        return null;
    }
    else if (lesson.includes(',')) {
        var lessons = lesson.split(',');
        lessons.forEach(element => {
            const node = document.createElement('option');
            node.setAttribute("name", 'lesson');
            const textNode = document.createTextNode(element);
            node.appendChild(textNode);
            select.appendChild(node);
        });
    }
    else {
        const node = document.createElement('option');
        node.setAttribute("name", 'lesson');
        const textNode = document.createTextNode(lesson);
        node.appendChild(textNode);
        select.appendChild(node);
    }
}
function returnSelectedCategory() {
    var selectedDoc = document.categoryLesson.category;
    return selectedDoc.value;
}