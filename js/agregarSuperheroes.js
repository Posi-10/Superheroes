function insertarHeroes() {
    $.ajax({
        type: "GET",
        dataType: "json",
        url: "json/heroes.json",
        success: function(respuesta) {

            let datosTotales = [];
            $.each(respuesta, function(index, value) {
                let heroe = value["name"];
                let power = value["powerstats"]["power"];
                let nombre = value["biography"]["fullName"];
                let genero = value["appearance"]["gender"];
                let publicado = value["biography"]["publisher"];
                let imagen = value["images"]["sm"];
                datosTotales += `${heroe},${power},${nombre},${genero},${publicado},${imagen}||`;
            });

            $.ajax({
                type: "POST",
                data: "heroes=" + datosTotales,
                url: "app/agregarHeroes.php",
                success: function(respuesta) {

                    if (respuesta == 1) {
                        $('#seccionCarga').html("<p>Terminado</p>");
                        Swal.fire({
                            title: '<strong>El proceso ha terminado</strong>',
                            icon: 'success',
                            html: 'Ir a la tabla generada</b>, ' +
                                '<a href="tablaHeroes.php">Tabla de heroes obtenidos</a>',
                            showCloseButton: true,
                            showCancelButton: true,
                            focusConfirm: false
                        })
                    } else {
                        $('#seccionCarga').html("<p>No terminado!!!</p>");
                        Swal.fire({
                            icon: 'error',
                            title: 'Oops...',
                            text: 'Se inserto mal :(',
                            footer: 'Vuelve a intentarlo!'
                        })
                    }

                }
            });


        }
    });
}
$(document).ready(() => {
    $('#btn_insertar').click(() => {
        insertarHeroes();
    });
});