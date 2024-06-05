import './bootstrap';

//new DataTable('#propietario');        
$('#tablas').DataTable({
    "language": {
        "decimal": "",
        "emptyTable": "No hay datos disponibles en la tabla",
        "info": "Mostrando _START_ a _END_ de _TOTAL_ registros",
        "infoEmpty": "Mostrando 0 a 0 de 0 registros",
        "infoFiltered": "(filtrado de _MAX_ registros totales)",
        "infoPostFix": "",
        "thousands": ",",
        "lengthMenu": "Mostrar _MENU_ registros",
        "loadingRecords": "Cargando...",
        "processing": "Procesando...",
        "search": "Buscar:",
        "searchPlaceholder": " ",
        "zeroRecords": "No se encontraron registros coincidentes",
        "paginate": {
            "first": "Primero",
            "last": "Último",
            "next": "Siguiente",
            "previous": "Anterior"
        },
        "aria": {
            "sortAscending": ": activar para ordenar la columna de manera ascendente",
            "sortDescending": ": activar para ordenar la columna de manera descendente"
        },

    }
});

document.addEventListener("DOMContentLoaded", function() {
    var inputsNumericos = document.querySelectorAll("[data-input-numerico]");

    inputsNumericos.forEach(function(input) {
        input.addEventListener("keypress", function(event) {
            var charCode = event.which ? event.which : event.keyCode;
            if (charCode > 31 && (charCode < 48 || charCode > 57)) {
                event.preventDefault();
            }
        });
    });
});


// Mostrar la animación de carga al enviar el formulario
document.querySelector('form').addEventListener('submit', function() {
    document.getElementById('loading').style.display = 'block';
});
