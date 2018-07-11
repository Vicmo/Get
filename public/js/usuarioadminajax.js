/*================================================================================
=            consulta para mostrar gestores por nodo en la tabla            =
================================================================================*/

$('#btnconsultagestor').click (function () { 
  var nodo = $("#txtnodotbgestor").val();

  if (nodo == "") {
  	swal('Ups!!', 'Por favor seleccione un nodo', 'warning');
  }else{
	      $.ajax({
	      dataType:'json',  
	      type:'post',
	      url:uri+"usuario/GestoresPorNodo/"+nodo
	    }).done(function(response) {
        	    	
	       var t = $('#tblgestor').DataTable();
	       t.clear().draw();

	       if (response == 0) {
	       	swal('Ups!!', 'No se han encontrado resultados', 'warning');
	      
	       } else {

          $('#tblgestor').css("visibility", "visible");
        $.each(response, function(i, item) {

		        var t = $('#tblgestor').DataTable();
		        t.row.add( [item.tipodocumento,item.documento,item.nombres,item.apellidos,item.correo,item.contacto,item.nombrenodo,item.nombrel, item.salario, item.estado ] ).draw(true);
	      	});
	       }
	    });
    }

  }); 



/*=====  End of consulta para mostrar dinamizadores por nodo en la tabla  ======*/





/*============================================================================
=            ajax para mostrar talentos por nodo en la datatables            =
============================================================================*/

$('#btnconsultatalento').click (function () { 
  var nodo = $("#txtnodotalento").val();
  if (nodo == "") {
  	swal('Ups!!', 'Por favor seleccione un nodo', 'warning');
  }else{
	      $.ajax({
	      dataType:'json',  
	      type:'post',
	      url:uri+"usuario/TaletosPorNodo/"+nodo
	    }).done(function(response) {
	    	
	    	
	       var t = $('#tbltalento').DataTable();
	       t.clear().draw();

	       if (response == 0) {
	       	swal('Ups!!', 'No se han encontrado resultados', 'warning');
	      
	       } else {
         $('#tbltalento').css("visibility", "visible");
	      $.each(response, function(i, item) {
		        var ver = '<a onclick="ver('+item.idpersona+')" type="button" class="btn btn-round btn-primary btn-sm">Detalles</a>' 
		        var t = $('#tbltalento').DataTable();
		        t.row.add( [item.tipodocumento,item.nombretalento,item.correo,item.contacto,item.nombrenodo,item.rol,item.tipotalento,item.estado, ver] ).draw(true);
		        

	      	});
	       }
	    });
    }

  });

/*=====  End of ajax para mostrar talentos por nodo en la datatables  ======*/

/*===============================================================
=            combo dependiente de nodos con gestores            =
===============================================================*/





var metodos = {
        getGestor:function(e){
    
        let id = $(e).val();
       
        
        $.ajax({
            dataType:'json',
            type:'post',
            url:uri+'/usuario/getGestor/'+id
          }).done(function(res){
        
              $('#txtcombogestor').empty();
              $('#txtcombogestor').append('<option value="">--Seleccione Gestor--</option>')
              $.each(res, function(i, e) {
                  $('#txtcombogestor').append('<option  value="'+e.idpersona+'">'+e.nombres+" "+e.apellidos+'</option>');
            })
        });
    }
  }


/*=====  End of combo dependiente de nodos con gestores  ======*/




/*=============================================================
=            ajax para mostrar talentos por gestor            =
=============================================================*/

$('#btnconsultatalentoporgestor').click (function () { 
  var nodo = $("#txtnodotalentogestor").val();
  var gestor = $("#txtcombogestor").val();

  if (nodo == "") {
  	swal('Ups!!', 'Por favor seleccione un nodo', 'warning');
  }else if(gestor == ""){
  	swal('Ups!!', 'Por favor seleccione un gestor', 'warning');
  }
  else{
	      $.ajax({
	      dataType:'json',  
	      type:'post',
	      url:uri+"usuario/TalentosPorGestor/"+gestor
	    }).done(function(response) {

	       
	       var t = $('#tbltalentogestor').DataTable();
	       t.clear().draw();

	       if (response == 0) {
	       	swal('Ups!!', 'No se han encontrado resultados', 'warning');
	      
	       } else {
        $('#tbltalentogestor').css("visibility", "visible");
	      $.each(response, function(i, item) {

		        var ver = '<a onclick="ver('+item.idpersona+')" type="button" class="btn btn-round btn-primary btn-sm">Detalles</a>' 
		        var t = $('#tbltalentogestor').DataTable();
		        t.row.add( [item.tipod,item.nombretalento,item.correo,item.contacto,item.tipot,item.estado, ver] ).draw(true);
		        

	      	});
	       }
	    });
    }

  });


/*=====  End of ajax para mostrar talentos por gestor  ======*/


/*================================================================
=            modal para mostrar los talentos por nodo            =
================================================================*/

function ver(idpersona){

	
  $.ajax({
    dataType:'json',
    type:'post',
    url:uri+"usuario/modalTalentoPorNodo/"+idpersona
}).done(function(respuesta){
	console.log(respuesta);
    $("#tittle").empty();
    $("#tittle").append("Talento: "+respuesta[0].nombretalento+"");
    $("#tblmodaltalentonodo").empty();
    $("#tblmodaltalentonodo").append('<tbody>'
                                        +'<tr>'
                                            +'<th scope="row">Tipo Talento</th>'
                                            +'<td>'+respuesta[0].tipodocumento+'</td>'
                                            +'<th scope="row">Documento</th>'
                                            +'<td>'+respuesta[0].documento+'</td>'
                                            +'<th scope="row">Nombre Talento</th>'
                                            +'<td>'+respuesta[0].nombretalento+'</td>'
                                        +'</tr>'
                                        +'<tr>'
                                            +'<th scope="row">Fecha de nacimiento</th>'
                                            +'<td>'+respuesta[0].fechanacimiento+'</td>'
                                            +'<th>Correo</th>'
                                            +'<td>'+respuesta[0].correo+'</td>'
                                            +'<th>Genero</th>'
                                            +'<td>'+respuesta[0].genero+'</td>'
                                        +'</tr>'
                                        +'<tr>'
                                            +'<th scope="row">Tipo de Talento</th>'
                                            +'<td>'+respuesta[0].tipotalento+'</td>'
                                            +'<th scope="row">Ocupación</th>'
                                            +'<td>'+respuesta[0].ocupacion+'</td>'
                                            +'<th>Descripción Ocupación</th>'
                                            +'<td>'+respuesta[0].des_ocu+'</td>'
                                        +'</tr>'
                                        +'<tr>'
                                            +'<th scope="row">Contacto</th>'
                                            +'<td>'+respuesta[0].contacto+'</td>'
                                            +'<th scope="row">Residencia</th>'
                                            +'<td>'+respuesta[0].residencia+'</td>'
                                            +'<th>Dirección Residencia</th>'
                                            +'<td>'+respuesta[0].direccion+'</td>'
                                        +'</tr>'
                                        +'<tr>'
                                            +'<th scope="row">Institución</th>'
                                            +'<td>'+respuesta[0].institucion+'</td>'
                                            +'<th scope="row">Nivel Académico</th>'
                                            +'<td>'+respuesta[0].nombre+'</td>'
                                            +'<th>Titulo Obtenido / Fecha Terminación</th>'
                                            +'<td>'+respuesta[0].titulobtenido+' / '+respuesta[0].fechaterminado+'</td>'
                                        +'</tr>'
                                    +'</tbody>');


    
    $("#modaltalentopornodo").modal();


});
}

/*=====  End of modal para mostrar los talentos por nodo  ======*/






