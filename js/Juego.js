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
