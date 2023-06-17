function callShowSuggestions() {
    var category = returnSelectedCategorySuggestion();
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
            createDivSuggestion(this.responseText);
        }
    };
    xmlhttp.open("GET", "http://localhost/University_WebTechnologies_Project/pages/admin/delete_mvc/categorySuggestion.php?category=" + category, true);
    xmlhttp.send();
}
function returnSelectedCategorySuggestion() {
    var selectedDoc = document.categorySuggestion.category_sug;
    return selectedDoc.value;
}
function createDivSuggestion(suggestions) {
    var select = document.querySelector("#suggestion");
    var len = select.length;
    while (len--) {
        select.remove(len);
    }
    if (suggestions.length == 0) {
        return null;
    }
    else if (suggestions.includes(',')) {
        var suggestions = suggestions.split(',');
        suggestions.forEach(element => {
            const node = document.createElement('option');
            node.setAttribute("name", 'suggestion');
            const textNode = document.createTextNode(element);
            node.appendChild(textNode);
            select.appendChild(node);
        });
    }
    else {
        const node = document.createElement('option');
        node.setAttribute("name", 'suggestion');
        const textNode = document.createTextNode(suggestions);
        node.appendChild(textNode);
        select.appendChild(node);
    }
}