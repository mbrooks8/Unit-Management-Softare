<html>
	<head>
		<link rel="stylesheet" type="text/css"  href="./assets/css/poverty.css">
	</head>
	<body>

		<h3>tenant list</h3>
		<ul id="tenants">
			<li></li>
		</ul>
		<h3>Add tenant</h3>
		<form id="addApartment">
			apartment name: <input type="text" id="apartmentName"><br>
			number of units: <input type="number" id="numUnits"><br>
			<a id="addApartmentButton" class="button raised teal">add</a>
		</form>
		<h3>remove tenant</h3>
		<form id="removeApartment">
			apartment id: <input type="text" id="apartmentId"><br>
			<a id="removeApartmentButton" class="button raised teal">remove</a>
		</form>
		<h3>tenant applications</h3>
		<form id="generateId">
			apartment id: <input type="text" id="apartmentId"><br>
			<a id="generateIdButton" class="button raised teal">generate</a>
		</form>


	</body>
</html>
<script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
<script>
	var apartmentId = <?php
		session_start();
		echo $_GET['apartmentId'];
		?>;
	//Code for signing up for our service
	function getTenants(){
		$.ajax({
			method: "POST",
			url: "./database/apartments/getTenants.php",
			data: {apartmentId:apartmentId}
		})
			.done(function( response ) {
			console.log(response);
			var output = "";
			if(response.length <= 1)
			{
				output = "we were unable to find any apartments that you manage";
			}else{
				var tenants = JSON.parse(response);
				for(var i = 0; i <tenants.length;i++)
				{
					output+="<li>firstName: "+tenants[i].firstName+"<ul>";
					output+="<li>lastName : "+tenants[i].lastName+"</li>";
					output+="<li>unitNumber: "+tenants[i].unitNumber+"</li>";
					output+="<li>approved: "+tenants[i].approved+"</li>";
					if(tenants[i].approved == 0)
					{
						//When approving make sure manager is the correct manager
						output+="<li><a href=>click to approve</a></li>";
					}
					output+="</ul></li>";
				}
			}
			$("#tenants").html(output);
		});
	};
	getTenants();
</script>
