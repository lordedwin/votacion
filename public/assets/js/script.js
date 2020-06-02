document.querySelectorAll('.eliminarCandidato').forEach((el) => {
	el.addEventListener('click', eliminarCandidato);
});

let form=document.querySelectorAll('.formEliminar');
//console.log(form)
form.forEach((el) => {
	url = el.getAttribute("action")});
	
let token=document.querySelector('.formEliminar input').getAttribute('value');

//let method =form.elements._method.value

function eliminarCandidato(e) {
	
	//Ingresamos un mensaje a mostrar
	let mensaje=confirm("¿Desea eliminar el candidato?");
	    //Detectamos si el usuario aceptó o no el mensaje
    if (mensaje === false){
    	e.preventDefault();
    	return false;
	}else{
		e.preventDefault();
    	fetch(url, {
			headers: {
			"X-CSRF-TOKEN": token
		    },
		    method: 'DELETE',
		})
		.then(response => response.json())	
		.then(respuesta => {
		  console.log(respuesta);
		});

		this.closest('tr').remove();
	}		
}

	
		
	//.catch(error) {
	//	console.log(error);
	//}
   