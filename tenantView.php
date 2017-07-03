<html>
	<head>
		<link rel="stylesheet" type="text/css"  href="./assets/css/poverty.css">
	</head>
	<body>

		<h3>subscribe to your appartment</h3>
		<form id="subscribe">
			apartment id: <input type="text" id="publicId"><br>
			apartment number: <input type="number" id="unitNumber"><br>
			first name: <input type="text" id="firstName"><br>
			last name: <input type="text" id="lastName"><br>
			<a id="subscribeButton" class="button raised teal">subscribe</a>
		</form>
	</body>
</html>
<script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
<script>
	//Code for signing up for our service
	$("#subscribeButton").click(function(){

		$.ajax({
			method: "POST",
			url: "./database/apartments/addTenant.php",
			data:{publicId:$("#subscribe #publicId").val(),unitNumber:$("#subscribe #unitNumber").val(),firstName:$("#subscribe #firstName").val(),lastName:$("#subscribe #lastName").val()}
		})
			.done(function( response ) {
			console.log(response);
			switch(response){
				case "0":
					console.log( "succesfully submited request" );
					break;
				case "2":
					console.log( "could not submit request" );
					break;
				default:
					console.log( "we dont know what went wrong");
						   }
		});
	});
</script>
