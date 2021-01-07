<center><h1>User Registration Page</h1>
<form method="post" action="{{ route('auth.create')}}">
<font color="green">
		@if(Session::get('success'))
		<b> {{ Session::get('success') }}</b>
		@endif
	</font>
<font color="green">
		@if(Session::get('fail'))
		<b> {{ Session::get('fail') }}</b>
		@endif
	</font>
	@csrf	
	first name <input type="text" name="name" value="{{old('name')}}"><font color="red">@error('name')  {{$message}} @enderror</font><br><br/>
	{{--first name <input type="text" name="fnm" value="{{old('fnm')}}"><font color="red">@error('fnm')  {{$message}} @enderror</font><br><br/>
	last name <input type="text" name="lnm" value="{{old('lnm')}}"><font color="red">@error('lnm')  {{$message}} @enderror</font><br> -->--}} 
	Email<input type="email" name="email"  value="{{old('email')}}"><font color="red">@error('email')  {{$message}} @enderror</font><br><br/>
	password<input type="password" name="password" value="{{old('password')}}"><font color="red">@error('password')  {{$message}} @enderror</font></br></br>
	<input type="submit" name="register" value="register">
<a href="/" class="btn btn-primary">Login here</a>
</form>
</center>