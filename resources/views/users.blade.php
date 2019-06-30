<!DOCTYPE html>
<html>
<head>
	<title>Listado de usuarios</title>
</head>
<body>
<h1>{{ $title}}</h1>
<ul>
	@foreach ($users as $user)
	<li>{{ $user }}</li>
	@endforeach
</ul>

<br><form action="/">
    <input type="submit" value="Main Page" />
</form>
</body>
</html>