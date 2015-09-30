$('document').ready(function(){

	var producto = 'ProductoCompleto';

	function cargarSeccion(seccion, id_producto){
		$.ajax({
			type: 'GET',
			dataType: 'HTML',
			url: 'index.php?action='+seccion+'&id='+id_producto,
			success: function(data){
						$('#contenido').html(data);
					},
			error: function(){
						alert("error");
					}
		});
	};

	$('.verProducto').on('click', function(event){
		event.preventDefault();
		cargarSeccion(producto, $(this).val());
	});

});
