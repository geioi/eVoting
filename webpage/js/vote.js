function vote(){
	var input = document.getElementById("kandidaadi_id").value;
	var email = document.getElementById("mail").value;

	var isNumber = /^\d+$/.test(input);

	
	if (isNumber){
		var info = $.ajax({
		type: "POST",
		url: 'Haaleta/checkVote',
		dataType: 'text',
		data: {email:email, id:input},

		success: function (data) {
			info = data;
			updateText(info);
		}
		});
	}
	else{
		updateText(true);
	}
}

function updateText(bool){
	var xmlhttp;
		if (window.XMLHttpRequest) {
			xmlhttp = new XMLHttpRequest();
		  } else {
			// code for older browsers
			xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
		  }
		  xmlhttp.onreadystatechange = function() {
			if (this.readyState == 4 && this.status == 200) {
			  document.getElementById("tekst").innerHTML =
			  this.responseText;
			}
		  };
	if (bool == true) {
		xmlhttp.open("GET", "/eVoting/webpage/nurjus.txt");
	}
	
	else if (!bool){
		xmlhttp.open("GET", "/eVoting/webpage/kinnitus.txt");
	}
	else{
		xmlhttp.open("GET", "/eVoting/webpage/endaPoolt.txt");
	}
	
	xmlhttp.send();
}