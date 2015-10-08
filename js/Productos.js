$(document).ready(function(){

  $("#formproducto").submit(function(event){
    //console.log("test");
  event.preventDefault();
      $.ajax({
          url: "index.php?action=addProducto",
          type: "post",
          data: new FormData(this),
          contentType : false,
          processData : false,
          success: function(data){
            // console.log(data);
            // return;
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
