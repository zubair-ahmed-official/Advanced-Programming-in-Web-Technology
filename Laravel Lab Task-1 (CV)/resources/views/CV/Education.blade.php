@extends('CV.objective')
@section('Content')
<html>
   <head>
       <title>Education</title>
	</head>
	<body>
	<table border="3px" style="text-align:center;width:80%;height:230px">
		@foreach ($edu as $e)
		<tr><td colspan="3"><h2>SSC</h2></td></tr>
		<tr><td>Institute: </td><td>{{$e -> Institute}} </td></tr>
		<tr><td>Result: </td><td>{{$e -> Result}} </td></tr>
		<tr><td>Year: </td><td>{{$e -> Year}} </td></tr>
		@endforeach
	</table>
<br><br>
	<table border="3px" style="text-align:center;width:80%;height:230px">
		@foreach ($educ as $e)
		<tr><td colspan="3"><h2>HSC</h2></td></tr>
		<tr><td>Institute: </td><td>{{$e -> Institute}} </td></tr>
		<tr><td>Result: </td><td>{{$e -> Result}} </td></tr>
		<tr><td>Year: </td><td>{{$e -> Year}} </td></tr>
		@endforeach
	</table>

	</body>
</html>
@endsection