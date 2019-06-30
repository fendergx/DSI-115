<!DOCTYPE html>
<html>
<head>
	<title>Listado de usuarios</title>
</head>
<body>
<h1>{{ $title}}</h1>
<hr>	

@if (! 	empty($users))
<ul>
	@foreach ($users as $user)
	<li>{{ $user }}</li>
	@endforeach
</ul>
@else
	<p>No hay usuarios</p>
@endif

<br><form action="/">
    <input type="submit" value="Main Page" />
</form>
</body>
</html>