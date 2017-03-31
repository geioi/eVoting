function vote(){
	var input = document.getElementById("kandidaadi_id").value;
	var email = document.getElementById("mail").value;
	
	/*
	see osa ei tööta hetkel
	
	var info = $.ajax({
    type: "POST",
    url: '/index.php/KandideeriHaaleta.php',
    dataType: 'json',
    data: {functionname: 'getInfo', arguments: [email]},

    success: function (data) {
            alert(data);
	}
	});
	*/

	
	var xmlhttp;
	if (window.XMLHttpRequest) {
		xmlhttp = new XMLHttpRequest();
	  } else {
		// code for older browsers
		xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
	  }
	  xmlhttp.onreadystatechange = function() {
		if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
		  document.getElementById("tekst").innerHTML =
		  xmlhttp.responseText;
		}
	  };
	
	if (input === ""){
		xmlhttp.open("GET", "/eVoting/webpage/nurjus.txt");
	}
	else{
		xmlhttp.open("GET", "/eVoting/webpage/kinnitus.txt");
	}
	xmlhttp.send();
}