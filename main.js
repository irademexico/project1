$(buscar_datos());

function buscar_datos(consulta){
	$.ajax({
		url: 'buscar.php' ,
		type: 'POST' ,
		dataType: 'html',
		data: {consulta: consulta},
    })
	.done(function(respuesta){
		$("#dataContainer").html(respuesta);
	})
	.fail(function(){
		console.log("error");
	});
}

$('#box_search').on('keyup', function(){
	console.log("activo keyup");
	var valor = $(this).val();
	if (valor != "") {
		buscar_datos(valor);
    }else{
		buscar_datos();
	}
});