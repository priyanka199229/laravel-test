<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="text/css">
		*{
			margin: 0;
			padding: 0;
			box-sizing: border-box;
			font-family: 'Josefin Sans',Sans-serif;


		}
		.main_div{
			width: 100%;
			height: 100vh;
			position: relative;
		}
		.box{
			width: 400px;
			position: absolute;
			top:50%;
		}
	</style>
</head>
<body>
<div class="main_div">
	<div class="box">
		<form>
			<div class="inputBox">
				<input type="text" name="email" value="{{old('email')}}">
				<label>Email Address</label>
			</div>
			<div class="inputBox">
				<input type="password" name="password" value="{{old('password')}}">
				<label>Password</label>
			</div>
		</form>
	</div>

</div>
</body>
</html>