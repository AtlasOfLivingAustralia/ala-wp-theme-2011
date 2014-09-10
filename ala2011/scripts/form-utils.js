/** Function to pre-load inputs with values */
function loadPhotoInputs(){

	var vars = {};
	var urlParams = {};
    (function () {
        var e,
            a = /\+/g,  // Regex for replacing addition symbol with a space
            r = /([^&=]+)=?([^&]*)/g,
            d = function (s) { return decodeURIComponent(s.replace(a, " ")); },
            q = window.location.search.substring(1);

        while (e = r.exec(q))
           urlParams[d(e[1])] = d(e[2]);
    })();
    
    var loginId = document.getElementById('loginId');
    if(loginId!=null && loginId != "undefined"  && loginId.value != "undefined"){
    	document.getElementById('Email').value = loginId.innerHTML;
    }

	if(urlParams["scientificName"]!=null && urlParams["scientificName"]!=NaN){
		document.getElementById('ScientificName').value = urlParams["scientificName"];
	}
	
	if(urlParams["commonName"]!=null && urlParams["commonName"]!=NaN){
		document.getElementById('CommonName').value = urlParams["commonName"];
	}
}
