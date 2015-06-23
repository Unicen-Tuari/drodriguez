$(document).ready(function(){
    $("#circuitos").on("click",function(event){
        event.preventDefault();
        $.ajax({
            type: "GET",
            dataType: "html",
            url: "Circuitos.html",
            success: function(data){
                $("#contenido").html(data);
            },
            error: function(){
                alert("error");
            }
        })
    })
});

$(document).ready(function(){
    $("#home").on("click",function(event){
        event.preventDefault();
        $.ajax({
            type: "GET",
            dataType: "html",
            url: "Home2.html",
            success: function(data){
                $("#contenido").html(data);
            },
            error: function(){
                alert("error");
            }
        })
    })
});

function enviarEinsertar(){
    var descripcion = $("#descripcion").val();
    var precio = $("#precio").val();
    var producto = $("#producto").val();
    var grupo = 24;
    var informacion = [descripcion, precio, producto];
    var info = {
        "group": grupo,
        "thing": informacion
    };

    if (grupo && informacion){
        $.ajax({
            type: "POST",
            dataType: 'JSON',
            data: JSON.stringify(info),
            contentType: "application/json; charset=utf-8",
            url: "http://web-unicen.herokuapp.com/api/create",
            success: function(data){
                alert('Deploy Success');
            },
            error:function(data){
                alert('No se pudo comunicar con el servidor');
            }
        });
    }
}

function getInformationByGroup(){
    var grupo = 24;
    $.ajax({
        type: "GET",
        dataType: 'JSON',
        url: "http://web-unicen.herokuapp.com/api/group/" + grupo,
        success: function(data){
            var descripcion = "";
            var precio = "";
            var producto = "";
            for (var i = 9; i < data.information.length; i++) {
                descripcion = data.information[i]['thing'][0];
                precio = data.information[i]['thing'][1];
                producto = data.information[i]['thing'][2];
                $("#datos").append("<tr><td>" + descripcion + "</td><td>" + precio + '</td><td>' + '<img src="' + producto + '">' + "</td></tr>");
            }

        }
    });
}