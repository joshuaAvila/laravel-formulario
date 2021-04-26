
const formulario = document.getElementById('formulario');
const inputs = document.querySelectorAll('#formulario input, textarea');

const expresiones = {
	empresa: /^[a-zA-Z0-9\_\-]{4,16}$/, // Letras, numeros, guion y guion_bajo
	ruc: /^\d{10,13}(001)$/,
	nombre: /^[a-zA-ZÀ-ÿ\s]{1,40}$/, // Letras y espacios, pueden llevar acentos.
    apellido: /^[a-zA-ZÀ-ÿ\s]{1,40}$/, // Letras y espacios, pueden llevar acentos.
	correo: /^[a-zA-Z0-9_.+-]+@[a-zA-Z0-9-]+\.[a-zA-Z0-9-.]+$/,
	telefono: /^\d{8,14}$/, // 7 a 14 numeros.
	direccion: /^[a-zA-ZÀ-ÿ\s]{1,40}$/,
	referencia: /^[a-zA-ZÀ-ÿ\s]{1,40}$/,
	contenedores: /^\d{1,5}$/,
	field_name: /^[a-zA-Z0-9\_\-]{4,16}$/,
	detalle: /^[a-zA-ZÀ-ÿ\s]{1,40}$/,
	requerimiento: /^[a-zA-Z0-9\_\-]{4,16}$/

}


const validarFormulario = (e) =>{
	switch(e.target.name){
		case "empresa": 
		 		validarCampo(expresiones.empresa, e.target, 'empresa');
		break;
		case "ruc": 
				validarCampo(expresiones.ruc ,e.target, 'ruc');
		break;
		case "nombre": 
		 		validarCampo(expresiones.nombre ,e.target, 'nombre');
		break;
		case "apellido": 
		 		validarCampo(expresiones.apellido ,e.target, 'apellido');
		break;
		case "correo": 
		 		validarCampo(expresiones.correo ,e.target, 'correo');
		break;
		case "telefono1": 
		 		validarCampo(expresiones.telefono ,e.target, 'telefono1');
		break;
		case "telefono2": 
		 		validarCampo(expresiones.telefono ,e.target, 'telefono2');
		break;
		case "direccion": 
		 		validarCampo(expresiones.direccion ,e.target, 'direccion');
		break;
		case "referencia": 
		 		validarCampo(expresiones.referencia , e.target, 'referencia');
		break;
		case "contenedores": 
		 		validarCampo(expresiones.contenedores ,e.target, 'contenedores');
		break;
		case "requerimiento": 
		 		validarCampo(expresiones.requerimiento ,e.target, 'requerimiento');
		break;
		case "detalle": 
		 		validarCampo(expresiones .detalle,e.target, 'detalle');
		break;
		case "field_name[]": 
		 		validarCampo(expresiones.field_name ,e.target, 'identificador');
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