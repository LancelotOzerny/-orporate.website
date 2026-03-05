// Фильтрация полных секций (без скачков)
$(document).ready(function() {
    $('.team-filters .btn').click(function() {
        $('.team-filters .btn').removeClass('active');
        $(this).addClass('active');

        const filter = $(this).data('role');

        // Мгновенно скрываем все секции (без анимации, чтобы не скакало)
        $('.team-section').hide();

        if (filter === 'section-0') {
            // Показываем все с плавной анимацией
            $('.team-section').fadeIn(400);
        } else {
            // Показываем только нужную секцию
            $(`.team-section[data-role="${filter}"]`).fadeIn(400);
        }
    });
});
