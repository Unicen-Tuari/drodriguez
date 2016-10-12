$(document).ready(function(){
    $("#circuitos").on("click",function(event){
        event.preventDefault();
        cargar("Circuitos");
    })

    $("#home").on("click",function(event){
        event.preventDefault();
        cargar("Home");
    })

    function cargar(template){
      $.ajax({
          type: "GET",
          dataType: "html",
          url: "index.php?nav="+template,
          success: function(data){
              $("#contenido").html(data);
          },
          error: function(){
              alert("error");
          }
      })
    }

    $("#eventos").on("click",function(event){
        event.preventDefault();
        cargar("Eventos");
    })

    $("#productos").on("click",function(event){
        event.preventDefault();
        cargar("Productos");
    })

    $("#registro").on("click",function(event){
        event.preventDefault();
        cargar("Registro");
    })

    cargar("Home");

    $("#juego").on("click",function(event){
        event.preventDefault();
        cargar("JuegodeDados");
    })
});
