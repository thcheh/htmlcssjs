	function wyslijFormularz() {
		var req = new XMLHttpRequest();
	
		req.open("POST", "status.php");
	
		req.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
	
		req.onreadystatechange = function() {
			if(this.readyState === 4 && this.status === 200) {
				document.getElementById("czyudane").innerHTML = this.responseText;
			}
		};
		var email = document.getElementById("email").value;
		var imienazwisko = document.getElementById("imienazwisko").value;
		var tresc = document.getElementById("tresc").value;
		console.log(email);
		console.log(imienazwisko);
		console.log(tresc);
		
		req.send("email=" + email + "&imienazwisko=" + imienazwisko + "&tresc=" + tresc);
	}