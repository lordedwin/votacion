document.querySelectorAll('.eliminarCandidato').forEach((el) => {
	el.addEventListener('click', eliminarCandidato);
});

let form=document.querySelectorAll('.formEliminar');
let url=`${form.action}`
console.log(url)
let token=form.elements._token.value
let method =form.elements._method.value

function eliminarCandidato(e) {
	
	//Ingresamos un mensaje a mostrar
	let mensaje=confirm("¿Desea eliminar el candidato?");
	    //Detectamos si el usuario aceptó o no el mensaje
    if (mensaje === false){
    	e.preventDefault();
    	return false;
	}else{
    	return true;
	}		

	/*fetch(url, {
			headers: {
			"X-CSRF-TOKEN": token
		    },
		    method: method
		})
		.then(response => 
			console.log(response.json()))	
		.then(respuesta => {
		  console.log(respuesta);
		});*/
		
	//.catch(error) {
	//	console.log(error);
	//}
}
   