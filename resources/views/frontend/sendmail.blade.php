<!DOCTYPE html>
<html>
<head>
	<title>Send Email</title>
</head>
<body>
	
	@foreach($e_data as $data)
	<h3>{{$data->description}}</h3>
	<h4>{{$data->mname}}</h4>
	<h4>{{$data->uname}}</h4>
	<h4>{{$data->cname}}</h4>
	<p>My name is {{$data->name}}.I'm {{$data->grade}}.I'm attaching a copy of <a href="{{asset($data->attachment)}}" download="download">Attachment File</a></p>
	@endforeach
</body>
</html>
