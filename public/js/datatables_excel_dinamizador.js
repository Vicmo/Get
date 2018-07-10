/*------------------------------- Scripts de datatable para exportar a Excel (dinamizador) ----------------------------------------------*/
  $(document).ready(function() {

    $('#reportesadmin').DataTable( {
        dom: 'Bfrtip',
        buttons: [

            {
                extend: 'excelHtml5',
                exportOptions: {
                    columns: [0,1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16]
                }
            },


        ],
        "columnDefs": [
            {
                "targets": [16,15,14,13,12,11,10,9,8,7,5],
                "visible": false,
                "searchable": false
            }

        ],
        "bStateSave": true,
    "iCookieDuration":60


    } );
} );



  $(document).ready(function() {
    $('#reportesadmint').DataTable( {
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
    $('#reportepinscritos').DataTable( {
        dom: 'Bfrtip',
        buttons: [

            {
                filename: 'Proyectos por Mes',
                sheetName: 'Proyectos por mes',
                extend: 'excelHtml5',
                exportOptions: {
                    columns: [1,2]
                }
            },


        ]
    } );
} );

  $(document).ready(function() {
    $('#reportepfinalizado').DataTable( {
        dom: 'Bfrtip',
        buttons: [

            {
                filename: 'Prototipos finalizados(mes)',
                sheetName: 'Prototipos_Finalizados',
                extend: 'excelHtml5',
                exportOptions: {
                    columns: [1,2]
                }
            },


        ]
    } );
} );

  $(document).ready(function() {
    $('#reporteppm').DataTable( {
        dom: 'Bfrtip',
        buttons: [

            {
                filename: 'Prototipos en el mercado(Cierre PMV)',
                sheetName: 'Cierre PMV',
                extend: 'excelHtml5',
                exportOptions: {
                    columns: [1,2]
                }
            },


        ]
    } );
} );
