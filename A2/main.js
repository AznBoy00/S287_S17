function searchList() {
	var searchForm = document.forms[0]["search"].value;
	var searchList = document.getElementById("courselist").children;
	
	for (var i = 0; i < document.getElementById("courselist").children.length; i++) {
		document.getElementById("courselist").children[i].style.backgroundColor = "white";
	}	
	
	if (searchForm == "") {
		document.getElementById("search").focus();
		alert("Please enter a course name.");
		return false;
	}
	
	document.getElementById("a").innerHTML = "Searched: " + searchForm;
	for (var i = 0; i < document.getElementById("courselist").children.length; i++) {
		if (document.getElementById("courselist").children[i].textContent == searchForm) {
			document.getElementById("courselist").children[i].style.backgroundColor = "yellow";
			return false;
		}
	}
	var node = document.createElement("div");
	var textnode = document.createTextNode(searchForm);
	node.appendChild(textnode);
	document.getElementById("courselist").appendChild(node);
	
	return false;	
}