<html>
 
<head>
 
<title>Student Registration</title>
 
</head>
 
<body>
	
<form method="POST" action="{{url('student')}}">
{{ csrf_field() }}
 
<table border="1" align="center" width="400" bgcolor="#CCCCCC" >
 
<caption>Registration form</caption>
 
<tr>
 
<th>Enter name</th>
 
<td><input type="text" name="name" maxlength="10" placeholder="enter your name" required/></td>
 
</tr>
 
<tr>
 
<th>Enter email</th>
 
<td><input type="email" name="email" /></td>
 
</tr>
 
<tr>
 
<td colspan="2" align="center"><input type="submit" value="Register"/>
 
</td>
 
</tr>
 
</table>
 
</form>
 
</body>
 
</html>