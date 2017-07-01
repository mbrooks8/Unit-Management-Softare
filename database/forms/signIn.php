<html>
	<head>
		<link rel="stylesheet" type="text/css"  href="../../assets/css/poverty.css">
	</head>
	<body>
		<h1 id="status">_</h1>
		<h3 id="type"></h3>

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
			url: "../signOut.php"
		})
			.done(function( response ) {
			isLoggedIn();
		});
	});
</script>
<script>
	//Code for signing up for our service
	$("#signUpButton").click(function(){
		$.ajax({
			method: "POST",
			url: "../addUser.php",
			data: { username: $("#signUp #username").val(), password: $("#signUp #password").val(), passwordVerify: $("#signUp #passwordVerify").val(),type: $( "#signUp input:checked" )[0].value}
		})
			.done(function( response ) {
			isLoggedIn();
			switch(response){
				case "0":
					alert( "succesfully created account" );
					break;
				case "1":
					alert( "password is not long enough" );
					break;
				case "2":
					alert( "passwords do not match" );
					break;
				case "3":
					alert( "username already exists" );
					break;
				default:
					alert( "we dont know what went wrong");
						   }
		});
	});
</script>

<script>
	//Code for signing in
	$("#signInButton").click(function(){
		$.ajax({
			method: "POST",
			url: "../signIn.php",
			data: { username: $("#signIn #username").val(), password: $("#signIn #password").val()}
		})
			.done(function( response ) {

			switch(response){
				case "0":
					isLoggedIn();
					break;
				case "1":
					alert( "password did not match" );
					break;
				case "2":
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
	function isLoggedIn()
	{
		$.ajax({
			method: "POST",
			url: "../isLoggedIn.php"
		})
			.done(function( response ) {
			console.log(response);
			isManager();
			switch(response){
				case "0":
					$("#status").html("You are not logged in!!");
					break;
				case "1":
					$("#status").html("You are logged in!!");

					break;
				default:
					alert( "we dont know what went wrong");
						   }
		});
	}

	isLoggedIn();
</script>
<script>
	//Code for signing in
	function isManager()
	{
		$.ajax({
			method: "POST",
			url: "../isManager.php"
		})
			.done(function( response ) {
			console.log(response);
			switch(response){
				case "0":
					$("#type").html("You are a tenant!!");
					break;
				case "1":
					$("#type").html("You are a manager!!");
					break;
				default:
					$("#type").html("");
						   }
		});
	}
</script>





