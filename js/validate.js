$().ready(function(){
	
	jQuery.validator.addMethod("expression", function(value, element, param) {
	    return value.match(new RegExp("^" + param + "$"));
	});
	
	$("#form").validate({
		rules:{
			nombre:{
				required: true
			},
			apellidos:{
				required: true
			},
			email:{
				required: true,
				email: true
			},
			celular:{
				required: true,
				maxlength: 10,
				minlength: 10,
				digits: true
			},
			comments:{
				required: true
			},
			
		},

		messages:{
			nombre:{
				required: "Necesitas ingresar tu nombre"
			},
			apellidos:{
				required: "Necesitas ingresar tus dos apellidos"
			},
			email:{
			   required: "Por favor escribe tu correo electrónico",
			   email: "Ingresa un correo válido por favor"
			},
			celular:{
				required: "Tu celular a 10 digitos",
				minlength: "Necesitas ingresar mínimo 10 digitos"
			},
			comments:{
				required: "No olvides enviarnos el motivo de tu contacto"
			},
		}

	});
	
});