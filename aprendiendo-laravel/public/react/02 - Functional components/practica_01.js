function MyInfo(){
	return (
		<div>
			<h1>Lucas Ramos</h1>
			<h2>Subtítulo</h2>
			<ul>
				<li>Lista 1</li>
				<li>Lista 2</li>
				<li>Lista 3</li>
			</ul>
		</div>
	)
}

ReactDOM.render(
	<MyInfo />
	, 
	document.getElementById('root')
);