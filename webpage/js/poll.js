var counter = -1;
(function poll() {
    setTimeout(function() {
        $.ajax({
            url: "http://localhost/eVoting/webpage/index.php/kandidaadid/getCandidatesJSON/",
            success: function(data) {
                if(counter == -1){
                    counter = parseInt(data[5]);
                }
                else{
                    if(parseInt(data[5])>counter){
						counter = parseInt(data[5]);
						if (window.location.href == "http://localhost/eVoting/webpage/index.php/kandidaadid") {
							$('#myTable').append('<tr><td>'+data[1]+'</td><td>'+data[2]+'</td><td>'+data[3]+'</td><td>'+data[4]+'</td><td>'+data[0]+'</td></tr>');
						}else {
							if(confirm("Valimistele on lisandunud kandidaate!\nKas soovid n\u00e4ha kandidaatide nimekirja?")) {
								window.location.href="http://localhost/eVoting/webpage/index.php/kandidaadid";
							}
						}
                    }
                }
            },
            dataType: "json",
            complete: poll
        });
    }, 1000);
}) ();