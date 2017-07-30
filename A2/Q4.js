function validateForm() {
	var cpp  = document.forms["frm"]["book_1"].value;
	var perl  = document.forms["frm"]["book_2"].value;
	var js  = document.forms["frm"]["book_3"].value;
	if (isNaN(cpp) || isNaN(perl) || isNaN(js) || cpp == "" || perl == "" || js == "") {
		document.getElementById("confirm").innerHTML = "Please input an number in each space given.";
	} else {
		var cppPrice = cpp * 19.99;
		var perlPrice = perl * 86.00;
		var jsPrice = js * 55.00;
		var totalCost = cppPrice + perlPrice + jsPrice;
		document.getElementById("confirm").innerHTML = "<h3>Books you've ordered</h3>"
														+ "<br /><em>Basics of C++</em>:     " + cpp + " x $19.99 = <strong>$" + cppPrice
														+ "</strong><br /><em>Program Development in Perl</em>:     " + perl + " x $86.00 = <strong>$" + perlPrice
														+ "</strong><br /><em>Advanced JavaScript</em>:     " + js + " x $55.00 = <strong>$" + jsPrice
														+ "</strong><br /><em>The total cost is</em>: <strong>$" + totalCost;
	}
}