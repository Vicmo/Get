/*===================================================
=            validacion ajax dinamizador            =
===================================================*/

$('#txttipodocumento').change(function(){
	var tipodocumento = $('#txttipodocumento').val();
	console.log(tipodocumento);
});

/*=======================================
=            campo documento            =
=======================================*/
$('#txtdocumento').change(function(){
	var documento = $('#txtdocumento').val();
	var documentoExistente = false;
	var datos = new FormData();

	datos.append("validarDocumento", documento);
	$.ajax({
        url:uri+"dinamizador/ValidarDocumentoAjax",
		method: 'post',
		data: datos,
        cache: false,
        contentType: false,
        processData: false,
        success: function(respuesta){

            if (respuesta == 0) {
            	$(".help-block-1").html("<strong>Este documento ya existe en nuestros datos</strong>")
            	documentoExistente = true;
            }else{
            	$(".help-block-1").html()
            	documentoExistente = false;
            }
        }
	});
});



/*=====  End of campo documento  ======*/



$('#txtnombres').change(function(){
	var nombres = $('#txtnombres').val();
	console.log(nombres);
});

$('#txtapellidos').change(function(){
	var apellidos = $('#txtapellidos').val();
	console.log(apellidos);
});

/*====================================
=            campo correo            =
====================================*/

$('#txtcorreo').change(function(){

	var correo = $('#txtcorreo').val();
	var correoExistente = false;
	var datos = new FormData();

	if (correo != "") {
		var caracteres = correo.length;
		var Expresion = /^[^0-9][a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*[@][a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*[.][a-zA-Z]{2,4}$/;
		if (caracteres > 45 ) {
			$(".help-block-2").html("<strong>Este campo debe tener máximo 45 caracetes</strong>");
		}else{
			$(".help-block-2").html();
		}
		if (!Expresion.test(correo)) {
			$(".help-block-2").html("<strong>Este campo no coincide con un correo</strong>");
		}
	}else{
		$(".help-block-2").html("<strong>Este campo es obligatorio</strong>");
	}
	datos.append("validarCorreo", correo);
	$.ajax({
        url:uri+"dinamizador/ValidarCorreoAjax",
		method: 'post',
		data: datos,
        cache: false,
        contentType: false,
        processData: false,
        success: function(respuesta){

            if (respuesta == 0) {
            	$(".help-block-2").html("<strong>Este correo ya existe en nuestros datos</strong>")
            	correoExistente = true;
            }else{
            	$(".help-block-2").html()
            	correoExistente = false;
            }
        }
	});
});
/*=====  End of campo correo  ======*/


// $(document).ready(function() {


//     $("#demo-form2").validate({
//         rules: {
//           txtrol: {},
//           txtnodo:{},
//           txttipodocumentoname: { required: true},
//             txtnombres: { required: true, minlength: 2},
//             txtapellidos: { required: true, minlength: 2},
//             txtcorreo: { required: true, minlength: 2},

//         },
//         // messages: {
//         //     name: "Debe introducir su nombre.",
//         //     lastname: "Debe introducir su apellido.",
//         //     email : "Debe introducir un email válido.",
//         //     phone : "El número de teléfono introducido no es correcto.",
//         //     years : "Debe introducir solo números.",
//         //     message : "El campo Mensaje es obligatorio.",
//         // },
//         submitHandler: function(form){
//             console.log("hola");
//             var dataString = 'txtcorreo='+$('#txtcorreo').val();
//             $.ajax({
//                 type: "POST",
//                 url:uri+"dinamizador/ValidarCorreoAjax",
//                 data: dataString,
//                 success: function(respuesta){

//                   console.log(respuesta);
//             //         if (respuesta == 0) {
//             //   $(".help-block-2").html("<strong>Este correo ya existe en nuestros datos</strong>")
//             //   correoExistente = true;
//             // }else{
//             //   $(".help-block-2").html()
//             //   correoExistente = false;
//             // }
//                 }
//             });
//         }
//     });
// });




/*=====  End of validacion ajax dinamizador  ======*/
