// Usado para la Galeria de cada Escuela

$(document).ready(function(){

	// Agregando clase active al primer enlace 
	$('.category_list .category_item[category="all"]').addClass('ct_item-active');

	// Filtrando las imágenes de la escuela
	$('.category_item').click(function(){
		var catProduct = $(this).attr('category');
		console.log(catProduct);

		// Agregando clase active al enlace seleccionado
		$('.category_item').removeClass('ct_item-active');
		$(this).addClass('ct_item-active');

		// Ocultando las imágenes de la escuela
		$('.product-item').css('transform', 'scale(0)');
		function hideProduct(){
			$('.product-item').hide();
		} setTimeout(hideProduct,400);

		// Mostrando las imágenes de la escuela
		function showProduct(){
			$('.product-item[category="'+catProduct+'"]').show();
			$('.product-item[category="'+catProduct+'"]').css('transform', 'scale(1)');
		} setTimeout(showProduct,400);
	});

	// Mostrando todas las imágenes de la escuela
	$('.category_item[category="all"]').click(function(){
		function showAll(){
			$('.product-item').show();
			$('.product-item').css('transform', 'scale(1)');
		} setTimeout(showAll,400);
	});
});