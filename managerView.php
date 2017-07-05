<html>
	<head>
		<link rel="stylesheet" type="text/css"  href="./assets/css/poverty.css">
	</head>
	<body>

		<h3>apartment list</h3>
		<ul id="apartments">
			<li></li>
		</ul>
		<h3>Add apartment</h3>
		<form id="addApartment">
			apartment name: <input type="text" id="apartmentName"><br>
			number of units: <input type="number" id="numUnits"><br>
			<a id="addApartmentButton" class="button raised teal">add</a>
		</form>
		<h3>remove apartment</h3>
		<form id="removeApartment">
			apartment id: <input type="text" id="apartmentId"><br>
			<a id="removeApartmentButton" class="button raised teal">remove</a>
		</form>
		<h3>generate apartment id</h3>
		<form id="generateId">
			apartment id: <input type="text" id="apartmentId"><br>
			<a id="generateIdButton" class="button raised teal">generate</a>
		</form>


	</body>
</html>
<script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
<script>
	//Code for signing up for our service
	function getApartments(){
		$.ajax({
			method: "POST",
			url: "./database/apartments/getApartments.php"
		})
			.done(function( response ) {
			
			var output = "";
			if(response.length <= 1)
			{
				output = "we were unable to find any apartments that you manage";
			}else{
				var apartments = JSON.parse(response);
				for(var i = 0; i <apartments.length;i++)
				{
					output+="<li>name: "+apartments[i].name+"<ul>";
					output+="<li>units: "+apartments[i].units+"</li>";
					output+="<li>vacancies: "+apartments[i].vacancies+"</li>";
					output+="<li>id: "+apartments[i].apartmentId+"</li>";
					output+="<li>publicId: "+apartments[i].publicId+"</li>";
					output+="<li><a href='./apartmentView.php?apartmentId="+apartments[i].apartmentId+"'>view apartment</a></li>";
					output+="</ul></li>";
				}
			}
			$("#apartments").html(output);
		});
	};
	getApartments();
</script>

<script>
	//Code for signing up for our service
	$("#addApartmentButton").click(function(){

		$.ajax({
			method: "POST",
			url: "./database/apartments/addApartment.php",
			data:{apartmentName:$("#addApartment #apartmentName").val(),numUnits:$("#addApartment #numUnits").val()}
		})
			.done(function( response ) {
			getApartments();
			switch(response){
				case "0":
					console.log( "succesfully created apartment" );
					break;
				case "2":
					console.log( "could not create apartment" );
					break;
				default:
					console.log( "we dont know what went wrong");
						   }
		});
	});
</script>
<script>
	//Code for signing up for our service
	$("#removeApartmentButton").click(function(){

		$.ajax({
			method: "POST",
			url: "./database/apartments/removeApartment.php",
			data:{apartmentId:$("#removeApartment #apartmentId").val()}
		})
			.done(function( response ) {
			getApartments();
			switch(response){
				case "0":
					console.log( "succesfully removed apartment" );
					break;
				case "2":
					console.log( "could not removed apartment" );
					break;
				default:
					console.log( "we dont know what went wrong");
						   }

		});

	});
</script>
<script>
	//Code for signing up for our service
	$("#generateIdButton").click(function(){

		$.ajax({
			method: "POST",
			url: "./database/apartments/newPublicId.php",
			data:{apartmentId:$("#generateId #apartmentId").val()}
		})
			.done(function( response ) {
			switch(response){
				case "0":
					console.log( "succesfully created publicId" );
					break;
				case "2":
					console.log( "could not create publicId" );
					break;
				default:
					console.log( "we dont know what went wrong");
						   }
			getApartments();

		});

	});

</script>





