$(document).ready(function(){

  function cargar1(argument) {
    $.ajax({
        type: "GET",
        dataType: "html",
        url: "index.php?action=" + argument,
        success: function(data){
            $("#categoriasList").html(data);
        },
        error: function(){
            alert("error");
        }
    })
  }

  function cargar(argument) {
    $.ajax({
        type: "GET",
        dataType: "html",
        url: "index.php?action=" + argument,
        success: function(data){
            $("#categorias").html(data);
        },
        error: function(){
            alert("error");
        }
    })
  }

  cargar('categoriasDrop');
  cargar1('categoriasListar');

});
