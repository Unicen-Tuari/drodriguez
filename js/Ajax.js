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

$(document).ready(function(){
    $("#eventos").on("click",function(event){
        event.preventDefault();
        $.ajax({
            type: "GET",
            dataType: "html",
            url: "Eventos.html",
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
    $("#productos").on("click",function(event){
        event.preventDefault();
        $.ajax({
            type: "GET",
            dataType: "html",
            url: "Productos.html",
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
    $("#registro").on("click",function(event){
        event.preventDefault();
        $.ajax({
            type: "GET",
            dataType: "html",
            url: "Registro.html",
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
//------------------------JUEGO------------------------------//

"use strict";

var caras =[3,4,5,6,7,8];

function tirarDados() {
    var num = Math.floor(Math.random()*(caras[Math.floor(Math.random()*6)] ))+1;
    return num;
}

function tirarVarios(){
    var tiradas = [];
    var sumayor = 0;
    for (var i = 0; i < document.getElementById('cantDados').value; i++) {
        var suma = tirarDados();
        tiradas.push(suma);
        tiradas[suma-2]++;
    }
    for (var x = 0; x <tiradas.length; x++){
        sumayor += tiradas[x];
    }
    $("#SumaMayor").val(sumayor);
    $('#ValoresTiradas').val(tiradas);
}
