<center><h1>user login</h1><form action="{{route('auth.check')}}" method="post">
	@csrf
	<font color="green">
		@if(Session::get('fail'))
		<b> {{ Session::get('fail') }}</b>
		@endif
	</font>
	Email<input type="text" name="email" value="{{old('email')}}"><br/><font color="red">@error('email')  {{$message}} @enderror</font><br><br>
	password<input type="password" name="password" value="{{old('password')}}"><br/><font color="red">@error('password')  {{$message}} @enderror</font><br></br>
	<input type="submit" name="login" value="login">
<a href="reg">create new account</a>
</form></center>