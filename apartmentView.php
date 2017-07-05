<html>
	<head>
		<link rel="stylesheet" type="text/css"  href="./assets/css/poverty.css">
	</head>
	<body>

		<h3>tenant list</h3>
		<ul id="tenants">
			<li></li>
		</ul>
		<h3>WorkOrder list</h3>
		<ul id="workOrder">
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
		<h3>generateId</h3>
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
						output+="<li><a href='#' onclick='approveTenant("+tenants[i].userId+")'>click to approve</a></li>";
					}
					output+="</ul></li>";
				}
			}
			$("#tenants").html(output);
		});
	};
	getTenants();
	function approveTenant(tenantId)
	{
		console.log(tenantId);
		$.ajax({
			method: "POST",
			url: "./database/apartments/approveTenant.php",
			data: {tenantId:tenantId}
		})
			.done(function( response ) {
			console.log(response);
		})
	}
	function getWorkOrders()
	{
		$.ajax({
			method: "POST",
			url: "./database/apartments/getWorkOrders.php",
			data: {apartmentId:apartmentId}
		})
			.done(function( response ) {
			console.log(response);
			var output = "";
			if(response.length <= 1)
			{
				output = "we were unable to find any work orders";
			}else{
				var workOrders = JSON.parse(response);
				for(var i = 0; i <workOrders.length;i++)
				{
					output+="<li>userId: "+workOrders[i].userId+"<ul>";
					output+="<li>dateSubmitted : "+workOrders[i].dateSubmitted+"</li>";
					output+="<li>title: "+workOrders[i].title+"</li>";
					output+="<li>description: "+workOrders[i].description+"</li>";
					output+="<li>status: "+workOrders[i].status+"</li>";
					output+="<li>urgency : "+workOrders[i].urgency+"</li>";
					output+="<li>completed: "+workOrders[i].completed+"</li>";
					output+="<li>expectedCompletion: "+workOrders[i].expectedCompletion+"</li>";
					output+="<li>orderId: "+workOrders[i].orderId+"</li>";
					output+="<li>apartmentId: "+workOrders[i].apartmentId+"</li>";
					output+="</ul></li>";
				}
			}
			$("#workOrder").html(output);
		})
	}
</script>
