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
