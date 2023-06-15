
function postDataUsingAjax() {

    //getting all elements in a hugeArray
    var elements_helper = document.getElementsByClassName("element");
    var elements = [];
    var k = 0;

    //mini arrays
    var i_title = 0;
    var i_content = 0;
    var i_img = 0;
    var titles_helper = document.getElementsByClassName("title");
    var content_helper = document.getElementsByClassName("content");
    var img_helper = document.getElementsByClassName("image");

    //single value or easy to use
    var question = document.getElementById("question").value;
    var answer = document.getElementById("answer").value;
    var option_helper = document.getElementsByClassName("option");

    //the final results
    var titles = [];
    var content = [];
    var images = [];
    var options = [];

    //their iterators/indexes
    var t = 0;
    var c = 0;
    var im = 0;
    var o = 0;

    //writing the alg
    var i;
    for (i = 0; i < elements_helper.length; i++) {
        //alert(elements_helper[i].value);
        if (elements_helper[i].value == "title") {
            if (titles_helper[i_title].value != "" && titles_helper[i_title].value != null) {
                elements[k] = elements_helper[i].value;
                k++;
                titles[t] = titles_helper[i_title].value;
                i_title++;
                t++;
            }
        }
        else if (elements_helper[i].value == "content") {
            if (content_helper[i_content].value != "" && content_helper[i_content].value != null) {
                elements[k] = elements_helper[i].value;
                k++;
                content[c] = content_helper[i_content].value;
                i_content++;
                c++;
            }
        } else if (elements_helper[i].value == "image") {
            if (img_helper[i_img].value != "" && img_helper[i_img].value != null) {
                elements[k] = elements_helper[i].value;
                k++;
                images[im] = img_helper[i_img].value;
                i_img++;
                im++;
            }
        } else if (elements_helper[i].value == "question") {
            break;
        }
    }
    if (question != "" && question != null) {
        elements[k] = elements_helper[i].value;
        i++;
        k++;
    }
    var j;
    for (j = 0; j < 4; j++) {
        if (option_helper[j].value != "" && option_helper[j].value != null) {
            elements[k] = elements_helper[i].value;
            k++;
            options[o] = option_helper[j].value;
            o++;
        }
        i++;
    }
    if (answer != "" && answer != null) {
        elements[k] = elements_helper[i].value;
        i++;
        k++;
    }
    const queryString = window.location.search;
    const urlParams = new URLSearchParams(queryString);
    var id = urlParams.get('id');

    if (titles.length == 0 || content.length == 0 || answer.length == 0 || images.length == 0 || elements.length == 0 || options.length == 0) {
        var p = document.getElementById("error_type");
        p.style.color = "red";
        p.innerHTML = "Please respect the conditions!";
    }
    else {
        var postData = {
            "title": titles,
            "content": content,
            "image": images,
            "question": question,
            "options": options,
            "answer": answer,
            "elements": elements,
            "id": id
        };
        var jsonThing = JSON.stringify(postData);
        var xhr = new XMLHttpRequest();
        xhr.onreadystatechange = function () {
            if (this.readyState == 4 && this.status == 200) {
                var res = this.responseText;
                var p = document.getElementById("error_type");
                p.style.color = "red";
                switch (res) {
                    case "0":
                        p.innerHTML = "Do not send the file blank!";
                        break;
                    case "-1":
                        p.innerHTML = "You did not complete the required fields!";
                        break;
                    case "-2":
                        p.innerHTML = "You have identical options!";
                        break;
                    case "-3":
                        p.innerHTML = "Your answer does not match the number of valid options!";
                        break;
                    default:
                        p.innerHTML = "The lesson got saved!";
                        p.style.color = "blue";
                }
            }
        };
        xhr.open("GET", "http://localhost/University_WebTechnologies_Project/pages/admin/content_all/check_data.php?postData=" + jsonThing, true);
        xhr.setRequestHeader("Content-Type", "application/json;charset=UTF-8");
        xhr.send();
    }
}
var x = 10;
function addImage() {
    if (x) {
        var div = document.getElementById("helper");
        const node1 = document.createElement("label");
        const textInput = document.createTextNode("Paste the URL below:");
        node1.appendChild(textInput);
        const node2 = document.createElement("input");
        node2.setAttribute("name", "image[]");
        node2.setAttribute("maxlength", "100");
        node2.classList.add("image");
        const node3 = document.createElement("br");

        //elements for order
        const node4 = document.createElement("input");
        node4.setAttribute("type", "hidden");
        node4.setAttribute("name", "elements[]");
        node4.setAttribute("value", "image");
        node4.classList.add("element");


        div.appendChild(node1).appendChild(node3);
        div.appendChild(node2).appendChild(node3);
        div.appendChild(node4);
        x--;
        var p = document.getElementById('msg');
        if (!x) {
            p.style.color = "red";
            p.innerHTML = "No more times left";
        }
        else {
            p.innerHTML = x + " times left";
        }
    }

}
function addSection() {
    if (x) {
        var div = document.getElementById("helper");
        const node1 = document.createElement("label");
        const textInput = document.createTextNode("Write the header:");
        node1.appendChild(textInput);
        const node2 = document.createElement("input");
        node2.setAttribute("name", "title[]");
        node2.setAttribute("maxlength", "100");
        node2.classList.add("title");
        const node3 = document.createElement("label");
        const textInput3 = document.createTextNode("Write the content:");
        node3.appendChild(textInput3);
        const node4 = document.createElement("textarea");
        node4.setAttribute("cols", "60");
        node4.setAttribute("rows", "10");
        node4.setAttribute("maxlength", "1000");
        node4.setAttribute("name", "content[]");
        node4.classList.add("content");
        const node5 = document.createElement("br");

        //elements for order
        const node6 = document.createElement("input");
        node6.setAttribute("type", "hidden");
        node6.setAttribute("name", "elements[]");
        node6.setAttribute("value", "title");
        node6.classList.add("element");
        const node7 = document.createElement("input");
        node7.setAttribute("type", "hidden");
        node7.setAttribute("name", "elements[]");
        node7.setAttribute("value", "content");
        node7.classList.add("element");


        div.appendChild(node1).appendChild(node5);
        div.appendChild(node2).appendChild(node5);
        div.appendChild(node3).appendChild(node5);
        div.appendChild(node4).appendChild(node5);
        div.appendChild(node6);
        div.appendChild(node7);
        x--;
        var p = document.getElementById('msg');
        if (!x) {
            p.style.color = "red";
            p.innerHTML = "No more times left";
        }
        else {
            p.innerHTML = x + " times left";
        }
    }
}