<!DOCTYPE html>
<html>
<head>
	<title>WON</title>
	<script src="http://code.jquery.com/jquery-1.9.0.js"></script>
	<!--<script src="include/bootstrap.js"></script>
	<link rel="stylesheet" type="text/css" href="include/bootstrap.css"> -->
	<link rel="stylesheet" type="text/css" href="include/maestro.css">
	<script type="text/javascript">
		$(document).ready(function(){
			$("#cerebroImg").hover(function(){
				$("#ingestaImg").addClass("animar1");
				// $("#ingestaImg").addClass("animar2");
			});
			$("#ingestaImg").click(function(){
				alert("funka");
				window.location="alimentacion/index.php";
			});	
		});
	</script>
</head>
<body>
	<div id="contenido">
		<div id="nodoHaciaAlimentacion"></div>
		<img id="cerebroImg" src="img/mainIcon.png">
		<img id="ingestaImg" src="img/ingesta.png">
	</div>
</body>
</html>