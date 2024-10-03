// Buscador de proyectos con jQuery
$('#search').on('input', function () {
    const filter = $(this).val().toLowerCase();
    $('.card').each(function () {
        const tags = $(this).data('tags').toLowerCase();
        if (tags.includes(filter)) {
            $(this).show();
        } else {
            $(this).hide();
        }
    });
});

// Validación del formulario de contacto
$('#contact-form').on('submit', function (e) {
    e.preventDefault();
    // Simplemente muestra un modal de agradecimiento, en una implementación real enviaría los datos al servidor
    alert('¡Gracias por contactarnos!');

    // Limpia el formulario
    $(this).trigger('reset');
});
