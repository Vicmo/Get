
/*================================================================================
=            consulta para mostrar dinamizadores por nodo en la tabla            =
================================================================================*/
$('#btnconsulta').click (function () {
  var nodo = $("#txtnodotb").val();
  if (nodo == "") {
  	swal('Ups!!', 'Por favor seleccione un nodo', 'warning');
  }else{
	      $.ajax({
	      dataType:'json',
	      type:'post',
	      url:uri+"costosadministrativos/CostosAdministrativosPorNodo/"+nodo
	    }).done(function(response) {
	    	console.log(response);

	       var t = $('#tblcostosadministrativosnodo').DataTable();
	       t.clear().draw();

	       if (response == 0) {
	       	swal('Ups!!', 'No se han encontrado resultados', 'error');

	       } else {
            $('#tblcostosadministrativosnodo').css("visibility", "visible");
	      $.each(response, function(i, item) {
		        // var editar = '<a href="'+uri+'usuario/edit/'+item.idpersona+'" type="button" class="btn btn-round btn-primary btn-sm">Editar</a>'
		        // var t = $('#tblcostosadministrativosnodo').DataTable();
		        t.row.add( [item.nombrenodo,item.nombre,item.valor] ).draw(true);
	      	});
	       }
	    });
    }

  });


/*=====  End of consulta para mostrar dinamizadores por nodo en la tabla  ======*/
