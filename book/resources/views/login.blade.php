<!DOCTYPE html>
<html>
<head>
  <title>Learn Laravel 4</title>
</head>
<body>

	@if (Session::has('message'))
  <div >
    <p>{{ Session::get('message')['content'] }}</p>
  </div>
@endif
<ul>
          <li>Store your bookmarks online with us!</li>
          <li>See what other users use!</li>
            <li>Share your favorite links with others!</li>
          </ul>
       <p><a href="{{url('register')}}">No a member?</a></p>
  	<form method="post" action="{{url('login')}}">
 		<table bgcolor="#cccccc">
  		<tr>
   		<td colspan="2">Members log in here:</td>
  		<tr>
     		<td>Username:</td>
     		<td><input type="text" name="username"/></td></tr>
   		<tr>
     		<td>Password:</td>
   			<td><input type="password" name="password"/></td></tr>
   		<tr>
     		<td colspan="2" align="center">
   			<input type="submit" value="Log in"/></td></tr>
  		<tr>
    		<td colspan="2"><a href="{{url('forget')}}">Forget your password?</a></td>
   		</tr>

 		</table>

 	</form>

</body>
</html>
