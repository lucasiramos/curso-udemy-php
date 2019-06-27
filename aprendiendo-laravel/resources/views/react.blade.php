<!-- <h1><?=$ejemplo?></h1> -->
@if($ejemplo == 'preguntas')
	[
		{
			id: 1,
			pregunta: "Pregunta 0"
			respuesta: "Respuesta 0"
		},
		{
			id: 2,
			pregunta: "Pregunta 1",
			respuesta: "Respuesta 1"	
		}
		,
		{
			id: 3,
			pregunta: "Pregunta 3",
			respuesta: "Respuesta 3"	
		}
		,
		{
			id: 4,
			pregunta: "Pregunta 4",
			respuesta: "Respuesta 4"	
		}
		,
		{
			id: 5,
			pregunta: "Pregunta 5",
			respuesta: "Respuesta 5"	
		}
	]
@else
	@if($ejemplo == 'comidas')
		[
			{
				id: 1,
				comida: "Hamburguesa"
				descripcion: "Pan - Carne - Pan"
			},
			{
				id: 2,
				comida: "Fideos",
				descripcion: "Es pasta"	
			}
			,
			{
				id: 3,
				comida: "Asado",
				descripcion: "Lo mas rico"	
			}
			,
			{
				id: 4,
				comida: "Hígado",
				descripcion: "Es feo"	
			}
			,
			{
				id: 5,
				comida: "Sopa",
				descripcion: "Guarda que esta caliente"	
			}
		]
	@else
		Otro
	@endif
@endif