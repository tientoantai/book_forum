<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form method="POST" action="{{route('uploads.store')}}" enctype="multipart/form-data">
		<input type="file" name="image">
		<input type="submit" name="btn-submit" value="Upload">
	</form>
</body>
</html>