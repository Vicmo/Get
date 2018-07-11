/*===============================================================================
=            scritp para exportar excel de las datatables del gestor            =
===============================================================================*/

  $(document).ready(function() {
    $('#reportesgestorp').DataTable( {
        dom: 'Bfrtip',
        buttons: [

            {
                extend: 'excelHtml5',
                exportOptions: {
                    columns: [0,1,2,3,4,5,6]
                }
            },


        ]
    } );
} );

    $(document).ready(function() {
    $('#reportesadmin').DataTable( {
        dom: 'Bfrtip',
        buttons: [

            {
                extend: 'excelHtml5',
                exportOptions: {
                    columns: [0,1,2,3,4]
                }
            },


        ]
    } );
} );

/*=====  End of scritp para exportar excel de las datatables del gestor  ======*/
