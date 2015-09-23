$(document).ready(function() {
    function insertar() {
        var descripcion = $("#descripcion").val();
        $("#descripcion").val(''); // limpio imput
        var precio = $("#precio").val();
        $("#precio").val('');
        var producto = $("#producto").val();
        $("#producto").val('');
        var grupo = 24;
        var informacion = [descripcion, precio, producto];
        var info = {
            "group": grupo,
            "thing": informacion
        };

        if (grupo && informacion) {
            $.ajax({
                type: "POST",
                dataType: 'JSON',
                data: JSON.stringify(info),
                contentType: "application/json; charset=utf-8",
                url: "http://web-unicen.herokuapp.com/api/create",
                success: function (data) {
                    alert('Deploy Success');
                    traerInfo();
                },
                error: function (data) {
                    alert('No se pudo comunicar con el servidor');
                }
            });
        }
    }

    function traerInfo() {
        var grupo = 24;
        $.ajax({
            type: "GET",
            dataType: 'JSON',
            url: "http://web-unicen.herokuapp.com/api/group/" + grupo,
            success: function (data) {
                var descripcion = "";
                var precio = "";
                var producto = "";
                $("#datos").html('');
                for (var i = 9; i < data.information.length; i++) {
                    descripcion = data.information[i]['thing'][0];
                    precio = data.information[i]['thing'][1];
                    producto = data.information[i]['thing'][2];
                    $("#datos").append("<tr><td>" + descripcion + "</td><td>" + precio + '</td><td>' + '<img src="' + producto + '">' + "</td></tr>");
                }

            }
        });
    }
    traerInfo();
    $("#enviar").on('click',function (event){
            event.preventDefault();
            insertar();
        }

    );
});
