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

    $("#admin").on("click",function(event){
        event.preventDefault();
        cargar("admin");
    })

});
