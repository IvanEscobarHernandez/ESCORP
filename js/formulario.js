const formulario=document.getElementById('frmContacto');
const inputs=document.querySelectorAll('#frmContacto input');

const expresiones = {
	nombre: /^[a-zA-ZÀ-ÿ\s]{1,40}$/, // Letras y espacios, pueden llevar acentos.
	correo: /^[a-zA-Z0-9_.+-]+@[a-zA-Z0-9-]+\.[a-zA-Z0-9-.]+$/,
	telefono: /^\d{10,10}$/ // 7 a 14 numeros.
}

const campos = {
    nombre: false,
    email: false,
    telefono: false,
    asunto: false
}

const validarFormulario = (e) =>{
    switch (e.target.name){
        case "nombre":
            validarCampo(expresiones.nombre , e.target, 'nombre');
        break;

        case "email":
            validarCampo(expresiones.correo , e.target, 'correo');
        break;

        case "telefono":
            validarCampo(expresiones.telefono , e.target, 'telefono');
        break;
    }
}

const validarCampo = (expresion, input, campo)=>{
    if(expresion.test(input.value)){
        document.getElementById(`grupo__${campo}`).classList.remove('formulario__grupo-incorrecto');
        document.getElementById(`grupo__${campo}`).classList.add('formulario__grupo-correcto');
        document.querySelector(`#grupo__${campo} i`).classList.remove('fa-times-circle');
        document.querySelector(`#grupo__${campo} i`).classList.add('fa-check-circle');
        document.querySelector(`#grupo__${campo} .formulario__input-error`).classList.remove('formulario__input-error-activo');
        campos[campo] = true;
    }else{
        document.getElementById(`grupo__${campo}`).classList.remove('formulario__grupo-correcto');
        document.getElementById(`grupo__${campo}`).classList.add('formulario__grupo-incorrecto');
        document.querySelector(`#grupo__${campo} i`).classList.remove('fa-check-circle');
        document.querySelector(`#grupo__${campo} i`).classList.add('fa-times-circle');
        document.querySelector(`#grupo__${campo} .formulario__input-error`).classList.add('formulario__input-error-activo');
        campos[campo] = false;
    }
}

inputs.forEach((input) => {
    input.addEventListener('keyup', validarFormulario);
    input.addEventListener('blur', validarFormulario);
});

formulario.addEventListener('submit', (e) => {
    e.preventDefault();
    const terminos=document.getElementById('terminos')
    if (campos.nombre && campos.email && campos.telefono) {
        formulario.reset();
        
    }else{
        document.getElementById('formulario__mensaje').classList.add('formulario__mensaje-activo')
    }
});