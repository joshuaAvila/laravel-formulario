
const formulario = document.getElementById('formulario');
const inputs = document.querySelectorAll('#formulario input, textarea');

const expresiones = {
	empresa: /^[a-zA-Z0-9\_\-]{4,16}$/, // Letras, numeros, guion y guion_bajo
	ruc: /^[0-9]+(001)$/,
	nombre: /^[a-zA-ZÀ-ÿ\s]$/, // Letras y espacios, pueden llevar acentos.
    apellido: /^[a-zA-ZÀ-ÿ\s]$/, // Letras y espacios, pueden llevar acentos.
	correo: /^[a-zA-Z0-9_.+-]+@[a-zA-Z0-9-]+\.[a-zA-Z0-9-.]+$/,
	telefono: /^\d{7,14}$/, // 7 a 14 numeros.
	direccion: /^[a-zA-ZÀ-ÿ\s0-9]$/,
	referencia: /^[a-zA-ZÀ-ÿ\s0-9]$/,
	contenedores: /^\d{1,5}$/,
	field_name: /^[a-zA-ZÀ-ÿ\s0-9-]$/

}


const validarFormulario = (e) =>{
	switch(e.target.name){
		case "empresa": 
		 		validarCampo(expresiones.empresa, e.target, 'empresa');
		break;
		case "ruc": 
		 		
		break;
		case "nombre": 
		 		console.log('Ingrese el Nombre');
		break;
		case "apellido": 
		 		console.log('Ingrese el Apellido');
		break;
		case "correo": 
		 		console.log('Ingrese el Correo');
		break;
		case "telefono1": 
		 		console.log('Ingrese El telefono 1');
		break;
		case "telefono2": 
		 		console.log('Ingrese El Telefono 2');
		break;
		case "direccion": 
		 		console.log('Ingrese la direccion');
		break;
		case "referencia": 
		 		console.log('Ingrese la referencia');
		break;
		case "contenedores": 
		 		console.log('Ingrese el numero de contenedores');
		break;
		case "requerimiento": 
		 		console.log('Ingrese el requerimiento o asunto');
		break;
		case "detalle": 
		 		console.log('Ingrese los detalle del asunto');
		break;
		case "field_name[]": 
		 		console.log('Ingrese el codigo del contenedor');
		break;
	}
	
}

const validarCampo = (expresion,input,campo) =>{
	if(expresion.test(input.value)){
		document.getElementById(`div_${campo}`).classList.remove('formulario_grupo-incorrecto');
		document.getElementById(`div_${campo}`).classList.add('formulario_grupo-correcto');
		document.querySelector(`#div_${campo} i`).classList.add('fa-check-circle');
		document.querySelector(`#div_${campo} i`).classList.remove('fa-times-circle');
		document.querySelector(`#div_${campo} .formulario_input-error`).classList.remove('formulario_input-error-activo');
		
	}else{
		document.getElementById(`div_${campo}`).classList.add('formulario_grupo-incorrecto');
		document.getElementById(`div_${campo}`).classList.remove('formulario_grupo-correcto');
		document.querySelector(`#div_${campo} i`).classList.add('fa-times-circle');
		document.querySelector(`#div_${campo} i`).classList.remove('fa-check-circle');
		document.querySelector(`#div_${campo} .formulario_input-error`).classList.add('formulario_input-error-activo');
	}
}

inputs.forEach((input) => {
	input.addEventListener('keyup', validarFormulario);
	input.addEventListener('blur', validarFormulario);

});

formulario.addEventListener('submit', (e)=>{
	e.preventDefault();

	document.getElementById('formulario_mensaje-exito').classList.add('formulario_mensaje-exito-activo');
});