<!DOCTYPE html>
<html lang="en">
<head>
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
</head>
<body>
	<h1>Technical Test</h1>
	<h4>Angka pertama
	:<input type="text" id="angka1" style="margin-left:25px;"></input><br>
	<h4>Angka kedua
	:<input type="text" id="angka2" style="margin-left:40px;"></input><br><br>
	<button onClick="change()" name="change" style="margin-left:140px;">Change</button>
	<div id ="hasil"></id>
<script>
function change()
{
	var a = document.getElementById('angka1').value;
	var b = document.getElementById('angka2').value;

	var html = "";
	html = "<h3>Hasil pertukaran angkanya adalah: "
			+"<br>"+
			"<h3>Angka pertama : "
			+((Number(a)+Number(b))-Number(a))+
			"<br>"+
			"<h3>Angka kedua : "
			+((Number(a)+Number(b))-Number(b))
			
	;
	
	$('#hasil').append(html);
	
}
</script>

</body>
</html>