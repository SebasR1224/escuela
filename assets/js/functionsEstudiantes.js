
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
        {
            data: null,
            render: function ( data, type, row ) {
                if(data.estado == 1) {
                    
                    return `<button type="button" class="badge badge badge-success btn btn-success" onclick="cambiarEstado(${data.id}, ${data.estado})">Activo</button>`

                }else if(data.estado == 0){
                    return `<button type="button" class="badge badge badge-danger btn btn-danger" onclick="cambiarEstado(${data.id}, ${data.estado})">Inactivo</button>`
                }
            },
        },
        {
            data: null,
            render: function ( data, type, row ) {
                    return  `<button type='button' class='btn btn-circle' data-toggle='modal' data-target='.userModal'>
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

function cambiarEstado(id, estado){
    Swal.fire({
        title: '¿Estas seguro?',
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Aceptar'
      }).then((result) => {
        if (result.isConfirmed) {
            $.ajax({
                url: '/escuela/estudiante/changeEstado',
                type: 'POST',
                data: 
                {
                    id:id,
                    estado: estado
                },
                success: function(response) {
                    console.log(response);
                    tableEstudiantes.ajax.reload(null, false)
                    Swal.fire(
                        'Cambio realizado',
                        'El estado del usuario a cambiado',
                        'success'
                    )
                }
            })
        }
      })
}

