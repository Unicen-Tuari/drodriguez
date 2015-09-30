$(document).ready(function(){

  $("#formproducto").submit(function(event){
  event.preventDefault();
      $.ajax({
          url: "index.php?action=addProducto",
          type: "post",
          data: new FormData(this),
          contentType : false,
          processData : false,
          success: function(){
            cargar('admin');
          },
          error:function(){
              alert("error");
          }
      });

  });


  function cargar(argument) {
    $.ajax({
        type: "GET",
        dataType: "html",
        url: "index.php?action=" + argument,
        success: function(data){
            $("#productosList").html(data);
        },
        error: function(){
            alert("error");
        }
    });
  };



  cargar("productosadmin");


});
