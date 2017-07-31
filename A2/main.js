function searchList() {
	var searchForm = document.forms[0]["search"].value;
	var searchList = document.getElementById("courselist").children;
	
	for (var i = 0; i < searchList.length; i++) {
		searchList[i].style.backgroundColor = "white";
	}	
	
	if (searchForm == "") {
		document.getElementById("search").focus();
		alert("Please enter a course name.");
		return false;
	}
	
	for (var i = 0; i < searchList.length; i++) {
		if (searchList[i].textContent == searchForm) {
			searchList[i].style.backgroundColor = "yellow";
			return false;
		}
	}
	
	var newTextTag = document.createElement("div");
	var newTextContent = document.createTextNode(searchForm);
	newTextTag.appendChild(newTextContent);
	document.getElementById("courselist").appendChild(newTextTag);
	
	return false;	
}