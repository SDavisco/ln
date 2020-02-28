<html>
	<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<title>Login</title>
		<style>
			#main{
				margin:0px auto;
				border:solid 3px black;
				border-radius:3px;
				height:300px;
				width:400px;
			}

			#form_login input,button{
				width:100%;
				display:block;
				margin-top:10px;
				padding:5px;
			}
		</style>
	</head>
    <body>
		<center><h1></h1></center>
		<div id="main">
			<form action="do_login.php" method="POST" id="form_login">
				<label for="usuario">Usuario:</label>
				<input type="text" name="usuario" id="usuario">
				<label for="passw">Contraseña: </label>
				<input type="password" name="pass" id="pass">
				<button>Login</button>
			</form>
		</div>
	</body>
</html>