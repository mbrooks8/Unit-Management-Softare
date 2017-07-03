<html>
	<head>
		<link rel="stylesheet" type="text/css"  href="./assets/css/poverty.css">
	</head>
	<body>
		<h1 id="status">_</h1>
		<div id="type"></div>

		<h1>Sign In</h1>
		<form id="signIn">
			UserName: <input type="text" id="username"><br>
			Password: <input type="password" id="password"><br>
			<a id="signInButton" class="button raised teal">sign in</a>
		</form>
		<h1>Sign Up</h1>
		<form id="signUp">
			UserName: <input type="text" id="username"><br>
			Password: <input type="password" id="password"><br>
			Confirm Password: <input type="password" id="passwordVerify"><br>
			<input type="radio" name="type" value="0" id="isTenant" checked> Tenant<br>
			<input type="radio" name="type" value="1" id="isManager"> Manager<br>
			<a id="signUpButton" class="button raised teal">sign up</a>
		</form>

		<a id="signOutButton" class="button raised teal" href="#">sign out</a>

	</body>
</html>
<script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
<script>
	//Code for signing up for our service
	$("#signOutButton").click(function(){
		$.ajax({
			method: "POST",
			url: "./database/user/signOut.php"
		})
			.done(function( response ) {
			userType();
		});
	});
</script>
<script>
	//Code for signing up for our service
	$("#signUpButton").click(function(){
		$.ajax({
			method: "POST",
			url: "./database/user/addUser.php",
			data: { username: $("#signUp #username").val(), password: $("#signUp #password").val(), passwordVerify: $("#signUp #passwordVerify").val(),type: $( "#signUp input:checked" )[0].value}
		})
			.done(function( response ) {
			userType();
			switch(response){
				case "0":
					console.log( "No errors" );
					break;
				case "11":
					console.log( "Password too short" );
					break;
				case "12":
					console.log( "Password mismatch" );
					break;
				case "13":
					console.log( "username taken" );
					break;
				default:
					console.log( "we dont know what went wrong");
						   }
		});
	});
</script>

<script>
	//Code for signing in
	$("#signInButton").click(function(){
		$.ajax({
			method: "POST",
			url: "./database/user/signIn.php",
			data: { username: $("#signIn #username").val(), password: $("#signIn #password").val()}
		})
			.done(function( response ) {

			switch(response){
				case "0":
					userType();
					break;
				case "12":
					alert( "password did not match" );
					break;
				case "14":
					alert( "could not find username" );
					break;
				default:
					alert( "we dont know what went wrong");
						   }
		});
	});
</script>
<script>
	//Code for signing in
	function userType()
	{
		$.ajax({
			method: "POST",
			url: "./database/utility/userType.php"
		})
			.done(function( response ) {
			console.log(response);
			switch(response){
				case "21":
					$("#type").html("You are not logged in!!");
					break;
				case "26":
					$("#type").html("<h3>You are a tenant!!</h3><br><a href='./tenantView.php'>go to tenant view</a>");
					break;
				case "25":
					$("#type").html("<h3>You are a manager!!</h3><br><a href='./managerView.php'>go to manager view</a>");
					break;
				default:
					$("#type").html("");
						   }
		});
	}
	userType();
</script>




