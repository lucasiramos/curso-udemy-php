<html>
<head>
	<title></title>
	<link rel="stylesheet" href="/css/app.css">
</head>
<body>
	<div class="container">
		<h1>Publicación</h1>
		<div class="panel panel-default">
			<div class="panel-heading">
				<h4>{{ $post->title }}</h4>
			</div>
			<div class="panel-body">
				{{ $post->body }}
			</div>
		</div>

	</div>
</body>
</html>