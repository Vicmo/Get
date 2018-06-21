// $(document).ready(function(){

            $divPersona = $("#divPersona");
            $divRegistrarPersona = $("#divRegistrarPersona");
            $divPersona.hide();
            $divRegistrarPersona.hide();


            $("#btnNumeroIdentificacion").click(function(){

                var numeroIdentificacion = $("#numeroIdentificacion").val();
                $numid = $("#numeroIdentificacion").val();


                	if ($("#numeroIdentificacion").val() == "") {
                        swal("Ups!!", "Por favor digite el número de documento.", "warning");
                	}

                $.ajax({

                    type: 'POST',
                    url:uri+"ingresos/ConsultarIngresoDoc/"+ numeroIdentificacion,

                    dataType: 'json',




                }).done(function(response) {

               // console.log(response);

                var globo = [ document.getElementById('nombres'),
                document.getElementById('apellidos'),
                document.getElementById('correo'),
                document.getElementById('idTipoDocumento'),
                document.getElementById('idTipoPersona')]

                	if (!$.isEmptyObject(response)) {
                            $divPersona.show();
                            $divRegistrarPersona.hide();
                            $nombres = response[0].nombres;
                            $tipoPersona = response[0].nombre;
                            $contacto = response[0].contacto;
                            $correo = response[0].correo;
                            $idPersona = response[0].idPersona;
                            console.log();

                            $("#nombrePersona").val($nombres);
                            $("#tipoPersona").val(response[0].nombre);
                            $("#correo").val($correo);
                            $("#contacto").val($contacto);
                             $("#idPersona").val($idPersona);
                             globo[0].removeAttribute('required');
                             globo[1].removeAttribute('required');
                             globo[2].removeAttribute('required');
                             globo[3].removeAttribute('required');
                             globo[4].removeAttribute('required');
                        } else {
                            globo[0].setAttribute('required', '');
                            globo[1].setAttribute('required', '');
                            globo[2].setAttribute('required', '');
                            globo[3].setAttribute('required', '');
                            globo[4].setAttribute('required', '');

                            $divPersona.hide();
                            $divRegistrarPersona.show();

                        }
                        // if (response[0].idPersona) {

                        // }

                })
            });


//boton registrar
// $('#btnregistrar').on('click',function(e){
//    e.preventDefault();
//    var form = $(this).parents('form');
//    var caract = new RegExp(/^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/);
//    var correo = document.getElementById("correo").value;
//     if ($("#numeroIdentificacion").val() && $("#nombres").val() && $("#apellidos").val() &&
//         $("#idTipoDocumento").val() &&
//         $("#idTipoPersona").val() &&
//         $("#contacto").val() &&
//         $("#correo").val() &&
//         $("#single_cal3").val() &&
//         $("#horaIngreso").val() &&
//         $("#idServicio").val() &&
//         $("#horaSalida").val() &&
//         $("#descripcion").val()
//       )
//        if (caract.test(correo) == true){
//
//
//     {
//         swal({
//      title: "¿Desea guardar el registro?",
//      type: "warning",
//      showCancelButton: true,
//      confirmButtonColor: "#57D9D2",
//      confirmButtonText: "Si",
//      closeOnConfirm: false
//
//
//    },
//    function(isConfirm){
//
//     if (isConfirm) {
//
//
//      setTimeout(function(){
//
//      form.submit();
//
//      },1500 );
//       swal("Registrado", "El registro ha sido guardado correctamente", "success");
//
//     }else{
//     }
//
//   });
//
//    }
//  }
//
//
//  });


function registrarIngreso(){
            $('#demo-form2 #btnregistrar').text('Guardando...'); //change button text
            $('#demo-form2 #btnregistrar').attr('disabled',true); //set button disable

            // ajax adding data to database
            url = 'ingresos_ajax';
        $.ajax({
          url : url,
          type: "POST",
          data: $('#demo-form2').serialize(),
          dataType: "JSON",
          success: function(data)
          {
                if(data.status) //if success close modal and reload ajax table
                {
                  console.log('Se registró el ingreso.')
                 $("#demo-form2")[0].reset();
                 reload_ingresos();

               }
              else
              {
                console.log('No se guardó.')
              }
                $('#demo-form2 #btnregistrar').text('Guardar'); //change button text
                $('#demo-form2 #btnregistrar').attr('disabled',false); //set button enable

              },
              error: function (jqXHR, textStatus, errorThrown)
              {
                // demo.showNotification('Error al registrar el Entrenamiento.','danger','bottom','center');
                $('#demo-form2 #btnregistrar').text('Guardar'); //change button text
                $('#demo-form2 #btnregistrar').attr('disabled',false); //set button enable

              }
            });
}

 function reload_ingresos(){

                 $('#tabla').DataTable().ajax.reload(null,false);

 }



// $('#idTipoPersona').select2();
$('#idServicio').select2();
