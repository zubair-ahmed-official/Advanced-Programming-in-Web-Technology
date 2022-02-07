<html>
    <head>
       <title>Index</title>
	</head>
	<body>
		@php 
		$name = "Curriculum Vitae";
		@endphp
	<h1 >{{$name}} </h1>
	<img width="300px" height="300px" src="images/Zubair.jpg">
	
	<ul type="circle">
	<li>Name:  {{$n}}</li>
	<li>Phone: 01587459632</li>
	<li>Email: zubair650@gmail.com</li>
	<li>Address: Dhaka</li>
	</ul>	
	<label><b>Skills:</b></lable>
	<ul>
		@foreach($skills as $s)
			<li>({{$loop->iteration}}) {{$s}} </li>
		@endforeach
		
	</ul>
	
	
	<a target="_blank" href="{{route('obj')}}">OBJECTIVE</a>
	<a target="_blank" href="{{route('per')}}">PERSONAL</a>
	<a target="_blank" href="{{route('edu')}}">EDUCATION</a>
	<a target="_blank" href="https://github.com/Zubair650">GITHUB</a>
	<a target="_blank" href="Reference">REFERENCE</a>
	</body>
</html>