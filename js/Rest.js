
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


//------------------------JUEGO------------------------------//

"use strict";

function Dado(idDado){
    this.cantCaras=9;
    this.valor=1;
    this.idHTML=idDado;
}

Dado.prototype.tirar= function(){
    this.valor= Math.floor(Math.random()*this.cantCaras)+1;
    document.getElementById(this.idHTML).src = "images/dados/dado"+this.valor+".png";
}


function Cubilete(){
    this.dado1=new Dado("dado1");
    this.dado2=new Dado("dado2");
    this.tirar = function(){
        this.dado1.tirar();
        this.dado2.tirar();
    }
    this.suma = function(){
        return this.dado1.valor  + this.dado2.valor;
    }
}
function tirarDados(){
    var cubilete=new Cubilete();
    cubilete.tirar();
    return cubilete.suma();
}

function tirarVarios(){
    var tiradas = [];
    var sumayor = 0;
    for (var i = 0; i < document.getElementById('cantDados').value; i++) {
        var suma = tirarDados();
        tiradas[i]=suma;
        if (suma >= sumayor){ /*me quedo con la mejor tirada*/
            sumayor=suma;
        }
    }
    $("#SumaMayor").val(sumayor);
    $('#ValoresTiradas').val(tiradas); /*todas las tiradas*/
}
