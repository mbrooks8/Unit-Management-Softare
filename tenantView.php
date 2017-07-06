<html>
	<head>
		<link rel="stylesheet" type="text/css"  href="./assets/css/poverty.css">
	</head>
	<body>
		<h3>subscribed Apartment</h3>
		<div id="myApartment">
		</div>
		<h3>subscribe to your appartment</h3>
		<form id="subscribe">
			apartment id: <input type="text" id="publicId"><br>
			apartment number: <input type="number" id="unitNumber"><br>
			first name: <input type="text" id="firstName"><br>
			last name: <input type="text" id="lastName"><br>
			<a onclick="subscribe()" class="button raised teal">subscribe</a>
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
		<h3>work order list</h3>
		<div id="workOrders">

		</div>

	</body>
</html>
<script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
<script>
	//Code for signing up for our service
	function subscribe(){

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
	};
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
	function getWorkOrders()
	{
		$.ajax({
			method: "POST",
			url: "./database/apartments/getWorkOrders.php",
			data: {apartmentId:1}
		})
			.done(function( response ) {
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
					output+="<li><a onclick='getWorkMessages("+workOrders[i].orderId+")'>click me to view Messages:</a></li>";
					output+="<li><a onclick='sendMessageToManager("+workOrders[i].orderId+")'>send message</a><input type='text' id='sendMessage"+workOrders[i].orderId+"'></li>";
					output+="<li id='workMessages"+workOrders[i].orderId+"'></li>";
					output+="</ul></li>";
				}
			}
			$("#workOrders").html(output);
		})
	}
	function getWorkMessages(orderId)
	{
		$.ajax({
			method: "POST",
			url: "./database/apartments/getWorkMessages.php",
			data: {orderId:orderId}
		})
			.done(function( response ) {
			var output = "";
			if(response.length <= 1)
			{
				output = "we were unable to find any messages";
				$("#workMessages"+orderId).html(output);
			}else{
				console.log(response);
				$("#workMessages"+orderId).html(response);
			}
		})
	}
	function sendMessageToManager(workOrderId)
	{
		console.log(workOrderId);
		console.log($("#sendMessage"+workOrderId).val());
		$.ajax({
			method: "POST",
			url: "./database/apartments/newWorkMessage.php",
			data: {orderId:workOrderId,message:$("#sendMessage"+workOrderId).val()}
		})
			.done(function( response ) {
			console.log(response);
		})
	}
	getWorkOrders()
</script>
