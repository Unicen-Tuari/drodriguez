$(document).ready(function(){

  $("#formcategoria").submit(function(event){
  event.preventDefault();
      $.ajax({
          url: "index.php?action=addCategoria",
          type: "post",
          data: new FormData(this),
          contentType : false,
          processData : false,
          success: function(){
            cargar('categoriasDrop');
            cargar1('categoriasListar');
          },
          error:function(){
              alert("error");
          }
      });

});

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
