/*=============================================================================
=            ajax para mostrar proyectos por nodo en la datatables            =
=============================================================================*/
$('#btnconsultaproyecto').click (function () {
  var nodo = $("#txtnodotbproyecto").val();

  if (nodo == "") {
  	swal('Ups!!', 'Por favor seleccione un nodo', 'warning');
  }else{
	      $.ajax({
	      dataType:'json',
	      type:'post',
	      url:uri+"proyecto/ProyectosPorNodo/"+nodo
	    }).done(function(response) {
        console.log(response);

	       var t = $('#tblproyecto').DataTable();
	       t.clear().draw();

	       if (response == 0) {
	       	swal('Ups!!', 'No se han encontrado resultados', 'warning');

	       } else {

           $('#tblproyecto').css("visibility", "visible");
	      $.each(response, function(i, item) {

	      	    var ver = '<a onclick="ver('+item.idproyecto+')" type="button" class="btn btn-round btn-primary btn-sm">Detalles</a>'
		        // var t = $('#tblproyecto').DataTable();
		        t.row.add( [item.codigoproyecto,item.nombre,item.tipoproyecto,item.linea,item.nombref, item.nombresg+' '+item.apellidosg,item.fechacreacion,item.estadoproyecto, ver] ).draw(true);



	      	});
	       }
	    });
    }

  });



/*=====  End of ajax para mostrar proyectos por nodo en la datatables  ======*/

/*===================================================================================
=            MODAL PARA MOSTRAR MAS INFORMACION SOBRE PROYECTOS POR NODO            =
===================================================================================*/

function ver(idproyecto){


	console.log(idproyecto);
  $.ajax({
    dataType:'json',
    type:'post',
    url:uri+"proyecto/modalProyectosPorNodo/"+idproyecto
}).done(function(respuesta){

    $("#tittle").empty();
    $("#tittle").append("Proyecto: "+respuesta[0].nombreproyecto+"");
    $("#tblmodalproyectonodo").empty();
    $("#tblmodalproyectonodo").append('<tbody>'
                                        +'<tr>'
                                            +'<th scope="row">Código de Proyecto</th>'
                                            +'<td>'+respuesta[0].codigoproyecto+'</td>'
                                            +'<th scope="row">Nombre de Proyecto</th>'
                                            +'<td rows= "2">'+respuesta[0].nombreproyecto+'</td>'
                                            +'<th scope="row">Talento lider</th>'
                                            +'<td>'+respuesta[0].talentolider+'</td>'
                                        +'</tr>'
                                        +'<tr>'
                                            +'<th scope="row">Gestor</th>'
                                            +'<td>'+respuesta[0].gestor+'</td>'
                                            +'<th scope="row">linea</th>'
                                            +'<td>'+respuesta[0].linea+'</td>'
                                            +'<th scope="row">Foco</th>'
                                            +'<td>'+respuesta[0].foco+'</td>'
                                        +'</tr>'
                                        +'<tr>'
                                            +'<th scope="row">Sector</th>'
                                            +'<td>'+respuesta[0].sector+'</td>'
                                            +'<th scope="row">Nit</th>'
                                            +'<td>'+respuesta[0].nit+'</td>'
                                            +'<th scope="row">Razó Social</th>'
                                            +'<td>'+respuesta[0].razonsocial+'</td>'
                                        +'</tr>'
                                        +'<tr>'
                                            +'<th scope="row">Tipo de Proyecto</th>'
                                            +'<td>'+respuesta[0].tipoproyecto+'</td>'
                                            +'<th scope="row">Estado del Proyecto</th>'
                                            +'<td>'+respuesta[0].estadoproyecto+'</td>'
                                            +'<th scope="row">Observaciones</th>'
                                            +'<td>'+respuesta[0].observaciones+'</td>'
                                        +'</tr>'

                                    +'</tbody>');

     $("#description").empty();
    $("#description").append(respuesta[0].descripcion);



    $("#modalproyectopornodo").modal();


});
}



/*=====  End of MODAL PARA MOSTRAR MAS INFORMACION SOBRE PROYECTOS POR NODO  ======*/
