<!DOCTYPE html>
<html lang="en">
<head>
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
</head>
<body>
	
		<h4>Angka pertama
		:<input type="text" id="angka1" style="margin-left:25px;"></input><br>
		<h4>Angka kedua
		:<input type="text" id="angka2" style="margin-left:40px;"></input><br><br>
		<button onClick="test()" name="btnChange" style="margin-left:140px;">Change</button>
		<div id="hasil"></div>
	
<script>
function test()
{
	var a = document.getElementById('angka1').value;
	var b = document.getElementById('angka2').value;
	var html = "";
	
	$.ajax({
        url  : 'http://localhost:3456/Zakuna/task.php',
        data : {a,b},
        type : 'POST'
	}).done(function(results){
		var data_json = JSON.parse(results);
		$.each( data_json, function( key, item ) {
			html = "<h3>Hasil pertukaran angkanya adalah: "
			+"<br>"+
			"<h3>Angka pertama : "
			+key+
			"<br>"+
			"<h3>Angka kedua : "
			+item
			;
			$('#hasil').append(html);
		});
		
	});
		
}
</script>

</body>
</html>