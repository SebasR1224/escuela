
tableEstudiantes = $('#tableEstudiantes').DataTable({
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

$("#formEstudiante").on('submit', function(e){

    e.preventDefault();
    console.log($(this).serialize());
    $.ajax({
        url: '/escuela/estudiante/store',
        type: 'POST',
        data:  {
            dni:  $("#dni").val(),
            nombre:  $("#nombre").val(),
            apellido:  $("#apellido").val(),
            telefono:  $("#telefono").val(),
            correo:  $("#correo").val(),
            password:  $("#password").val(),
            estado:  $("#estado").val(),
        },
        success: function(response) {
            $('#modalEstudiante').modal('hide')
            tableEstudiantes.ajax.reload(null, false)
            Swal.fire({
                icon: "success",
                title: "Estudiante registrado correctamente",
                toast: true,
                position: "top-end",
                showConfirmButton: false,
                timer: 1500,
            })
        }
    })
})

