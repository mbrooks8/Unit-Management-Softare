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
		<h3>make work order</h3>
		<form id="workOrder">
			title: <input type="text" id="title"><br>
			description: <input type="text" id="description"><br>
			<h5>level of urgency</h5>
			<input type="radio" name="type" value="2"> high<br>
			<input type="radio" name="type" value="1" checked> medium<br>
			<input type="radio" name="type" value="0"> low<br>
			<a id="workOrderButton" class="button raised teal">submit work order</a>
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


<script>
	//Code for signing up for our service
	$("#workOrderButton").click(function(){

		console.log($("#workOrder #title").val());
		console.log($("#workOrder #description").val());
		console.log($("#workOrder input:checked" )[0].value);

		$.ajax({
			method: "POST",
			url: "./database/apartments/addWorkOrder.php",
			data:{title:$("#workOrder #title").val(),description:$("#workOrder #description").val(),urgency:$("#workOrder input:checked" )[0].value}
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
