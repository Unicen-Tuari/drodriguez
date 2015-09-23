$(document).ready(function(){

  function cargar(argument) {
    $.ajax({
        type: "GET",
        dataType: "html",
        url: "index.php?action=" + argument,
        success: function(data){
            $("#contenido").html(data);
        },
        error: function(){
            alert("error");
        }
    })
  }

    cargar("home");

    $("#circuitos").on("click",function(event){
        event.preventDefault();
        cargar("circuitos");
    })

    $("#home").on("click",function(event){
        event.preventDefault();
        cargar("home");
    })

    $("#registro").on("click",function(event){
        event.preventDefault();
        cargar("registro");
    })

    $("#productos").on("click",function(event){
        event.preventDefault();
        cargar("productos");
    })

    $("#eventos").on("click",function(event){
        event.preventDefault();
        cargar("eventos");
    })

    $("#juego").on("click",function(event){
        event.preventDefault();
        cargar("juegodados");
    })
});
