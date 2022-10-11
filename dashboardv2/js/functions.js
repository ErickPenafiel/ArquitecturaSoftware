/* Llamar con Fetch */
function cargarPagina(abrir) {    
	var contenedor = document.getElementById('contenido');
	fetch(abrir)
		.then(response => response.text())
		.then(data => contenedor.innerHTML=data);
}