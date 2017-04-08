function numberOfRows(nr){
	console.log(valik + " - " + tyyp);
}

function showCandidates(kandidaatideArray){

	var kandidaadid = kandidaatideArray
	//console.log(kandidaadid);
	
	//var IDd = new Array;
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
	
	/*
	
	var resp = document.getElementById("resp");
	var head = document.getElementById("head");
	var headerid = head.cloneNode(true);
	var tabel = document.getElementById("tabel");
	var stiil = tabel.cloneNode(true);
	var rida = document.getElementById("testimine");
	var stiil2 = rida.cloneNode(true);
	var lahter1 = document.getElementById("td1");
	var stiil3 = lahter1.cloneNode(true);
	var lahter2 = document.getElementById("td2");
	var stiil4 = lahter2.cloneNode(true);
	var lahter3 = document.getElementById("td3");
	var stiil5 = lahter3.cloneNode(true);
	var lahter4 = document.getElementById("td4");
	var stiil6 = lahter4.cloneNode(true);
	var lahter5 = document.getElementById("td5");
	var stiil7 = lahter5.cloneNode(true);
	
	console.log(document.getElementById("resp").style);
	
	
	
	//resp.removeChild(tabel);
	while (tabel.firstChild) {
		tabel.removeChild(tabel.firstChild);
	}
	
	//stiil.setAttribute("id", "tabel");
	
	//stiil.appendChild(headerid);
	

	
	for (var i = 0; i < eesnimed.length; i++){
		
		stiil3.innerHTML=eesnimed[i];
		stiil2.appendChild(stiil3);
		
		stiil4.innerHTML=perenimed[i];
		stiil2.appendChild(stiil4);
		
		stiil5.innerHTML=maakonnad[i];
		stiil2.appendChild(stiil5);
		
		stiil6.innerHTML=parteid[i];
		stiil2.appendChild(stiil6);
		
		stiil7.innerHTML=hääled[i];
		stiil2.appendChild(stiil7);
		
		tabel.appendChild(stiil2);
		
	}
	
	resp.appendChild(tabel);
	
	
	var div = document.createElement("DIV");
	div.setAttribute("class", "table-responsive");
	div.setAttribute("id", "resp");
	document.getElementById("container").appendChild(div);
	*/
	
	
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
		//document.body.appendChild(document.createElement('hr'));
	}
	
	
	
	/*
	$(document).ready(function() {
		var wrapper = $(".tabel");
		var addline = wrapper.find('tr').last();
		$wrapper.append(addline.clone());
		
	});
	*/

}
//window.addEventListener('load', function(){
//	showCandidates($kõikKandidaadid)
//});
