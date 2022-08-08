
$('#tableEstudiantes').DataTable({
    "ajax": {
        "method": "POST",
        "url": "/escuela/estudiante/index"
    },
    "columns":[
        {"data": "id"},
        {"data": "dni"},
        {"data": "nombre"},
        {"data": "apellido"},
        {"data": "telefono"},
        {"data": "email"},
        {"data": "estado"},
        {
            data: null,
            render: function ( data, type, row ) {
                    return `<button type='button' class='btn btn-circle delete'>
                                <i class='far fa-trash-alt text-danger'></i>
                            </button>`+
                            `<button type='button' class='btn btn-circle' data-toggle='modal' data-target='.userModal'>
                                <i class='far fa-edit text-warning'></i>
                            </button>` +
                            `<button type='button' class='btn btn-circle'>
                                <i class='fas fa-cog text-primary'></i>
                            </button>`
            },
        }
    ],
    "columnDefs": [ 
        { className: "text-center", targets: 7 },
        {
            targets: 7,
            createdCell: function (td, cellData, rowData, row, col) {
                $(td).addClass('p-1 d-flex align-items-center justify-content-between');
            }
        },
        { "width": "5%", "targets": 7 } 
    ]
});
