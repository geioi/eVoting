function numberOfRows(nr){
	console.log(valik + " - " + tyyp);
}

function showCandidates(kandidaatideArray){

	var kandidaadid = kandidaatideArray
	//console.log(kandidaadid);
	
	var eesnimed = new Array;
	var perenimed = new Array
	var maakonnad = new Array;
	var parteid = new Array;
	var hääled = new Array;
	
	for (var i = 0; i < kandidaadid.length; i++){
		//IDd.push(kandidaadid[i]['id']);
		eesnimed.push(kandidaadid[i]['firstName']);
		perenimed.push(kandidaadid[i]['lastName']);
		maakonnad.push(kandidaadid[i]['maakond']);
		parteid.push(kandidaadid[i]['partei']);
		hääled.push(kandidaadid[i]['votes']);
	}
	
	//console.log(eesnimed, perenimed, maakonnad);

	
	var elem = document.getElementById("tabel");
	elem.parentNode.removeChild(elem);
	
	var container = document.getElementById("resp");
	var table = document.createElement("TABLE");
	table.setAttribute("id", "tabel");
	table.setAttribute("class", "table");
	container.appendChild(table);
	
	var row = document.createElement("TR");
	var eesnimiHeader = document.createElement("TH");
	var perenimiHeader = document.createElement("TH");
	var maakondHeader = document.createElement("TH");
	var parteiHeader = document.createElement("TH");
	var häälHeader = document.createElement("TH");
	
	row.appendChild(eesnimiHeader);
	row.appendChild(perenimiHeader);
	row.appendChild(maakondHeader);
	row.appendChild(parteiHeader);
	row.appendChild(häälHeader);
	
	eesnimiHeader.appendChild(document.createTextNode("Eesnimi"));
	perenimiHeader.appendChild(document.createTextNode("Perekonna nimi"));
	maakondHeader.appendChild(document.createTextNode("Maakond"));
	parteiHeader.appendChild(document.createTextNode("Partei"));
	häälHeader.appendChild(document.createTextNode("Hääli"));
	table.appendChild(row);
	
	for (var i = 0; i < eesnimed.length; i++){
		
		row = document.createElement("TR");
		
		var eesnimiLahter = document.createElement("TD");
		var perenimiLahter = document.createElement("TD");
		var maakondLahter = document.createElement("TD");
		var parteiLahter = document.createElement("TD");
		var häälLahter = document.createElement("TD");
		
		var vahe1 = document.createElement('hr');
		vahe1.style.marginBottom = "8px";
		vahe1.style.marginTop = "8px";
		
		var vahe2 = document.createElement('hr');
		vahe2.style.marginBottom = "8px";
		vahe2.style.marginTop = "8px";
		
		var vahe3 = document.createElement('hr');
		vahe3.style.marginBottom = "8px";
		vahe3.style.marginTop = "8px";
		
		var vahe4 = document.createElement('hr');
		vahe4.style.marginBottom = "8px";
		vahe4.style.marginTop = "8px";
		
		var vahe5 = document.createElement('hr');
		vahe5.style.marginBottom = "8px";
		vahe5.style.marginTop = "8px";
		
		eesnimiLahter.appendChild(vahe1);
		perenimiLahter.appendChild(vahe2);
		maakondLahter.appendChild(vahe3);
		parteiLahter.appendChild(vahe4);
		häälLahter.appendChild(vahe5);
		
		row.appendChild(eesnimiLahter);
		row.appendChild(perenimiLahter);
		row.appendChild(maakondLahter);
		row.appendChild(parteiLahter);
		row.appendChild(häälLahter);
		
		var eesnimi = document.createTextNode(eesnimed[i]);
		var perenimi = document.createTextNode(perenimed[i]);
		var maakond = document.createTextNode(maakonnad[i]);
		var partei = document.createTextNode(parteid[i]);
		var hääl = document.createTextNode(hääled[i]);
		
		eesnimiLahter.appendChild(eesnimi);
		perenimiLahter.appendChild(perenimi);
		maakondLahter.appendChild(maakond);
		parteiLahter.appendChild(partei);
		häälLahter.appendChild(hääl);
		
		table.appendChild(row);
		//table.appendChild(document.createElement("/TR"));
		
	}
	
}

