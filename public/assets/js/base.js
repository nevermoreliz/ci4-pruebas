$(document).ready(function () {
	$('div.menu-container').on('click', 'a.menu--link', function (event) {

		event.preventDefault();
		event.stopPropagation();

		var content = $('.' + (event.target.getAttribute('data-dest') === null ? 'mi-seccion' : event.target.getAttribute('data-dest')));
		var url = $(this).attr('href');
		if (url.substring(0, window.location.origin.length) === window.location.origin) {
			url = url.substring(window.location.origin.length + 1);
		}


		if (url !== '' && url !== '/') {
			// alert('clic dentro');

			try {

				// $.ajax({
				// 	method: 'GET',
				// 	url: (url.substring(0, 1) === '/' ? '' : '/') + url,
				// }).done(function (resultado) {
				// 	content.hide(0).html(resultado).fadeIn('slow');
				// });

				$.ajax({
					url: (url.substring(0, 1) === '/' ? '' : '/') + url,
					method: "GET",
					data: { seccion: "mi-seccion" },
					success: function (response) {
						// $("#mi-seccion").html(response.contenido);
						content.html(response).fadeIn('slow');

						if (response.success) {
							content.html(response.html).fadeIn('slow');
						}

					},
					error: function(xhr, textStatus, errorThrown) {
						console.log(xhr.responseText);
					}
				});

			} catch (error) {
				console.log(error);
				console.log('catch error');
			}


		} else {
			alert('falso');
			content.html('<div class="alert alert-warning"><i class="fa fa-warning"></i> No se encuentra disponible el contenido solicitado.</div>');
		}
		// if (screen.width < 768) {
		// 	$('.mainnav-toggle').click();
		// }
	});
});